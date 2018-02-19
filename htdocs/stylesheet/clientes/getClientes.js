var url = $(location).attr('href');
var getId = url.split('=');

if(getId[1]){
    var id = getId[1];
}
var route = 'http://localhost/';

$.getJSON(route+'adm/clientes/getAll', function (retorno) {

    retorno.forEach(function (obj, idx) {

        if (obj.clientes_id === id) {

            $('input[value]#cdb_id').val(obj.cdb_id);
            $('input[value]#contato').val(obj.contato);
            $('input[value]#nome').val(obj.nome);
            $('input[value]#nome_fantasia').val(obj.nome_fantasia);
            $('input[value]#email').val(obj.email);
            $('input[value]#telefone').val(obj.telefone);
            $('input[value]#celular').val(obj.celular);
            $('input[value]#cnpj').val(obj.cnpj);
            $('input[value]#st').val(obj.status);
            $('input[value]#rua').val(obj.rua);
            $('input[value]#numero').val(obj.numero);
            $('input[value]#bairro').val(obj.bairro);
            $('input[value]#cidade').val(obj.cidade);
            $('input[value]#estado').val(obj.estado);
            $('input[value]#cep').val(obj.cep);

        }



    });


});




