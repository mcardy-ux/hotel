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
    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    $("#edit_responsable").change(function(){
        var id = $(this).val();
        $.ajax({
            url: $('#edit_departament #_url').val()+"/request/depto_hotel/"+id,
            headers: {'X-CSRF-TOKEN': $('#add_data_depto #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                document.getElementById("edit_email").value="";
                document.getElementById("edit_email").value=json.data.email;

            }
            }
        });
    });

    $('#edit_departament').submit(function(event){

        if ($('#edit_nombre').val() === "") {
            alert('Debe ingresar el nombre del departamento','Atencion!');
            $('#nombre').focus();
            return false;
        }
        if ($('#edit_responsable').val() === "") {
            alert('Debe seleccionar el responsable','Atencion!');
            $('#responsable').focus();
            return false;
        }
        if ($('#edit_email').val() === "") {
            alert('Debe ingresar el responable para obtener el email','Atencion!');
            $('#email').focus();
            return false;
        }
        if ($('#edit_hotel').val() === "") {
            alert('Debe seleccionar el hotel','Atencion!');
            $('#hotel').focus();
            return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_departament').serialize();
            $.ajax({
              url: $('#edit_departament #_urlSubmit').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_departament #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Departamento editado exitosamente');
                  location.href=$('#edit_departament #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});