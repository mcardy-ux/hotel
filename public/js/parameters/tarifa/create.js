$(document).ready(function(){
    

    $('#add_tarifas').submit(function(event){
        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
        if(confirmacion){

            var fields = $( "#add_tarifas").serializeArray();
        
        $.ajax({
            url: $('#add_tarifas #_url').val(),
            headers: {'X-CSRF-TOKEN': $('#add_tarifas #_token').val()},
            type: 'POST',
            data: fields,
            cache: false,
            success: function (response) {
            var json = $.parseJSON(response);
            if(json.success){
                alert('Tarifas establecidas exitosamente');
                location.href=$('#add_tarifas #_url').val();
            }else{
                alert(json.data);
            }
            }
        });
        }
        
        return false;
    });   
});

