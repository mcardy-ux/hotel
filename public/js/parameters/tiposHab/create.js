$(document).ready(function(){
    
    
    $('#add_data_tiposHab').submit(function(event){
        if ($('#descripcion').val() === '') {
            alert('Debe ingresar la descripción del tipo de habitación','Atencion!');
            $('#descripcion').focus();
            return false;
        }
       
    
    
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){
    
        var data = $('#add_data_tiposHab').serialize();
        $.ajax({
            url: $('#add_data_tiposHab #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_data_tiposHab #_token').val()},
            type: 'POST',
            data: data,
            cache:false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Tipo de habitación creado exitosamente');
                location.href=$('#add_data_tiposHab #_url').val();
            }else{
                alert(json.data.descripcion[0]);
            }
            }
        });
        }
    
        return false;
    });
    
    
    });