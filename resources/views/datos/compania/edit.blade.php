
@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Compañia</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('compania.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edición</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>

        
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Ingresa la información necesaria del Huesped.</h5>
                            
                            <br>
                            <form role="form" id="edit_compania" name="edit_compania" >
                            <input type="hidden" id="_url"  value="{{ url('compania', [$data->encode_id])}}">
                            <input type="hidden" id="_urlStatic"  value="{{ url('compania')}}">
                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                               
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="edit_nit">NIT<span style="color:red">*</span></label>
                                    <input type="number" class="form-control" min="1" id="edit_nit" name="edit_nit" value="{{$data->nit}}">
                                    </div>
                                    <div class="form-group col-md-6" >
                                    <label for="edit_digitoVerificacion">DV:<span style="color:red">*</span></label>
                                    <input type="number" class="form-control" max="10" min="1" id="edit_digitoVerificacion" name="edit_digitoVerificacion" value="{{$data->digitoVerificacion}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                   <label for="edit_razonSocial">Razon Social<span style="color:red">*</span>
                                   </label>
                                   <input type="text" class="form-control" id="edit_razonSocial" name="edit_razonSocial" value="{{$data->razonSocial}}"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                               <div class="form-group col-md-5">
                                   <label for="edit_direccion">Dirección </label>
                                   <input type="text" class="form-control" id="edit_direccion" name="edit_direccion" value="{{$data->direccion}}"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                               <div class="form-group col-md-2">
                                <label for="edit_tipoRegimen">Tipo de Regimen <span style="color:red">*</span></label>
                                <select id="edit_tipoRegimen" name="edit_tipoRegimen" class="form-control">
                                    <option value="">SELECCIONAR</option>
                                    <option value="GRAN CONTRIBUYENTE">GRAN CONTRIBUYENTE</option>
                                    <option value="REGIMEN COMUN">REGIMEN COMUN</option>
                                    <option value="REGIMEN SIMPLE">REGIMEN SIMPLE</option>
                                </select>
                                </div>
                           </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="edit_tipo_ciiu">Categoria CIIU:</label>
                                    <select id="edit_tipo_ciiu" name="edit_tipo_ciiu" class="form-control">
                                        <option value="" selected="" >Seleccionar</option>
                                        <option value="1">Categoria 100 - 500</option>
                                        <option value="2">Categoria 500 - 1000</option>
                                        <option value="3">Categoria 1001 - 2000</option>
                                        <option value="4">Categoria 2001 - 3000</option>
                                        <option value="5">Categoria 3001 - 4000</option>
                                        <option value="6">Categoria 4001 - 5000</option>
                                        <option value="7">Categoria 5001 - 6000</option>
                                        <option value="8">Categoria 6001 - 7000</option>
                                        <option value="9">Categoria 7001 - 8000</option>
                                        <option value="10">Categoria 8001 - 10000</option>
                                    </select>
                                </div>
                    
                        
                                <div class="form-group col-md-8">
                                    <label for="edit_ciiuActividad">CIIU Actividad Economica:</label>
                                    <select id="edit_ciiuActividad" name="edit_ciiuActividad" class="form-control">
                                        
                                    </select>
                                </div>
                            </div>

                           <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="edit_telefono">Telefono<span style="color:red">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="edit_telefono" name="edit_telefono" value="{{$data->telefono}}"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="edit_celular">Celular </label>
                                    <input type="text" class="form-control" id="edit_celular" name="edit_celular" value="{{$data->celular}}"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="edit_email">Email </label>
                                    <input type="text" class="form-control" id="edit_email" name="edit_email" value="{{$data->email}}"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="edit_paginaWeb">Pagina Web </label>
                                    <input type="text" class="form-control" id="edit_paginaWeb" name="edit_paginaWeb" value="{{$data->paginaWeb}}"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="edit_pais">Pais</label>
                                    <select id="edit_pais" name="edit_pais" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edit_ciudad">Ciudad de Expedición:</label>
                                    <select id="edit_ciudad" name="edit_ciudad" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="edit_tarifa">Tarifa<span style="color:red">*</span></label>
                                    <select id="edit_tarifa" name="edit_tarifa" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edit_forma_pago">Forma de Pago<span style="color:red">*</span></label>
                                    <select id="edit_forma_pago" name="edit_forma_pago" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                            </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
                                <a href="{{ route('compania.index') }}"> 
                                <button type="button" class="btn btn-light mb-0">Volver</button>
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/datos/compania/edit.js') }}"></script>
    <script>
         window.addEventListener("load", function() {
            cargarTarifa();
            cargarFormaPago();
            cargarPaises();
            cargarDatosEstablecidos();
    }, false);
 
  

    function cargarTarifa() {
        //Inicializamos el array.
        var regimenes = @json($regimenes);
        //Ordena el array alfabeticamente.
        if(regimenes.length==0)
        {
            alert("No esta configurado los regimenes");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("edit_tarifa", regimenes);
        }
    }
    function cargarFormaPago() {
        //Inicializamos el array.
        var formaPago = @json($formaPago);
        //Ordena el array alfabeticamente.
        if(formaPago.length==0)
        {
            alert("No esta configurado la forma de pago");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("edit_forma_pago", formaPago);
        }
    }
    function cargarPaises() {
        //Inicializamos el array.
        var paises = @json($paises);
        //Ordena el array alfabeticamente.
        if(paises.length==0)
        {
            alert("No estan configurados los paises");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("edit_pais", paises);
        }
    }
    function cargarCiudades(data,options) {
        if(data.length==0)
        {
            alert("No estan configurados los paises");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions(options, data);
        }
    }

    function cargarDatosEstablecidos(){
        let tipoRegimen=@json($data->tipoRegimen);
        $("#edit_tipoRegimen").val(tipoRegimen);
      
        // lugar expedicion
        let pais=@json($data->pais);
        if(pais!=null){
        $("#edit_pais").val(pais).change();
        }
        // ciudad expedicion
        let ciudad=@json($data->ciudad);
        if(ciudad!=null){
        $("#edit_ciudad").val(ciudad).change();
        }
        // Genero
        let tipo_ciiu=@json($tipoCiuu["id_categoria"]);
        $("#edit_tipo_ciiu").val(tipo_ciiu);
        let ciiu=@json($tipoCiuu["data"]);
        RemoveOptions("edit_ciiuActividad");
        $.ajax({
            url: $('#edit_compania #_urlStatic').val()+"/request/ciiu/"+tipo_ciiu,
            headers: {'X-CSRF-TOKEN': $('#edit_compania #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                    addOptionsConcat("edit_ciiuActividad",json.data);
                    $("#edit_ciiuActividad").val(ciiu);
                }
            }
        });
   
        let tarifa=@json($data->tarifa);
        $("#edit_tarifa").val(tarifa);
        // ciudad expedicion
        let forma=@json($data->forma_pago);
        $("#edit_forma_pago").val(forma);
    }
    
    
        $("#edit_pais").change(function(){
            let num=$(this).val();
            RemoveOptions("edit_ciudad");
            $.ajax({
                url: $('#edit_compania #_urlStatic').val()+"/request/citiesEstado/"+num,
                headers: {'X-CSRF-TOKEN': $('#edit_compania #_token').val()},
                type: 'GET',
                cache: false,
                success: function (response) {
                    cargarCiudades(response,"edit_ciudad");
                }
            });
        });
 


    </script>
@endpush
