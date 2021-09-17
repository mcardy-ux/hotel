
$(document).ready(function(){


    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    

    $('#add_origen_clients').submit(function(event){

        if ($('#codigo').val() === "") {
            alert('Debe ingresar el codigo','Atencion!');
            $('#codigo').focus();
            return false;
        }
        if ($('#descripcion').val() === "") {
            alert('Debe ingresar la descripción','Atencion!');
            $('#descripcion').focus();
            return false;
        }
        if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

            var data = $('#add_origen_clients').serialize();
            $.ajax({
              url: $('#add_origen_clients #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_origen_clients #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Origen creado exitosamente');
                  location.href=$('#add_origen_clients #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});