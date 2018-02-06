var url = $(location).attr('href');
var getId = url.split('=');

if(getId[1]){
    var id = getId[1];
}

$.getJSON('../clientes/getAll', function (retorno) {

    retorno.forEach(function (obj, idx) {

        if (obj.clientes_id === id) {

            $('#cdb_id').html(obj.cdb_id);
            $('#contato').html(obj.contato);
            $('#nome').html(obj.nome);
            $('#nome_fantasia').html(obj.nome_fantasia);
            $('#email').html(obj.email);
            $('#telefone').html(obj.telefone);
            $('#celular').html(obj.celular);
            $('#cnpj').html(obj.cnpj);
            $('#st').html(obj.status);
            $('#rua').html(obj.rua);
            $('#numero').html(obj.numero);
            $('#bairro').html(obj.bairro);
            $('#cidade').html(obj.cidade);
            $('#estado').html(obj.estado);
            $('#cep').html(obj.cep);

        }



    });


});




