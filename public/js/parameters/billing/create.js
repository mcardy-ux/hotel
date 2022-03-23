$(document).ready(function(){
    $('#add_billing_resolution').submit(function(event){
        if ($('#numResolucion').val() === '') {
            alert('Debe ingresar la resolución de facturacion','Atencion!');
            $('#numResolucion').focus();
            return false;
          }
          if ($('#fechaResolucion').val() === '') {
            alert('Debe seleccionar la fecha de la resolución de facturacion','Atencion!');
            $('#fechaResolucion').focus();
            return false;
          }
          if ($('#desde').val() === '') {
            alert('Debe seleccionar el campo desde','Atencion!');
            $('#desde').focus();
            return false;
          }
          if ($('#hasta').val() === '') {
            alert('Debe seleccionar el campo hasta','Atencion!');
            $('#hasta').focus();
            return false;
          }
          if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
          }
          let fechaResolucion=new Date(document.getElementById('fechaResolucion').value);
          let AnioVencResolucion=fechaResolucion.getFullYear()+2;
          fechaResolucion.setFullYear(AnioVencResolucion);
          if (new Date(fechaResolucion)<=Date.now()) {
            alert('Resolución vencida, no puede superar 18 meses la expedición del acto!');
            return false;
          }

          let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){
            var data = $('#add_billing_resolution').serialize();
            $.ajax({
              url: $('#add_billing_resolution #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_billing_resolution #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Resolucion ingresada exitosamente');
                  location.href=$('#add_billing_resolution #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;
    });
});