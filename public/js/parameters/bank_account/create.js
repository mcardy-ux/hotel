$(document).ready(function(){
    $('#add_bank_account').submit(function(event){
          if ($('#banco').val() === '') {
            alert('Debe ingresar el nombre del banco','Atencion!');
            $('#banco').focus();
            return false;
          }
          if ($('#tipoCuenta').val() === null) {
            alert('Debe seleccionar el tipo de cuenta','Atencion!');
            $('#tipoCuenta').focus();
            return false;
          }
          if ($('#numeroCuenta').val() === '') {
            alert('Debe ingresar el numero de cuenta','Atencion!');
            $('#numeroCuenta').focus();
            return false;
          }
          if ($('#titular').val() === '') {
            alert('Debe ingresar el titular de la cuenta','Atencion!');
            $('#titular').focus();
            return false;
          }
          if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
          }
          

          let confirmacion_add=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion_add){
                var data = $('#add_bank_account').serialize();
                $.ajax({
                    url: $('#add_bank_account #_url').val(),
                    headers: {'X-CSRF-TOKEN': $('#add_bank_account #_token').val()},
                    type: 'POST',
                    cache: false,
                    data: data,
                    success: function (response) {
                        let json = $.parseJSON(response);
                        if(json.success){
                        alert('Cuenta Bancaria ingresada exitosamente');
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