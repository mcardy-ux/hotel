function show(event){
    var ID =event.id;
    console.log(ID);
    let confirmacion=confirm("¿Esta seguro de eliminar? No puede reversar esta accion.");
    if(confirmacion){
        $.ajax({
            url: $("#_url").val() + '/codigoVenta/' + ID,
            headers: {'X-CSRF-TOKEN': $('#_token').val()},
            type: 'DELETE',
            success: function (response) {
              var json = $.parseJSON(response);
              if(json.success){
                alert('Codigo de venta eliminado exitosamente');
                location.href=$("#_url").val()+'/codigoVenta';
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