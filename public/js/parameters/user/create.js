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
    $('#deptos').select2();
   
    $("#hotel").change(function(){
        var id = $(this).val();
        $.ajax({
            url: $('#add_user #_url').val()+"/request/depto_hotel/"+id,
            headers: {'X-CSRF-TOKEN': $('#add_data_depto #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                
                var array = json.data;
                //Ordena el array alfabeticamente.
                array.sort();
                //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
                addOptions("deptos", array);

            }
            }
        });
    });

    $('#password').change(function(event){
        if ($('#password').length <=6) {
            $('#add_user #password_alert').text('Debe tener mas de seis digitos').show();
            return false;
        }
        else{
            return true;
        }
    });
    $('#add_user').submit(function(event){
        if ($('#add_user #name').val() === '') {
            $('#add_user #name_alert').text('Ingrese un nombre').show();
            $('#add_user #name').focus();
            return false;
        }
        if ($('#add_user #password').val() === '') {
            $('#add_user #password_alert').text('Ingrese una contraseña').show();
            $('#add_user #password').focus();
            return false;
        }
        if (! $('#add_user #email').val().match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/)) {
            $('#add_user #email_alert').text('Ingrese correo electrónico válido').show();
            $('#add_user #email').focus();
            return false;
        }
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){

            var data = new FormData();
            var array_deptos= $('#deptos').val();
            data.append('deptos_sel', array_deptos);

            var other_data = $('#add_user').serializeArray();
            $.each(other_data,function(key,input){
                data.append(input.name,input.value);
            });

        $.ajax({
            url: $('#add_user #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_user #_token').val()},
            type: 'POST',
            data: data,
            processData: false,
            contentType: false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Usuario creado exitosamente');
                location.href=$('#add_user #_url').val();
            }else{
                alert(json.data);
            }
            }
        });
        }

        return false;
    });
});