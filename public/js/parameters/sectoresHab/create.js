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

$('#add_data_sectoresHab').submit(function(event){
    if ($('#descripcion').val() === '') {
        alert('Debe ingresar la descripción del sector','Atencion!');
        $('#descripcion').focus();
        return false;
    }
    if ($('#hotel_id').val() === "") {
      alert('Debe seleccionar el hotel','Atencion!');
      $('#hotel_id').focus();
      return false;
    }
   

    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

    var data = $('#add_data_sectoresHab').serialize();
    $.ajax({
        url: $('#add_data_sectoresHab #_url').val(),
        headers: {'X-CSRF-TOKEN': $('#add_data_sectoresHab #_token').val()},
        type: 'POST',
        data: data,
        cache:false,
        success: function (response) {
        var json = $.parseJSON(response);
        if(json.success){
            alert('Sector creado exitosamente');
            location.href=$('#add_data_sectoresHab #_url').val();
        }else{
            alert(json.data.descripcion[0]);
        }
        }
    });
    }

    return false;
});


});