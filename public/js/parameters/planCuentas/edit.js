
$(document).ready(function(){

  let centroInventario=  document.getElementById('edit_centroInventario');
  centroInventario.addEventListener('input',function(){
  if (this.value.length > 4) 
      this.value = this.value.slice(0,4); 
  })

  let centroCosto=  document.getElementById('edit_centroCosto');
  centroCosto.addEventListener('input',function(){
  if (this.value.length > 4) 
      this.value = this.value.slice(0,4); 
  })
  let centroVenta=  document.getElementById('edit_centroVenta');
  centroVenta.addEventListener('input',function(){
  if (this.value.length > 4) 
      this.value = this.value.slice(0,4); 
  })


    $('#edit_planCuentas').submit(function(event){

      if ($('#edit_codigoCuenta').val() === "") {
          alert('Debe ingresar el codigo','Atencion!');
          $('#edit_codigoCuenta').focus();
          return false;
        }
        if ($('#edit_nombreCuenta').val() === "") {
            alert('Debe ingresar el nombre de cuenta','Atencion!');
            $('#edit_nombreCuenta').focus();
            return false;
        }
        if ($('#edit_centroInventario').val() === "") {
            alert('Debe ingresar el centro de inventario','Atencion!');
            $('#edit_centroInventario').focus();
            return false;
        }
        if ($('#edit_centroCosto').val() === "") {
            alert('Debe ingresar el centro de costo','Atencion!');
            $('#edit_centroCosto').focus();
            return false;
        }
        if ($('#edit_centroVenta').val() === "") {
            alert('Debe ingresar el centro de ingreso','Atencion!');
            $('#edit_centroVenta').focus();
            return false;
        }

        if ($('#edit_terceros').val() === "") {
            alert('Debe ingresar el tercero','Atencion!');
            $('#edit_terceros').focus();
            return false;
        }
        if ($('#id_user_modify').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de editar esta información?");
          if(confirmacion){

            var data = $('#edit_planCuentas').serialize();
            $.ajax({
              url: $('#edit_planCuentas #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#edit_planCuentas #_token').val()},
              type: 'PUT',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Plan de Cuentas editado exitosamente');
                  location.href="/planCuentas";
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});