$(document).ready(function(){
    
   
    $('#edit_data_comp_regimen').submit(function(event){
        if ($('#edit_codigo').val() === '') {
            alert('Debe ingresar el código','Atencion!');
            $('#edit_codigo').focus();
            return false;
        }
        if ($('#edit_nombre').val() === '') {
            alert('Debe ingresar el nombre','Atencion!');
            $('#edit_nombre').focus();
            return false;
        }
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){
    
        var data = $('#edit_data_comp_regimen').serialize();
        
    
        $.ajax({
            url: $('#edit_data_comp_regimen #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#edit_data_comp_regimen #_token').val()},
            type: 'PUT',
            data: data,
            cache:false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Componente editado exitosamente');
                location.href='/comp_regimen';
            }else{
                alert(json.data);
            }
            }
        });
        }
    
        return false;
    });
    
    
    });