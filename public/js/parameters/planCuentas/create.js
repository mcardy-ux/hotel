
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

    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    
    $('.inputs_centro').select2();
    $('#add_planCuentas').submit(function(event){

        if ($('#codigoCuenta').val() === "") {
            alert('Debe ingresar el codigo','Atencion!');
            $('#codigoCuenta').focus();
            return false;
        }
        if ($('#nombreCuenta').val() === "") {
            alert('Debe ingresar el nombre de cuenta','Atencion!');
            $('#nombreCuenta').focus();
            return false;
        }
        if ($('#edit_estado').val() === "") {
          alert('Debe seleccionar si aplica tercero','Atencion!');
          $('#edit_estado').focus();
          return false;
      }
        if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){


            var data = new FormData();
            
            var array_centro_Inventario= $('#centroInventario').val();
            data.append('centro_Inventario', array_centro_Inventario);

            var array_centroCosto= $('#centroCosto').val();
            data.append('centro_Costo', array_centroCosto);

            var array_centroVenta= $('#centroVenta').val();
            data.append('centro_Venta', array_centroVenta);


            var other_data = $('#add_planCuentas').serializeArray();
            $.each(other_data,function(key,input){
                data.append(input.name,input.value);
            });

            $.ajax({
              url: $('#add_planCuentas #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_planCuentas #_token').val()},
              type: 'POST',
              data: data,
              processData: false,
              contentType: false,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Plan de Cuentas creado exitosamente');
                  location.href=$('#add_planCuentas #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});