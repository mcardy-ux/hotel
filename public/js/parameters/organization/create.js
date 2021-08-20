$(document).ready(function(){
    
    let tipo=document.getElementById("_type_org");
    tipo.value="";
    let card_add=document.getElementById("card_add_organization");
    card_add.style.display="none";
    vaciarInputs();

$('#independiente').click(function(){
    let confirmacion=confirm("¿Esta seguro de la opcion seleccionada, no puede reversar la congfiguración?");
        if(confirmacion){
            OcultarCard();
            MostrarRegistro();
            Asignar_tipo(1);
            Asignar_Seleccion("Hotel Independiente");
        }
});
$('#multihotel').click(function(){
    let confirmacion=confirm("¿Esta seguro de la opcion seleccionada, no puede reversar la congfiguración?");
    if(confirmacion){
        OcultarCard();
        MostrarRegistro();
        Asignar_tipo(0);
        Asignar_Seleccion("Multihotel");
    }
});

function OcultarCard(){
    let components= document.getElementById('card_organization');
    components.style.display="none";
}
function Asignar_tipo(tipo){
    let tipo_new=document.getElementById("_type_org");
    tipo_new.value=tipo;
}
function MostrarRegistro(){
    let components= document.getElementById('card_add_organization');
    components.style.display="block";
}
function Asignar_Seleccion(sel){
    let tipo_sel=document.getElementById("tipo_select");
    tipo_sel.value=sel;
}
function vaciarInputs(){
    $('#razon_social').val("");
    $('#direccion_contacto').val("");
    $('#telefono_contacto').val("");
    $('#email_contacto').val("");
    $('#nit').val("");
    $('#digito_nit').val("");
    $('#logo').val("");
}

var input=  document.getElementById('nit');
    input.addEventListener('input',function(){
        if (this.value.length > 10) 
           this.value = this.value.slice(0,10); 
      })
      var input=  document.getElementById('digito_nit');
    input.addEventListener('input',function(){
        if (this.value.length > 1) 
           this.value = this.value.slice(0,1); 
      })

      
//******** */
    // Inicio de Funcion para validar logo
    // 
    function validarImagen() {
        var fileSize = $('#logo')[0].files[0].size;
        var siezekiloByte = parseInt(fileSize / 1024);
        if (siezekiloByte > 1999) { //Tamaño Minimo de adjuntar archivos de soporte en alamacen 1.9 mb
            return false;
        }
        else{
          return true;
        }
      }
      
    $("#logo").change(function(){
        var filename = $(this).val();
       
        var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
        if(!allowedExtensions.exec(filename)){
          alert('Extension no valida. | (Permitidas: jpg-png-jpeg)');
          $("#logo").val("");
            return false;
        }
        if(!validarImagen()){
          alert("El archivo cargado supera el tamaño limite. (Debe ser menor a 1.9 Mb)");
          $("#logo").val("");
          return false;
        }
      });
     //
    // Fin de validacion de logo
    //******** */   
$('#add_organization').submit(function(event){
    if ($('#razon_social').val() === '') {
        alert('Debe ingresar la razon social','Atencion!');
        $('#razon_social').focus();
        return false;
    }
    if ($('#direccion_contacto').val() === '') {
        alert('Debe ingresar la dirección de contacto','Atencion!');
        $('#direccion_contacto').focus();
        return false;
    }
    if ($('#telefono_contacto').val() === '') {
        alert('Debe ingresar el telefono de contacto','Atencion!');
        $('#telefono_contacto').focus();
        return false;
    }
    if ($('#email_contacto').val() === '') {
        alert('Debe ingresar el email de contacto','Atencion!');
        $('#email_contacto').focus();
        return false;
    }
    if ($('#nit').val() === '') {
        alert('Debe ingresar el nit','Atencion!');
        $('#nit').focus();
        return false;
    }
    if ($('#digito_nit').val() === '') {
        alert('Debe ingresar el digito de verificación','Atencion!');
        $('#digito_nit').focus();
        return false;
    }
    if ( $('#logo').val() === "") {
        alert('Debe seleccionar un logo de la organización','Atencion!');
        $('#logo').focus();
        return false;
    }


    let confirmacion=confirm("¿Esta seguro de agregar esta información?");
    if(confirmacion){

    var data = new FormData();
    var file = $('#logo')[0].files[0];
    data.append('logo', file);

    var other_data = $('#add_organization').serializeArray();
    $.each(other_data,function(key,input){
        data.append(input.name,input.value);
    });
    

    $.ajax({
        url: $('#add_organization #_url').val(),
        headers: {'X-CSRF-TOKEN': $('#add_organization #_token').val()},
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
        success: function (response) {
        var json = $.parseJSON(response);
        if(json.success){
            alert('Organización creada exitosamente');
            location.href=$('#add_organization #_url').val();
        }else{
            alert(json.data);
        }
        }
    });
    }

    return false;
});


});