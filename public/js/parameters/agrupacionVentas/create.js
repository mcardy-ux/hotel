$(document).ready(function(){
    
    
$('#add_data_agrupacionVentas').submit(function(event){
    if ($('#descripcion').val() === '') {
        alert('Debe ingresar la descripción','Atencion!');
        $('#descripcion').focus();
        return false;
    }
   


    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

    var data = $('#add_data_agrupacionVentas').serialize();
    $.ajax({
        url: $('#add_data_agrupacionVentas #_url').val(),
        headers: {'X-CSRF-TOKEN': $('#add_data_agrupacionVentas #_token').val()},
        type: 'POST',
        data: data,
        cache:false,
        success: function (response) {
        var json = $.parseJSON(response);
        if(json.success){
            alert('Agrupación creada exitosamente');
            location.href=$('#add_data_agrupacionVentas #_url').val();
        }else{
            alert(json.data.descripcion[0]);
        }
        }
    });
    }

    return false;
});


});