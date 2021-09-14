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

  $('.js-clases-multiple').select2();
    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    

    $('#add_data_habitacion').submit(function(event){

        if ($('#num_habitacion').val() === "") {
            alert('Debe ingresar el numero de habitación','Atencion!');
            $('#num_habitacion').focus();
            return false;
        }
        if ($('#capacidad_huespedes').val() === "") {
            alert('Debe ingresar la Capacidad Huespedes','Atencion!');
            $('#capacidad_huespedes').focus();
            return false;
        }
        if ($('#sector_hab').val() === "") {
          alert('Debe seleccionar el sector de la Habticación','Atencion!');
          $('#sector_hab').focus();
          return false;
        }
        if ($('#sector_hab').val() === "") {
          alert('Debe seleccionar el sector de la Habticación','Atencion!');
          $('#sector_hab').focus();
          return false;
        }
        if ($('#tipo_hab').val() === "") {
          alert('Debe seleccionar el tipo de la Habticación','Atencion!');
          $('#tipo_hab').focus();
          return false;
        }
        if ($('#hotel').val() === "") {
          alert('Debe seleccionar el hotel','Atencion!');
          $('#hotel').focus();
          return false;
        }
        if ($('#clase_hab :selected').length==0) {
          alert('Debe seleccionar las clases','Atencion!');
          $('#clase_hab').focus();
          return false;
      }
        if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

            var data = new FormData();
         
            var array_clases= $('#clase_hab').val();
            data.append('clase_array', array_clases);

            var other_data = $('#add_data_habitacion').serializeArray();
            $.each(other_data,function(key,input){
                data.append(input.name,input.value);
            });
            
            $.ajax({
              url: $('#add_data_habitacion #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_data_habitacion #_token').val()},
              type: 'POST',
              data: data,
              processData: false,
              contentType: false,
              cache: false,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Habitación creado exitosamente');
                  location.href=$('#add_data_habitacion #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});