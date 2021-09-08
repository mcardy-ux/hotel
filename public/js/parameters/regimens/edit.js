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
    

      //
      // Inicio de submit
      //


    $('#edit_regimens').submit(function(event){
        
        if ($('#edit_codigo').val() === '') {
            alert('Debe ingresar el codigo correspondiente','Atencion!');
            $('#edit_codigo').focus();
            return false;
        }
        
        if ($('#edit_descripcion').val() === '') {
            alert('Debe ingresar la descripción','Atencion!');
            $('#edit_descripcion').focus();
            return false;
        }
        
        if ($('#edit_componente_reg :selected').length==0) {
            alert('Debe seleccionar algun componente','Atencion!');
            $('#edit_componente_reg').focus();
            return false;
        }
        

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

           
            var data = $('#edit_regimens').serializeArray();
            data_component= $('#edit_componente_reg :selected');
            let array=[];
            
            for (let index = 0; index < data_component.length; index++) {
                array[index] = data_component[index].value;
                
            }
            $.ajax({
              url: $('#_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_regimens #_token').val()},
              type: 'PUT',
              data: {
                    data,
                  'array' : array,
              }, 
              cache: false,

              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Regimen editado exitosamente');
                  location.href='/regimens';
                }else{
                  alert(json.data);
                }
              }
           });
        }
          
         return false;

    });
});