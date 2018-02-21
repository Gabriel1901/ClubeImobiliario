 $(document).ready(function () {



            var url = $(location).attr('href');

            var getId = url.split('=');

            var route = 'http://localhost/';
            if (getId[1]) {
                var id = getId[1];
            } else {
                id = 'false';
            }

            $(function () {

                $("#enviarEmail").click(function (event)
                {
                    event.preventDefault();
                    var titulo = $('#titulo').val();
                    var status = $('#statusEmail').val();
                    var ordem = $('#ordem').val();
                    var texto = $('#texto').val();





                    $.post(route + 'adm/marketing/setPostEmail&email=' + id, {
                        titulo: titulo,
                        status: status,
                        texto: texto,
                        ordem: ordem
                    }, function (retorno) {

                       
                        $('#myModal').modal('hide');
                        $('#campanha').removeClass('active');
                        $('#emails').addClass('active');
                         location.reload();
                        
                        


                    });

                    return 1;




                });
            });

        });
