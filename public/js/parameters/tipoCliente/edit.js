
$(document).ready(function(){

    $('#edit_tipoCliente').submit(function(event){

        if ($('#edit_codigo').val() === "") {
            alert('Debe ingresar el codigo','Atencion!');
            $('#edit_codigo').focus();
            return false;
        }
        if ($('#edit_descripcion').val() === "") {
            alert('Debe ingresar la descripcion','Atencion!');
            $('#edit_descripcion').focus();
            return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_tipoCliente').serialize();
            $.ajax({
              url: $('#edit_tipoCliente #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_tipoCliente #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Tipo de Cliente editado exitosamente');
                  location.href="/tipoCliente";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});