$(document).ready(function () {

    carregaRegistros();
});

function carregaRegistros()
{
    var route = 'http://localhost/';

    $.getJSON(route + 'adm/marketing/getAll', function (retorno) {


        $('thead#list_email').empty();

        var th = '<tr>'

                + '<th class="hidden">id</th> '
                + '<th>ordem</th> '
                + '<th>Titulo</th> '
                + '<th>Status</th> '
                + '<th>Action</th> '

                + '</tr>';

        $('thead#list_email').append(th);
        $('tbody#list_email').empty();
        retorno.forEach(function (obj, idx) {

            

            var tr = '<tr>'

                    + '<td class="hidden">'+obj.campanha_emails_id+'</td> '
                    + '<td class="col-sm-1">'+obj.ordem+'</td> '
                    + '<td>'+obj.titulo+'</td> '
                    + '<td>'+obj.status+'</td> '
                    + '<td>Action</td> '

                    + '</tr>';
            $('tbody#list_email').append(tr);
        });


    });


}
