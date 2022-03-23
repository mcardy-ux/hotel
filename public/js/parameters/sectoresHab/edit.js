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
    

    $('#edit_data_sectoresHab').submit(function(event){
        if ($('#edit_descripcion').val() === '') {
            alert('Debe ingresar la descripción','Atencion!');
            $('#edit_descripcion').focus();
            return false;
        }
        if ($('#edit_hotel_id').val() === "") {
            alert('Debe seleccionar el hotel','Atencion!');
            $('#edit_hotel_id').focus();
            return false;
          }
    
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){
    
        var data = $('#edit_data_sectoresHab').serialize();
        
    
        $.ajax({
            url: $('#edit_data_sectoresHab #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#edit_data_sectoresHab #_token').val()},
            type: 'PUT',
            data: data,
            cache:false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Sector editado exitosamente');
                location.href='/sectoresHab';
            }else{
                alert(json.data);
            }
            }
        });
        }
    
        return false;
    });
    
    
    });