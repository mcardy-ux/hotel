$(document).ready(function(){
    
   
function vaciarInputs(){
    $('#razon_social').val("");
    $('#direccion_contacto').val("");
    $('#telefono_contacto').val("");
    $('#email_contacto').val("");
    $('#nit').val("");
    $('#digito_nit').val("");
    $('#logo').val("");
}

var input=  document.getElementById('edit_nit');
    input.addEventListener('input',function(){
        if (this.value.length > 10) 
           this.value = this.value.slice(0,10); 
      })
      var input=  document.getElementById('edit_digito_nit');
    input.addEventListener('input',function(){
        if (this.value.length > 1) 
           this.value = this.value.slice(0,1); 
      })

   
     //
    // Fin de validacion de logo
    //******** */   
$('#edit_organization').submit(function(event){
    if ($('#edit_razon_social').val() === '') {
        alert('Debe ingresar la razon social','Atencion!');
        $('#edit_razon_social').focus();
        return false;
    }
    if ($('#edit_direccion_contacto').val() === '') {
        alert('Debe ingresar la dirección de contacto','Atencion!');
        $('#edit_direccion_contacto').focus();
        return false;
    }
    if ($('#edit_telefono_contacto').val() === '') {
        alert('Debe ingresar el telefono de contacto','Atencion!');
        $('#edit_telefono_contacto').focus();
        return false;
    }
    if ($('#edit_email_contacto').val() === '') {
        alert('Debe ingresar el email de contacto','Atencion!');
        $('#edit_email_contacto').focus();
        return false;
    }
    if ($('#edit_nit').val() === '') {
        alert('Debe ingresar el nit','Atencion!');
        $('#edit_nit').focus();
        return false;
    }
    if ($('#edit_digito_nit').val() === '') {
        alert('Debe ingresar el digito de verificación','Atencion!');
        $('#edit_digito_nit').focus();
        return false;
    }

    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

    var data = $('#edit_organization').serialize();
    

    $.ajax({
        url: $('#edit_organization #_url').val(),
        headers: {'X-CSRF-TOKEN': $('#edit_organization #_token').val()},
        type: 'PUT',
        data: data,
        cache:false,
        success: function (response) {
        var json = $.parseJSON(response);
        if(json.success){
            alert('Organización editada exitosamente');
            location.href='/organization';
        }else{
            alert(json.data);
        }
        }
    });
    }

    return false;
});


});