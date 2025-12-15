  $(document).ready(function () {

    // Começa mostrando tudo ou escondendo tudo (você escolhe)
    //$('.bloco-tabela').hide();

    $('#btn-filtrar').click(function () {
        let filtro = $('#categoria').val();

        $('.bloco-tabela').hide(); // esconde tudo

        if (filtro === "") {
            $('.bloco-tabela').show(); // se não escolher nada, mostra tudo
            return;
        }

        $("#tabela-" + filtro).show(); // mostra só a escolhida
    });

});
