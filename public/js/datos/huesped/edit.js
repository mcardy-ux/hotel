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
    
$('#edit_huesped').submit(function(event){
    if ($('#edit_tipo_doc').val() === '') {
        alert('Debe sleccionar el tipo de documento','Atencion!');
        $('#edit_tipo_doc').focus();
        return false;
    }
    if ($('#edit_numero_doc').val() === '') {
        alert('Debe ingresar el documento','Atencion!');
        $('#edit_numero_doc').focus();
        return false;
    }
    if ($('#edit_lugar_exp').val() === '') {
        alert('Debe seleccionar el lugar de expedición','Atencion!');
        $('#edit_lugar_exp').focus();
        return false;
    }
    if ($('#edit_ciudad_exp').val() === '') {
        alert('Debe seleccionar la ciudad de expedición','Atencion!');
        $('#edit_ciudad_exp').focus();
        return false;
    }
    if ($('#edit_fecha_nacimiento').val() === '') {
        alert('Debe ingresar la fecha de nacimiento','Atencion!');
        $('#edit_fecha_nacimiento').focus();
        return false;
    }
    if ($('#edit_primer_nombre').val() === '') {
        alert('Debe ingresar el primer nombre','Atencion!');
        $('#edit_primer_nombre').focus();
        return false;
    }
    if ( $('#edit_primer_apellido').val() === "") {
        alert('Debe ingresar el primer apellido','Atencion!');
        $('#edit_primer_apellido').focus();
        return false;
    }
    if ( $('#edit_genero').val() === "") {
        alert('Debe seleccionar el genero','Atencion!');
        $('#edit_genero').focus();
        return false;
    }
    if ( $('#edit_direccion').val() === "") {
        alert('Debe ingresar la dirección','Atencion!');
        $('#edit_direccion').focus();
        return false;
    }
    if ( $('#edit_nacionalidad').val() === "") {
        alert('Debe seleccionar la nación','Atencion!');
        $('#edit_nacionalidad').focus();
        return false;
    }
    if ( $('#edit_ciudad').val() === "") {
        alert('Debe seleccionar la ciudad','Atencion!');
        $('#edit_ciudad').focus();
        return false;
    }
    if ( $('#edit_celular').val() === "") {
        alert('Debe ingresar el celular','Atencion!');
        $('#edit_celular').focus();
        return false;
    }
    if ( $('#edit_email').val() === "") {
        alert('Debe ingresar el email','Atencion!');
        $('#edit_email').focus();
        return false;
    }
    if ( $('#edit_tipo_huesped').val() === "") {
        alert('Debe seleccionar el tipo de huesped','Atencion!');
        $('#edit_tipo_huesped').focus();
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
    if ( $('#rel_hotel').val() === "") {
        alert('Recargue la pagina, no existe relacion del hotel','Atencion!');
        $('#rel_hotel').focus();
        return false;
    }

    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

        var data = $('#edit_huesped').serialize();
        console.log(data);
        $.ajax({
            url: $('#edit_huesped #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#edit_huesped #_token').val()},
            type: 'PUT',
            cache: false,
            data: data,
            success: function (response) {
            var json = $.parseJSON(response);
                if(json.success){
                    alert('Huesped editado exitosamente');
                    location.href='/huespedes';
                }else{
                    alert(json.data);
                }
            }
        });
    }

    return false;
    });

});


