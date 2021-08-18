$(document).ready(function(){
  
    $('#edit_user').submit(function(event){
        if ($('#edit_user #name').val() === '') {
            $('#edit_user #name_alert').text('Ingrese un nombre').show();
            $('#edit_user #name').focus();
            return false;
        }
        if ($('#edit_user #password').val() === '') {
            $('#edit_user #password_alert').text('Ingrese una contraseña').show();
            $('#edit_user #password').focus();
            return false;
        }
        if (! $('#edit_user #email').val().match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/)) {
            $('#edit_user #email_alert').text('Ingrese correo electrónico válido').show();
            $('#edit_user #email').focus();
            return false;
        }
        let confirmacion=confirm("¿Esta seguro de editar esta información?");
        if(confirmacion){

            var data = $('#edit_user').serialize();
            $.ajax({
                url: $('#edit_user #_url').val(),
                headers: {'X-CSRF-TOKEN': $('#edit_user #_token').val()},
                type: 'PUT',
                data: data,
                success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                    alert('Usuario editado exitosamente');
                    location.href='/user';
                }else{
                    alert(json.data);
                }
                }
            });
        }

        return false;
    });
});