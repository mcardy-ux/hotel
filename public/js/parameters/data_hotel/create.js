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
    $('.js-bank-account-multiple').select2();
    //******** */
    // Incio de Funciones para la Ubicacion
    //
        function cargarCiudades(data) {
            //Ordena el array alfabeticamente.
            data.sort();
            //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
            RemoveOptions("ciudad");
            addOptions("ciudad", data);
        }
        
        // Evento que ocurre cuando es cambiado el municipio se toma last
        // ciudades correspondientes a ese municipio
        $("#municipio").change(function(){
            var id = $(this).val();
            $.ajax({
                url: $('#add_data_hotel #_url').val()+"/request/departaments/"+id,
                headers: {'X-CSRF-TOKEN': $('#add_data_hotel #_token').val()},
                type: 'GET',
                cache: false,
                success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                    cargarCiudades(json.data);
                }
                }
            });
        });

    //
    // Fin de Funciones para la Ubicacion
    //******** */    

    //******** */
    // Inicio de Funciones para el Regimen Tributario
    // 

    function addRegimenes(domElement, array) {
        var selector = document.getElementsByName(domElement)[0];
        //Recorremos el array.
        for (var i=0;i<array.length;i++) {
            var opcion = document.createElement("option");
            opcion.value = array[i];
            opcion.text = array[i];
            selector.add(opcion);
        }
    }

    var data_persona_natural =  new Array(); 
    var data_persona_juridica =  new Array(); 
    data_persona_natural=["Régimen simplificado","Régimen común"];
    data_persona_juridica=["Gran Contribuyente","Régimen común"];

    $("#regimen").change(function(){
        RemoveOptions("tipo_regimen");
        var id = $(this).val();

        if(id=="persona_natural"){
            addRegimenes("tipo_regimen",data_persona_natural);
        }
        if(id=="persona_juridica"){
            addRegimenes("tipo_regimen",data_persona_juridica);
        }
    });

    //
    // Fin de Funciones para el Regimen Tributario
    //******** */    

  



});