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
 
  //******** */
    // Incio de Funciones para la Ubicacion
    //
    function cargarCiudades(data) {
        //Ordena el array alfabeticamente.
        data.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        RemoveOptions("edit_ciudad");
        addOptions("edit_ciudad", data);
    }
    
    // Evento que ocurre cuando es cambiado el municipio se toma last
    // ciudades correspondientes a ese municipio
  

//
// Fin de Funciones para la Ubicacion
//******** */   


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

$(document).ready(function(){

    //Inicializacion de codigo de javascript para el select
    $('.js-bank-account-multiple').select2();
    

    //******** */
    // Inicio de Funciones para el Regimen Tributario
    // 
    var data_persona_natural =  new Array(); 
    var data_persona_juridica =  new Array(); 
    data_persona_natural=["Régimen simplificado","Régimen común"];
    data_persona_juridica=["Gran Contribuyente","Régimen común"];

    $("#edit_regimen").change(function(){
        RemoveOptions("edit_tipo_regimen");
        var id = $(this).val();

        if(id=="persona_natural"){
            addRegimenes("edit_tipo_regimen",data_persona_natural);
        }
        if(id=="persona_juridica"){
            addRegimenes("edit_tipo_regimen",data_persona_juridica);
        }
    });

    //
    // Fin de Funciones para el Regimen Tributario
    //******** */   
    // Evento que ocurre cuando es cambiado el municipio se toma last
        // ciudades correspondientes a ese municipio
        $("#edit_municipio").change(function(){
            var id = $(this).val();
            $.ajax({
                url: $('#edit_data_hotel #_url').val()+"/request/departaments/"+id,
                headers: {'X-CSRF-TOKEN': $('#edit_data_hotel #_token').val()},
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
    // Inicio de Funciones para el Codigo Ciiu segun la selección
    // 

    $("#edit_tipo_ciiu").change(function(){
        RemoveOptions("edit_ciiu");
        var id = $(this).val();
        $.ajax({
            url: $('#edit_data_hotel #_url').val()+"/request/ciiu/"+id,
            headers: {'X-CSRF-TOKEN': $('#edit_data_hotel #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                addOptionsConcat("edit_ciiu",json.data);
            }
            }
        });
    });
  
    //
    // Fin de Funciones para el codigo ciiu
    //******** */  
    var input=  document.getElementById('edit_nit');
    input.addEventListener('input',function(){
        if (this.value.length > 10) 
           this.value = this.value.slice(0,10); 
      })
      var input=  document.getElementById('edit_digito_nit');
    input.addEventListener('input',function(){
        if (this.value.length > 1) 
           this.value = this.value.slice(0,1); 
      })

      //
      // Inicio de submit
      //


    $('#edit_data_hotel').submit(function(event){
        if ($('#edit_razon_social').val() === '') {
            alert('Debe ingresar la razon social','Atencion!');
            $('#edit_razon_social').focus();
            return false;
        }
        if ($('#edit_razon_comercial').val() === '') {
            alert('Debe ingresar la razon comercial','Atencion!');
            $('#edit_razon_comercial').focus();
            return false;
        }
        if ($('#edit_nit').val() === '') {
            alert('Debe ingresar el nit','Atencion!');
            $('#edit_nit').focus();
            return false;
        }
        if ($('#edit_digito_nit').val() === '') {
            alert('Debe ingresar el digito de verificacion','Atencion!');
            $('#edit_digito_nit').focus();
            return false;
        }
        if ($('#edit_direccion').val() === '') {
            alert('Debe ingresar la direccion','Atencion!');
            $('#edit_direccion').focus();
            return false;
        }
        if ($('#edit_regimen').val() === "") {
            alert('Debe seleccionar el regimen tributario','Atencion!');
            $('#edit_regimen').focus();
            return false;
        }
        if ($('#edit_tipo_regimen').val() === "") {
            alert('Debe seleccionar el tipo de regimen tributario','Atencion!');
            $('#edit_tipo_regimen').focus();
            return false;
        }
        if ($('#edit_telefono').val() === '') {
            alert('Debe ingresar el telefono','Atencion!');
            $('#edit_telefono').focus();
            return false;
        }
        if ($('#edit_telefono_alt').val() === '') {
            alert('Debe ingresar el telefono alterno','Atencion!');
            $('#edit_telefono_alt').focus();
            return false;
        }
        if ($('#edit_municipio').val() === "") {
            alert('Debe seleccionar el municipio','Atencion!');
            $('#edit_municipio').focus();
            return false;
        }
        if ($('#edit_ciudad').val() === "") {
            alert('Debe seleccionar la ciudad','Atencion!');
            $('#edit_ciudad').focus();
            return false;
        }
        if ( $('#edit_resolucion_facturacion').val() === "") {
            alert('Debe seleccionar la resolucion de facturación','Atencion!');
            $('#edit_resolucion_facturacion').focus();
            return false;
        }
        if ($('#edit_tipo_ciiu').val() === "") {
            alert('Debe seleccionar la categoria de ciiu','Atencion!');
            $('#edit_tipo_ciiu').focus();
            return false;
        }
        if ($('#edit_ciiu').val() === "") {
            alert('Debe seleccionar el codigo ciiu','Atencion!');
            $('#edit_ciiu').focus();
            return false;
        }
        if ($('#edit_cuenta_bancaria :selected').length==0) {
            alert('Debe seleccionar la cuenta bancaria','Atencion!');
            $('#edit_cuenta_bancaria').focus();
            return false;
        }
        

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

           
            var data = $('#edit_data_hotel').serializeArray();
            data_bank= $('#edit_cuenta_bancaria :selected');
            let array=[];
            
            
            for (let index = 0; index < data_bank.length; index++) {
                array[index] = data_bank[index].value;
                
            }
            console.log(array);
            $.ajax({
              url: $('#_urlSubmit').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_data_hotel #_token').val()},
              type: 'PUT',
              data: {
                    data,
                  'array' : array,
              }, 
              cache: false,

              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Hotel editado exitosamente');
                  location.href=$('#edit_data_hotel #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
        }
          
         return false;

    });
});