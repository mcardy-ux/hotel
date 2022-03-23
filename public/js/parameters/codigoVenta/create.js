
//Funcion para agregar opciones a un <select>.
function addOptions(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    //Recorremos el array.
    for (var i=0;i<array.length;i++) {
        var opcion = document.createElement("option");
        opcion.value = array[i].id;
        opcion.text = array[i].value;
        selector.add(opcion);
    }
  }
  
  //Funcion para agregar opciones a un <select>.
  function addOptionsConcat(domElement, array) {
    var selector = document.getElementsByName(domElement)[0];
    //Recorremos el array.
    for (var i=0;i<array.length;i++) {
        var opcion = document.createElement("option");
        opcion.value = array[i].id;
        opcion.text = array[i].value+" - "+array[i].secvalue;
        selector.add(opcion);
    }
  }
  
$(document).ready(function(){


    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    

    $('#add_codigoVenta').submit(function(event){

        if ($('#descripcion').val() === "") {
            alert('Debe ingresar la descripción','Atencion!');
            $('#descripcion').focus();
            return false;
        }
        if ($('#descripcionContable').val() === "") {
            alert('Debe ingresar la descripción contable','Atencion!');
            $('#descripcionContable').focus();
            return false;
        }
        if ($('#puc').val() === "") {
            alert('Debe seleccionar el puc','Atencion!');
            $('#puc').focus();
            return false;
        }
        if ($('#rel_impuesto').val() === "") {
            alert('Debe seleccionar el impuesto','Atencion!');
            $('#rel_impuesto').focus();
            return false;
        }
        if ($('#rel_agrupacion').val() === "") {
            alert('Debe seleccionar la agrupación','Atencion!');
            $('#rel_agrupacion').focus();
            return false;
        }

        if ($('#hotel_id').val() === "") {
          alert('Debe seleccionar el hotel','Atencion!');
          $('#hotel_id').focus();
          return false;
      }

        if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

            var data = $('#add_codigoVenta').serialize();
            $.ajax({
              url: $('#add_codigoVenta #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_codigoVenta #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Codigo de Venta creado exitosamente');
                  location.href=$('#add_codigoVenta #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});