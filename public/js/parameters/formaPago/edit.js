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
//Funcion Comun para vaciar selects
function RemoveOptions(name) {
 $("#"+name).empty();
}

$(document).ready(function(){

    $('#edit_formaPago').submit(function(event){

        if ($('#edit_estado').val() === "") {
            alert('Debe seleccionar el estado','Atencion!');
            $('#edit_estado').focus();
            return false;
        }
        if ($('#edit_forma').val() === "") {
            alert('Debe ingresar la forma de pago','Atencion!');
            $('#edit_forma').focus();
            return false;
        }
        if ($('#edit_descripcion').val() === "") {
            alert('Debe ingresar la descripción','Atencion!');
            $('#edit_descripcion').focus();
            return false;
        }
        if ($('#edit_puc').val() === "") {
            alert('Debe ingresar el puc','Atencion!');
            $('#edit_puc').focus();
            return false;
        }
        if ($('#edit_rel_hotel').val() === "") {
          alert('Debe seleccionar el hotel','Atencion!');
          $('#edit_rel_hotel').focus();
          return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_formaPago').serialize();
            $.ajax({
              url: $('#edit_formaPago #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_formaPago #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Forma de pago editado exitosamente');
                  location.href="/formaPago";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});