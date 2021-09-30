

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
//Funcion Comun para vaciar selects
function RemoveOptions(name) {
 $("#"+name).empty();
}

$(document).ready(function(){


    $('#edit_codigoVenta').submit(function(event){

      if ($('#edit_descripcion').val() === "") {
        alert('Debe ingresar la descripción','Atencion!');
        $('#edit_descripcion').focus();
        return false;
    }
    if ($('#edit_descripcionContable').val() === "") {
        alert('Debe ingresar la descripción contable','Atencion!');
        $('#edit_descripcionContable').focus();
        return false;
    }
    if ($('#edit_puc').val() === "") {
        alert('Debe seleccionar el puc','Atencion!');
        $('#edit_puc').focus();
        return false;
    }
    if ($('#edit_rel_impuesto').val() === "") {
        alert('Debe seleccionar el impuesto','Atencion!');
        $('#edit_rel_impuesto').focus();
        return false;
    }
    if ($('#edit_rel_agrupacion').val() === "") {
        alert('Debe seleccionar la agrupación','Atencion!');
        $('#edit_rel_agrupacion').focus();
        return false;
    }


        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_codigoVenta').serialize();
            $.ajax({
              url: $('#edit_codigoVenta #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_codigoVenta #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Codigo de Venta editado exitosamente');
                  location.href="/codigoVenta";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});