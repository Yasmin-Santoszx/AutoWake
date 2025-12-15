document.addEventListener("DOMContentLoaded", function () {

    const chatMessages = document.getElementById('chat-messages');
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');

    function addMessage(message) {
        if (!message || !message.user) return; // segurança

        const div = document.createElement("div");
        div.classList.add("message");

        div.classList.add(message.user_id == AUTH_ID ? "sent" : "received");

        div.innerHTML = `
            <div class="user-name">${message.user.name}</div>
            <div>${message.message}</div>
            <div class="timestamp">${new Date(message.created_at).toLocaleTimeString("pt-BR", {
                hour: "2-digit",
                minute: "2-digit"
            })}</div>
        `;

        chatMessages.appendChild(div);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    function loadMessages() {
        fetch("/internal-chat/messages")
            .then(res => res.json())
            .then(data => {
                if (!Array.isArray(data)) {
                    console.error("ERRO: o servidor NÃO retornou um array!", data);
                    return;
                }

                chatMessages.innerHTML = "";

                data.forEach(msg => addMessage(msg)); // <-- aqui estava o erro

            })
            .catch(err => console.error("Erro ao carregar mensagens:", err));
    }

    function sendMessage() {
        const message = messageInput.value.trim();

        if (message === "") return;

        fetch("/internal-chat/send", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": CSRF_TOKEN
            },
            body: JSON.stringify({ message })
        })
            .then(res => res.json())
            .then(() => {
                messageInput.value = "";
                loadMessages();
            })
            .catch(err => console.error("Erro ao enviar mensagem:", err));
    }

    sendButton.addEventListener("click", sendMessage);

    messageInput.addEventListener("keypress", (e) => {
        if (e.key === "Enter") sendMessage();
    });

    loadMessages();
    setInterval(loadMessages, 3000);
});
