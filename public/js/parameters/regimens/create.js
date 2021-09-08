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
    $('.js-component-multiple').select2();


    $('#add_regimens').submit(function(event){
     
        if ($('#codigo').val() === '') {
            alert('Debe ingresar el codigo del regimen','Atencion!');
            $('#codigo').focus();
            return false;
        }
        if ($('#descripcion').val() === '') {
            alert('Debe ingresar la descripción','Atencion!');
            $('#descripcion').focus();
            return false;
        }
        if ($('#componente_reg :selected').length==0) {
            alert('Debe seleccionar un componente de regimen','Atencion!');
            $('#componente_reg').focus();
            return false;
        }
        

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){

          var data = new FormData();

          var array_componentes= $('#componente_reg').val()
          data.append('array_component_reg', array_componentes);

          var other_data = $('#add_regimens').serializeArray();
          $.each(other_data,function(key,input){
              data.append(input.name,input.value);
          });
          

          $.ajax({
            url: $('#add_regimens #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_regimens #_token').val()},
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
            success: function (response) {
              var json = $.parseJSON(response);
              if(json.success){
                alert('Regimen creado exitosamente');
                location.href=$('#add_regimens #_url').val();
              }else{
                alert(json.data.codigo[0]);
              }
            }
         });
        }
        
       return false;


    });
});