$(document).ready(function(){
    $('#password').change(function(event){
        if ($('#password').length <=6) {
            $('#add_user #password_alert').text('Debe tener mas de seis digitos').show();
            return false;
        }
        else{
            return true;
        }
    });
    $('#add_user').submit(function(event){
        if ($('#add_user #name').val() === '') {
            $('#add_user #name_alert').text('Ingrese un nombre').show();
            $('#add_user #name').focus();
            return false;
        }
        if ($('#add_user #password').val() === '') {
            $('#add_user #password_alert').text('Ingrese una contraseña').show();
            $('#add_user #password').focus();
            return false;
        }
        if (! $('#add_user #email').val().match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/)) {
            $('#add_user #email_alert').text('Ingrese correo electrónico válido').show();
            $('#add_user #email').focus();
            return false;
        }
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){

            var data = $('#add_user').serialize();

        $.ajax({
            url: $('#add_user #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_user #_token').val()},
            type: 'POST',
            data: data,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Usuario creado exitosamente');
                location.href=$('#add_user #_url').val();
            }else{
                alert(json.data);
            }
            }
        });
        }

        return false;
    });
});