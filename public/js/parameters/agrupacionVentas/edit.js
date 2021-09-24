$(document).ready(function(){
    
   
    $('#edit_data_agrupacionVentas').submit(function(event){
        if ($('#edit_descripcion').val() === '') {
            alert('Debe ingresar la descripción','Atencion!');
            $('#edit_descripcion').focus();
            return false;
        }
    
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){
    
        var data = $('#edit_data_agrupacionVentas').serialize();
        
    
        $.ajax({
            url: $('#edit_data_agrupacionVentas #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#edit_data_agrupacionVentas #_token').val()},
            type: 'PUT',
            data: data,
            cache:false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Agrupación editada exitosamente');
                location.href='/agrupacionVentas';
            }else{
                alert(json.data);
            }
            }
        });
        }
    
        return false;
    });
    
    
    });