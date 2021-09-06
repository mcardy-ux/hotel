$(document).ready(function(){
    
    
    $('#add_data_comp_regimen').submit(function(event){
        if ($('#codigo').val() === '') {
            alert('Debe ingresar el código del componente','Atencion!');
            $('#codigo').focus();
            return false;
        }
        if ($('#nombre').val() === '') {
            alert('Debe ingresar el nombre del componente','Atencion!');
            $('#nombre').focus();
            return false;
        }
    
    
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){
    
        var data = $('#add_data_comp_regimen').serialize();
        $.ajax({
            url: $('#add_data_comp_regimen #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_data_comp_regimen #_token').val()},
            type: 'POST',
            data: data,
            cache:false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Componente creado exitosamente');
                location.href=$('#add_data_comp_regimen #_url').val();
            }else{
                alert(json.data.codigo[0]);
            }
            }
        });
        }
    
        return false;
    });
    
    
    });