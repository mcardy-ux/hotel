
$(document).ready(function(){


    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    

    $('#add_rangoEdades').submit(function(event){

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
        if ($('#rangoInicial').val() === "") {
          alert('Debe ingresar el rango inicial','Atencion!');
          $('#rangoInicial').focus();
          return false;
        }
        if ($('#rangoFinal').val() === "") {
            alert('Debe ingresar el rango final','Atencion!');
            $('#rangoFinal').focus();
            return false;
        }
        if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

            var data = $('#add_rangoEdades').serialize();
            $.ajax({
              url: $('#add_rangoEdades #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_rangoEdades #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Rango creado exitosamente');
                  location.href=$('#add_rangoEdades #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});