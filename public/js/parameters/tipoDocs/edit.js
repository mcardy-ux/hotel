
$(document).ready(function(){

    $('#edit_tipoDocs').submit(function(event){

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

            var data = $('#edit_tipoDocs').serialize();
            $.ajax({
              url: $('#edit_tipoDocs #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_tipoDocs #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Tipo de Documento editado exitosamente');
                  location.href="/tipoDocs";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});