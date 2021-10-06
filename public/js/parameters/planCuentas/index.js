function show(event){
    var ID =event.id;
    let confirmacion=confirm("¿Esta seguro de eliminar? No puede reversar esta accion.");
    if(confirmacion){
        $.ajax({
            url: $("#_url").val() + '/planCuentas/' + ID,
            headers: {'X-CSRF-TOKEN': $('#_token').val()},
            type: 'DELETE',
            success: function (response) {
              var json = $.parseJSON(response);
              if(json.success){
                alert('Plan de Cuentas eliminada exitosamente');
                location.href=$("#_url").val()+'/planCuentas';
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

function viewCentros(event){
  document.getElementById("modal_content_centros").innerHTML="";
  var ID =event.id;
  $("#modal_centros").modal('show');
  
  $.ajax({
    url: $("#_url").val()+"/ajax/request/getCentros/"+ID,
    headers: {'X-CSRF-TOKEN': $('#_token').val()},
    type: 'GET',
    cache: false,
    success: function (response) {
      var json = $.parseJSON(response);
        if(json.success){
          let concat='<table class="table"><thead class="thead-light"><tr><th scope="col">#</th><th scope="col">Codigo de Cuenta</th><th scope="col">Nombre de Cuenta</th></tr></thead><tbody>';

          for (let index = 0; index < json.data.length; index++) {
            
              concat=concat+'<tr><th scope="row">'+json.data[index].id+'</th><td>'+json.data[index].value+'</td><td>'+json.data[index].secvalue+'</td></tr> ';
          }                 
          concat=concat+'</tbody></table>';
          document.getElementById("modal_content_centros").innerHTML=concat;
        }
    }
  });
return false;

}