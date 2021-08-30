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
    $('#edit_deptos').select2();
    $('#edit_user').submit(function(event){
        if ($('#edit_user #name').val() === '') {
            $('#edit_user #name_alert').text('Ingrese un nombre').show();
            $('#edit_user #name').focus();
            return false;
        }
        if ($('#edit_user #password').val() === '') {
            $('#edit_user #password_alert').text('Ingrese una contraseña').show();
            $('#edit_user #password').focus();
            return false;
        }
        if (! $('#edit_user #email').val().match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/)) {
            $('#edit_user #email_alert').text('Ingrese correo electrónico válido').show();
            $('#edit_user #email').focus();
            return false;
        }
        let confirmacion=confirm("¿Esta seguro de editar esta información?");
        if(confirmacion){

            var data = $('#edit_user').serializeArray();
            data_bank= $('#edit_deptos :selected');
            let array=[];
            
            
            for (let index = 0; index < data_bank.length; index++) {
                array[index] = data_bank[index].value;
            }

            $.ajax({
                url: $('#edit_user #_url').val(),
                headers: {'X-CSRF-TOKEN': $('#edit_user #_token').val()},
                type: 'PUT',
                data: {
                    data,
                  'array' : array,
                }, 
                cache: false,
                success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                    alert('Usuario editado exitosamente');
                    location.href='/user';
                }else{
                    alert(json.data);
                }
                }
            });
        }

        return false;
    });
});