
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

  $('.inputs_centro').select2();

    $('#edit_planCuentas').submit(function(event){

      if ($('#edit_codigoCuenta').val() === "") {
          alert('Debe ingresar el codigo','Atencion!');
          $('#edit_codigoCuenta').focus();
          return false;
        }
        if ($('#edit_nombreCuenta').val() === "") {
            alert('Debe ingresar el nombre de cuenta','Atencion!');
            $('#edit_nombreCuenta').focus();
            return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_planCuentas').serialize();
            $.ajax({
              url: $('#edit_planCuentas #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_planCuentas #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Plan de Cuentas editado exitosamente');
                  location.href="/planCuentas";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});