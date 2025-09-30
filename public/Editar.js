const fileInput = document.getElementById('fileInput');
const preview = document.getElementById('preview');
const fotoHint = document.getElementById('fotoHint');
const defaultIcon = document.getElementById('defaultIcon');
const formulario = document.getElementById('formularioEdicao');

// Exibir imagem selecionada
fileInput.addEventListener('change', function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function (e) {
      preview.src = e.target.result;
      preview.style.display = "block";
      fotoHint.style.display = "none";
      defaultIcon.style.display = "none";
    };
    reader.readAsDataURL(file);
  }
});

// Cancelar edição
function cancelar() {
  formulario.style.display = "none";
  document.getElementById('nome').value = "";
  document.getElementById('email').value = "";
}

// Salvar dados
function salvar() {
  const nome = document.getElementById('nome').value;
  const email = document.getElementById('email').value;
  alert(`Alterações salvas:\nNome: ${nome}\nEmail: ${email}`);
  cancelar(); // Oculta formulário após salvar
}
