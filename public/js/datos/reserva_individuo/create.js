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


    $('#add_huesped').submit(function(event){
        
        if ($('#numero_doc').val() === '') {
            alert('Debe ingresar el numero del documento','Atencion!');
            $('#numero_doc').focus();
            return false;
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
        if ( $('#celular').val() === "") {
            alert('Debe ingresar el celular','Atencion!');
            $('#celular').focus();
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
        if ( $('#_hotel').val() === "") {
            alert('Recargue la pagina, no existe relacion del hotel','Atencion!');
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
                        $("#ModalCreateGuest").modal('hide');
                    }else{
                        alert(`Error: ${response.data}`);
                    }
                    
                }
            });
        }
    
        return false;
    });

});