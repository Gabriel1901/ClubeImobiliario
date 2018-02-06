$(document).ready(function () {

    carregaRegistros();

});

function carregaRegistros()
{
    

 

var route = 'http://www.cdbclubeimobiliario.com.br/adm/';
    $.getJSON(route+'clientes/getAll', function (retorno) {


console.log(retorno);
        $('thead.lista2').empty();

        var th = '<tr>'
                + ' <tr> <td class="text-left">Código</td>'
                + '<td class="text-left"><a class="asc">Cliente</a></td>'
                + '<td class="text-left"><a class="asc">Contato</a></td>'
                + '<td class="text-left"><a class="asc">Email</a></td>'
                + '<td class="text-left"><a class="asc">Telefone</a></td>'
                + '<td class="text-left"><a class="asc">Status</a></td>	'
                + '<td class="text-center">Action</td>'
                + '</tr>';

        $('thead.lista2').append(th);
        $('tbody.lista2').empty();
        retorno.forEach(function (obj, idx) {


            var tr = '<tr obj-id="' + obj.cliente_id + '">'


                    + '<td class="text-left">' + obj.clientes_id + '</td>'
                    + '<td class="text-left">' + obj.nome_fantasia + '</td>'
                    + '<td class="text-left">' + obj.contato + '</td>'
                    + '<td class="text-left">' + obj.email + '</td>'
                    + '<td class="text-left">' + obj.telefone + '</td>'
                    + '<td class="text-left">' + obj.status + '</td>'
                    + '<td class="text-center">'
                    + ' <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Infos"><i class="fa fa-eye"></i></button>'
                    + ' <a href='+route+'painel/editarClientes&clientes=' + obj.clientes_id + ' data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Editar"><i class="fa fa-pencil"></i></a>'
                    + ' <a href="#" data-toggle="tooltip" title="" class="btn btn-red" data-original-title="Ir para o pedido"><i class="fa fa-external-link"></i></a>'
                    + '</td>'

                    + '</tr>';
            $('tbody.lista2').append(tr);
        });


    }
    );


}
