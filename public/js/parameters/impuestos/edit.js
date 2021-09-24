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

    $('#edit_impuestos').submit(function(event){

      if ($('#edit_nombre').val() === "") {
          alert('Debe seleccionar el nombre','Atencion!');
          $('#edit_nombre').focus();
          return false;
      }
      if ($('#edit_descripcion').val() === "") {
          alert('Debe ingresar la descripción','Atencion!');
          $('#edit_descripcion').focus();
          return false;
      }
      if ($('#edit_porcentaje').val() === "") {
          alert('Debe ingresar el porcentaje','Atencion!');
          $('#edit_porcentaje').focus();
          return false;
      }
      if ($('#edit_puc').val() === "") {
          alert('Debe ingresar el puc','Atencion!');
          $('#edit_puc').focus();
          return false;
      }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_impuestos').serialize();
            $.ajax({
              url: $('#edit_impuestos #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_impuestos #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Impuesto editado exitosamente');
                  location.href="/impuestos";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});