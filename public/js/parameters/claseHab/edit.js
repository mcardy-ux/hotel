$(document).ready(function(){
    
   
    $('#edit_data_claseHab').submit(function(event){
        if ($('#edit_descripcion').val() === '') {
            alert('Debe ingresar la descripción','Atencion!');
            $('#edit_descripcion').focus();
            return false;
        }
    
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){
    
        var data = $('#edit_data_claseHab').serialize();
        
    
        $.ajax({
            url: $('#edit_data_claseHab #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#edit_data_claseHab #_token').val()},
            type: 'PUT',
            data: data,
            cache:false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Clase de Habitación editado exitosamente');
                location.href='/claseHab';
            }else{
                alert(json.data);
            }
            }
        });
        }
    
        return false;
    });
    
    
    });