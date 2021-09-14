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

    //Inicializacion de codigo de javascript para el select
    $('.js-clases-multiple').select2();
    

   

    $('#edit_data_habitacion').submit(function(event){
        
        if ($('#edit_num_habitacion').val() === '') {
            alert('Debe ingresar el numero de habitaciónl','Atencion!');
            $('#edit_num_habitacion').focus();
            return false;
        }
        
        if ($('#edit_capacidad_huespedes').val() === '') {
            alert('Debe ingresar la capacidad','Atencion!');
            $('#edit_capacidad_huespedes').focus();
            return false;
        }
        if ($('#edit_sector_hab').val() === "") {
            alert('Debe seleccionar el sector de la habitación','Atencion!');
            $('#edit_sector_hab').focus();
            return false;
        }
        if ($('#edit_tipo_hab').val() === "") {
            alert('Debe seleccionar el tipo de habitación','Atencion!');
            $('#edit_tipo_hab').focus();
            return false;
        }
        if ($('#edit_estado').val() === '') {
            alert('Debe seleccionar el estado','Atencion!');
            $('#edit_estado').focus();
            return false;
        }
        if ($('#edit_hotel').val() === '') {
            alert('Debe seleccionar el hotel','Atencion!');
            $('#edit_hotel').focus();
            return false;
        }
        
        if ($('#edit_clase_hab :selected').length==0) {
            alert('Debe seleccionar la clase de habitación','Atencion!');
            $('#edit_clase_hab').focus();
            return false;
        }
        

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

           
            var data = $('#edit_data_habitacion').serializeArray();
            var clases= $('#edit_clase_hab :selected');
            let array=[];
            
            
            for (let index = 0; index < clases.length; index++) {
                array[index] = clases[index].value;
                
            }
            console.log(array);
            $.ajax({
              url: $('#_urlSubmit').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_data_habitacion #_token').val()},
              type: 'PUT',
              data: {
                    data,
                  'array' : array,
              }, 
              cache: false,

              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Habitación editada exitosamente');
                  location.href=$('#edit_data_habitacion #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
        }
          
         return false;

    });
});