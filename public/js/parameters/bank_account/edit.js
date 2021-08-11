$(document).ready(function(){

    $('#edit_bank_account').submit(function(){

        if ($('#banco').val() === '') {
            alert('Debe ingresar el nombre del banco!');
            $('#banco').focus();
            return false;
        }
        if ($('#tipoCuenta').val() === null) {
            alert('Debe seleccionar el tipo de cuenta!');
            $('#tipoCuenta').focus();
            return false;
        }
        if ($('#numeroCuenta').val() === '') {
            alert('Debe ingresar el numero de cuenta!');
            $('#numeroCuenta').focus();
            return false;
        }
        if ($('#titular').val() === '') {
            alert('Debe ingresar el titular de la cuenta!');
            $('#titular').focus();
            return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        //Inicio de confirmacion

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){
                var data = $('#edit_bank_account').serialize();
                $.ajax({
                    url: $('#edit_bank_account #_url').val(),
                    headers: {'X-CSRF-TOKEN': $('#edit_bank_account #_token').val()},
                    type: 'PUT',
                    cache: false,
                    data: data,
                    success: function (response) {
                        let json = $.parseJSON(response);
                        if(json.success){
                        alert('Cuenta Bancaria editada exitosamente');
                        location.href='/bank_account';
                        }else{
                        alert(json.data);
                        }
                    }
                });
            }
          
         return false;


    });

 });