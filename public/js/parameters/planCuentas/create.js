
$(document).ready(function(){

    let centroInventario=  document.getElementById('centroInventario');
    centroInventario.addEventListener('input',function(){
    if (this.value.length > 4) 
        this.value = this.value.slice(0,4); 
    })

    let centroCosto=  document.getElementById('centroCosto');
    centroCosto.addEventListener('input',function(){
    if (this.value.length > 4) 
        this.value = this.value.slice(0,4); 
    })
    let centroVenta=  document.getElementById('centroVenta');
    centroVenta.addEventListener('input',function(){
    if (this.value.length > 4) 
        this.value = this.value.slice(0,4); 
    })


    // Evento que ocurre cuando es cambiado el usuario
    //y se rellena el correo electronico en el campo
    

    $('#add_planCuentas').submit(function(event){

        if ($('#codigoCuenta').val() === "") {
            alert('Debe ingresar el codigo','Atencion!');
            $('#codigoCuenta').focus();
            return false;
        }
        if ($('#nombreCuenta').val() === "") {
            alert('Debe ingresar el nombre de cuenta','Atencion!');
            $('#nombreCuenta').focus();
            return false;
        }
        if ($('#centroInventario').val() === "") {
            alert('Debe ingresar el centro de inventario','Atencion!');
            $('#centroInventario').focus();
            return false;
        }
        if ($('#centroCosto').val() === "") {
            alert('Debe ingresar el centro de costo','Atencion!');
            $('#centroCosto').focus();
            return false;
        }
        if ($('#centroVenta').val() === "") {
            alert('Debe ingresar el centro de ingreso','Atencion!');
            $('#centroVenta').focus();
            return false;
        }

        if ($('#terceros').val() === "") {
            alert('Debe ingresar el tercero','Atencion!');
            $('#terceros').focus();
            return false;
        }

        if ($('#id_user_create').val() === '') {
            alert('El identificador del usuario no existe, Por favor recargue la pagina!');
            return false;
        }

        let confirmacion=confirm("¿Esta seguro de agregar esta información?");
          if(confirmacion){

            var data = $('#add_planCuentas').serialize();
            $.ajax({
              url: $('#add_planCuentas #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#add_planCuentas #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  alert('Plan de Cuentas creado exitosamente');
                  location.href=$('#add_planCuentas #_url').val();
                }else{
                  alert(json.data);
                }
              }
           });
          }
          
         return false;

    });
    
});