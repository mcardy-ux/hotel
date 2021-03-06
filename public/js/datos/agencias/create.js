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
    var input=  document.getElementById('nit');
    input.addEventListener('input',function(){
        if (this.value.length > 10) 
           this.value = this.value.slice(0,10); 
      })
      var input=  document.getElementById('digitoVerificacion');
    input.addEventListener('input',function(){
        if (this.value.length > 1) 
           this.value = this.value.slice(0,1); 
      })
 
$('#add_agencias').submit(function(event){

    if ($('#nit').val() === '') {
        alert('Debe ingresar el nit','Atencion!');
        $('#nit').focus();
        return false;
    }
    if ($('#digitoVerificacion').val() === '') {
        alert('Debe ingresar el Digito de Verificación','Atencion!');
        $('#digitoVerificacion').focus();
        return false;
    }
    if ( $('#nombre').val() === "") {
        alert('Debe ingresar el nombre de la agencia','Atencion!');
        $('#nombre').focus();
        return false;
    }
    if ( $('#telefono').val() === "") {
        alert('Debe ingresar el telefono','Atencion!');
        $('#telefono').focus();
        return false;
    }
    if ( $('#tarifa').val() === "") {
        alert('Debe seleccionar la tarifa','Atencion!');
        $('#tarifa').focus();
        return false;
    }
    if ( $('#forma_pago').val() === "") {
        alert('Debe seleccionar la forma de pago','Atencion!');
        $('#forma_pago').focus();
        return false;
    }

    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

        var data = $('#add_agencias').serialize();
       

        $.ajax({
            url: $('#add_agencias #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_agencias #_token').val()},
            type: 'POST',
            cache: false,
            data: data,
            success: function (response) {
            var json = $.parseJSON(response);
                if(json.success){
                    alert('Agencia creada exitosamente');
                    location.href=$('#add_agencias #_url').val();
                }
            }
        });
    }

    return false;
});

});