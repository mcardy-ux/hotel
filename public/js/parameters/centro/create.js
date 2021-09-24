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
    
    $('#add_centro').submit(function(event){

        if ($('#nombre').val() === "") {
            alert('Debe ingresar el nombre','Atencion!');
            $('#nombre').focus();
            return false;
        }
        if ($('#departamento').val() === "") {
            alert('Debe ingresar el departamento','Atencion!');
            $('#departamento').focus();
            return false;
        }
        if ($('#PUC_Costo').val() === "") {
            alert('Debe ingresar el PUC de Costo','Atencion!');
            $('#PUC_Costo').focus();
            return false;
        }
        if ($('#PUC_Gasto').val() === "") {
            alert('Debe ingresar el PUC de Gasto','Atencion!');
            $('#PUC_Gasto').focus();
            return false;
        }
        if ($('#tipo').val() === "") {
            alert('Debe ingresar el tipo','Atencion!');
            $('#tipo').focus();
            return false;
        }
        if ($('#puc').val() === "") {
            alert('Debe seleccionar el puc','Atencion!');
            $('#puc').focus();
            return false;
        }


        if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

            var data = $('#add_centro').serialize();
            $.ajax({
              url: $('#add_centro #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_centro #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Centro creado exitosamente');
                  location.href=$('#add_centro #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});