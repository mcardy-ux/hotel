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

    $('#edit_centro').submit(function(event){
        if ($('#edit_codigo').val() === "") {
            alert('Debe ingresar el codigo','Atencion!');
            $('#edit_codigo').focus();
            return false;
        }
        if ($('#edit_nombre').val() === "") {
            alert('Debe ingresar el nombre','Atencion!');
            $('#edit_nombre').focus();
            return false;
        }
        if ($('#edit_departamento').val() === "") {
            alert('Debe ingresar el departamento','Atencion!');
            $('#edit_departamento').focus();
            return false;
        }
        if ($('#edit_tipo').val() === "") {
            alert('Debe ingresar el tipo','Atencion!');
            $('#edit_tipo').focus();
            return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_centro').serialize();
            $.ajax({
              url: $('#edit_centro #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_centro #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Centro editado exitosamente');
                  location.href="/centro";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});