$(document).ready(function(){

    $('#edit_billing_resolution').submit(function(){

        if ($('#numResolucion').val() === '') {
            alert('Debe ingresar el numero de resolución!');
            $('#numResolucion').focus();
            return false;
        }
        if ($('#fechaResolucion').val() === '') {
            alert('Debe seleccionar la fecha de resolución!');
            $('#fechaResolucion').focus();
            return false;
        }
        if ($('#desde').val() === '') {
            alert('Debe seleccionar la fecha del campo desde!');
            $('#desde').focus();
            return false;
        }
        if ($('#hasta').val() === '') {
            alert('Debe seleccionar la fecha del campo hasta!');
            $('#hasta').focus();
            return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        //Inicio de confirmacion

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){
                var data = $('#edit_billing_resolution').serialize();
                $.ajax({
                    url: $('#edit_billing_resolution #_url').val(),
                    headers: {'X-CSRF-TOKEN': $('#edit_billing_resolution #_token').val()},
                    type: 'PUT',
                    cache: false,
                    data: data,
                    success: function (response) {
                        let json = $.parseJSON(response);
                        if(json.success){
                        alert('Resolucion editada exitosamente');
                        location.href='/billing';
                        }else{
                        alert(json.data);
                        }
                    }
                });
            }
          
         return false;


    });

 });