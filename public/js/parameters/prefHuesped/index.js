function show(event){
    var ID =event.id;
    let confirmacion=confirm("¿Esta seguro de eliminar? No puede reversar esta accion.");
    if(confirmacion){
        $.ajax({
            url: $("#_url").val() + '/prefHuesped/' + ID,
            headers: {'X-CSRF-TOKEN': $('#_token').val()},
            type: 'DELETE',
            success: function (response) {
              var json = $.parseJSON(response);
              if(json.success){
                alert('Preferencia eliminada exitosamente');
                location.href=$("#_url").val()+'/prefHuesped';
                }else{
                alert(json.data);
                }
            }
          }).fail( function( response ) {
            alert( 'Error 101-1 : No se puede Eliminar - Verifique Llaves Foraneas!' );
        });
        return false;
            
    }
}