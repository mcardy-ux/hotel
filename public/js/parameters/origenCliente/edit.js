
$(document).ready(function(){

    $('#edit_origens').submit(function(event){

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

            var data = $('#edit_origens').serialize();
            $.ajax({
              url: $('#edit_origens #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_origens #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Origen editado exitosamente');
                  location.href="/origenCliente";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});