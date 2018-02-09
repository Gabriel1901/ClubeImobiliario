var url = $(location).attr('href');

var getId = url.split('=');


if (getId[1]) {
    var id = getId[1];
} else {
    id = 'false';
}

$(function () {
    $("form").submit(function (event)
    {
        event.preventDefault();
        var cdb_id = $('input#cdb_id').val();
        var contato = $('input#contato').val();
        var nome = $('input#nome').val();
        var nome_fantasia = $('input#nome_fantasia').val();
        var email = $('input#email').val();
        var telefone = $('input#telefone').val();
        var celular = $('input#celular').val();
        var cnpj = $('input#cnpj').val();
        var status = $('#st').val();
        var rua = $('input#rua').val();
        var numero = $('input#numero').val();
        var bairro = $('input#bairro').val();
        var cidade = $('input#cidade').val();
        var estado = $('input#estado').val();
        var cep = $('input#cep').val();




        $.post('../clientes/setPost&clientes=' + id, {
            cdb_id: cdb_id,
            contato: contato,
            nome: nome,
            nome_fantasia: nome_fantasia,
            email: email,
            telefone: telefone,
            celular: celular,
            cnpj: cnpj,
            status: status,
            rua: rua,
            numero: numero,
            bairro: bairro,
            cidade: cidade,
            estado: estado,
            cep: cep}, function (retorno) {


          window.alert(retorno);
          window.location = "clientes";


        });

        return 1;




    });
});

