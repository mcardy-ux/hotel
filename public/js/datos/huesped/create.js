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

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}



$(document).ready(function(){

    // validacion para el selector de registro del documento
    $("#validacion_registro").change(function(){
    let opcion=$(this).val();

    if(opcion==="true"){
        $('#registro_sistema').css("display","none");
        $('#registro_documento').css("display","block");
        $('#id_registro').val("");
    }if(opcion==="false"){
        $('#registro_sistema').css("display","block");
        let id_reg=getRandomInt(1,999999999);
        $('#registro_sistema').text("ID: "+id_reg).addClass("lead color-theme-1 mb-2");
        $('#id_registro').val(id_reg);
        $('#registro_documento').css("display","none");
    }
});
    
 
$('#add_huesped').submit(function(event){
 
    if ($('#validacion_registro').val() === 'false') {
        if ($('#id_registro').val() === '') {
            alert('No se encuentra el ID, por favor recargue la pagina.','Atencion!');
            return false;
        }
    }
    if ($('#validacion_registro').val() === 'true') {
        if ($('#tipo_doc').val() === '') {
            alert('Debe seleccionar el tipo de documento','Atencion!');
            $('#tipo_doc').focus();
            return false;
        }
        if ($('#numero_doc').val() === '') {
            alert('Debe ingresar el numero del documento','Atencion!');
            $('#numero_doc').focus();
            return false;
        }
    }
    if ($('#primer_nombre').val() === '') {
        alert('Debe ingresar el primer nombre','Atencion!');
        $('#primer_nombre').focus();
        return false;
    }
    if ($('#primer_apellido').val() === '') {
        alert('Debe ingresar el primer apellido','Atencion!');
        $('#primer_apellido').focus();
        return false;
    }
    if ( $('#genero').val() === "") {
        alert('Debe seleccionar el genero','Atencion!');
        $('#genero').focus();
        return false;
    }
    if ( $('#direccion').val() === "") {
        alert('Debe ingresar la dirección','Atencion!');
        $('#direccion').focus();
        return false;
    }
    if ( $('#telefono').val() === "") {
        alert('Debe ingresar el telefono','Atencion!');
        $('#telefono').focus();
        return false;
    }
    if ( $('#email').val() === "") {
        alert('Debe ingresar el email','Atencion!');
        $('#email').focus();
        return false;
    }
    if ( $('#tipo_huesped').val() === "") {
        alert('Debe seleccionar el tipo de huesped','Atencion!');
        $('#tipo_huesped').focus();
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
    if ( $('#rel_hotel').val() === "") {
        alert('Recargue la pagina, no existe relacion del hotel','Atencion!');
        $('#rel_hotel').focus();
        return false;
    }

    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

        var data = $('#add_huesped').serialize();
       

        $.ajax({
            url: $('#add_huesped #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_huesped #_token').val()},
            type: 'POST',
            cache: false,
            data: data,
            success: function (response) {
            var json = $.parseJSON(response);
                if(json.success){
                    alert('Huesped creado exitosamente');
                    location.href=$('#add_huesped #_url').val();
                }
            }
        });
    }

    return false;
});

});