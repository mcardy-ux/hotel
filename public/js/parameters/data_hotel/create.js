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

    //******** */
    // Inicio de Funciones para el Codigo Ciiu segun la selección
    // 

    $("#tipo_ciiu").change(function(){
        RemoveOptions("ciiu");
        var id = $(this).val();
        $.ajax({
            url: $('#add_data_hotel #_url').val()+"/request/ciiu/"+id,
            headers: {'X-CSRF-TOKEN': $('#add_data_hotel #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                addOptionsConcat("ciiu",json.data);
            }
            }
        });
    });
  
    //
    // Fin de Funciones para el codigo ciiu
    //******** */   
    
    var input=  document.getElementById('nit');
    input.addEventListener('input',function(){
        if (this.value.length > 10) 
           this.value = this.value.slice(0,10); 
      })
      var input=  document.getElementById('digito_nit');
    input.addEventListener('input',function(){
        if (this.value.length > 1) 
           this.value = this.value.slice(0,1); 
      })

    //******** */
    // Inicio de Funcion para validar logo
    // 
    function validarImagen() {
        var fileSize = $('#logo')[0].files[0].size;
        var siezekiloByte = parseInt(fileSize / 1024);
        if (siezekiloByte > 1999) { //Tamaño Minimo de adjuntar archivos de soporte en alamacen 1.9 mb
            return false;
        }
        else{
          return true;
        }
      }
      
    $("#logo").change(function(){
        var filename = $(this).val();
       
        var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
        if(!allowedExtensions.exec(filename)){
          alert('Extension no valida. | (Permitidas: jpg-png-jpeg)');
          $("#logo").val("");
            return false;
        }
        if(!validarImagen()){
          alert("El archivo cargado supera el tamaño limite. (Debe ser menor a 1.9 Mb)");
          $("#logo").val("");
          return false;
        }
      });
     //
    // Fin de validacion de logo
    //******** */   

    $('#add_data_hotel').submit(function(event){
        if ($('#razon_social').val() === '') {
            alert('Debe ingresar la razon social','Atencion!');
            $('#razon_social').focus();
            return false;
        }
        if ($('#razon_comercial').val() === '') {
            alert('Debe ingresar la razon comercial','Atencion!');
            $('#razon_comercial').focus();
            return false;
        }
        if ($('#nit').val() === '') {
            alert('Debe ingresar el nit','Atencion!');
            $('#nit').focus();
            return false;
        }
        if ($('#digito_nit').val() === '') {
            alert('Debe ingresar el digito de verificacion','Atencion!');
            $('#digito_nit').focus();
            return false;
        }
        if ($('#direccion').val() === '') {
            alert('Debe ingresar la direccion','Atencion!');
            $('#direccion').focus();
            return false;
        }
        if ($('#regimen').val() === "") {
            alert('Debe seleccionar el regimen tributario','Atencion!');
            $('#regimen').focus();
            return false;
        }
        if ($('#tipo_regimen').val() === "") {
            alert('Debe seleccionar el tipo de regimen tributario','Atencion!');
            $('#tipo_regimen').focus();
            return false;
        }
        if ($('#telefono').val() === '') {
            alert('Debe ingresar el telefono','Atencion!');
            $('#telefono').focus();
            return false;
        }
        if ($('#telefono_alt').val() === '') {
            alert('Debe ingresar el telefono alterno','Atencion!');
            $('#telefono_alt').focus();
            return false;
        }
        if ($('#municipio').val() === "") {
            alert('Debe seleccionar el municipio','Atencion!');
            $('#municipio').focus();
            return false;
        }
        if ($('#ciudad').val() === "") {
            alert('Debe seleccionar la ciudad','Atencion!');
            $('#ciudad').focus();
            return false;
        }
        if ( $('#logo').val() === "") {
            alert('Debe seleccionar un logo de la empresa','Atencion!');
            $('#logo').focus();
            return false;
        }
        if ( $('#resolucion_facturacion').val() === "") {
            alert('Debe seleccionar la resolucion de facturación','Atencion!');
            $('#resolucion_facturacion').focus();
            return false;
        }
        if ($('#tipo_ciiu').val() === "") {
            alert('Debe seleccionar la categoria de ciiu','Atencion!');
            $('#tipo_ciiu').focus();
            return false;
        }
        if ($('#ciiu').val() === "") {
            alert('Debe seleccionar el codigo ciiu','Atencion!');
            $('#ciiu').focus();
            return false;
        }
        if ($('#cuenta_bancaria :selected').length==0) {
            alert('Debe seleccionar la cuenta bancaria','Atencion!');
            $('#cuenta_bancaria').focus();
            return false;
        }
        

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

            var data = new FormData();
            var file = $('#logo')[0].files[0];
            data.append('logo', file);

            var array_bank= $('#cuenta_bancaria').val()
            data.append('bank_accounts', array_bank);

            var other_data = $('#add_data_hotel').serializeArray();
            $.each(other_data,function(key,input){
                data.append(input.name,input.value);
            });
            

            $.ajax({
              url: $('#add_data_hotel #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_data_hotel #_token').val()},
              type: 'POST',
              data: data,
              processData: false,
              contentType: false,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Hotel creado exitosamente');
                  location.href=$('#add_data_hotel #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
});