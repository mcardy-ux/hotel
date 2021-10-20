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
    var input=  document.getElementById('edit_nit');
    input.addEventListener('input',function(){
        if (this.value.length > 10) 
           this.value = this.value.slice(0,10); 
      })
    var input=  document.getElementById('edit_digitoVerificacion');
    input.addEventListener('input',function(){
        if (this.value.length > 1) 
           this.value = this.value.slice(0,1); 
      })
   
    $('#edit_agencias').submit(function(event){

  

    if ($('#edit_nit').val() === '') {
        alert('Debe ingresar el nit','Atencion!');
        $('#edit_nit').focus();
        return false;
    }
    if ($('#edit_digitoVerificacion').val() === '') {
        alert('Debe ingresar el Digito de Verificación','Atencion!');
        $('#edit_digitoVerificacion').focus();
        return false;
    }
    if ( $('#edit_nombre').val() === "") {
        alert('Debe ingresar el nombre de la agencia','Atencion!');
        $('#edit_nombre').focus();
        return false;
    }
    if ( $('#edit_telefono').val() === "") {
        alert('Debe ingresar el telefono','Atencion!');
        $('#edit_telefono').focus();
        return false;
    }
    if ( $('#edit_tarifa').val() === "") {
        alert('Debe seleccionar la tarifa','Atencion!');
        $('#edit_tarifa').focus();
        return false;
    }
    if ( $('#edit_forma_pago').val() === "") {
        alert('Debe seleccionar la forma de pago','Atencion!');
        $('#edit_forma_pago').focus();
        return false;
    }

    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

        var data = $('#edit_agencias').serialize();
        console.log(data);
        $.ajax({
            url: $('#edit_agencias #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#edit_agencias #_token').val()},
            type: 'PUT',
            cache: false,
            data: data,
            success: function (response) {
            var json = $.parseJSON(response);
                if(json.success){
                    alert('Agencias editada exitosamente');
                    location.href='/agencias';
                }else{
                    alert(json.data);
                }
            }
        });
    }

    return false;
    });

});

