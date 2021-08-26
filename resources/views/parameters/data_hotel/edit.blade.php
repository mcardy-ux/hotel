@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Hoteles</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('data_hotel.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edición</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Ingresa la información necesaria.</h5>
                            <form role="form" id="edit_data_hotel"  name="edit_data_hotel" >
                            <input type="hidden" id="_url"  value="{{ url('data_hotel') }}">
                            <input type="hidden" id="_urlSubmit"  value="{{ url('data_hotel', [$data->id])}}">
                                
                                <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                             
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="edit_razon_comercial">Razón Comercial:</label>
                                        <input type="text" class="form-control" id="edit_razon_comercial" name="edit_razon_comercial" value="{{$data->razonComercial}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="edit_direccion">Dirección:
                                        </label>
                                        <input type="text" class="form-control" id="edit_direccion" name="edit_direccion" value="{{$data->direccion}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                <div class="form-group col-md-3">
                                        <label for="edit_regimen">Regimen Tributario:</label>
                                        <select id="edit_regimen" name="edit_regimen" class="form-control" >
                                            <option value="persona_natural">Persona Natural</option>
                                            <option value="persona_juridica">Persona Jurídica</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="edit_tipo_regimen">Tipo de Regimen Tributario:</label>
                                        <select id="edit_tipo_regimen" name="edit_tipo_regimen" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="edit_telefono">Telefono:</label>
                                        <input type="number" class="form-control" min="1" id="edit_telefono" name="edit_telefono" value="{{$data->telefono}}" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="edit_telefono_alt">Telefono Alterno:</label>
                                        <input type="number" class="form-control" min="1"  id="edit_telefono_alt" name="edit_telefono_alt" value="{{$data->telefonoAlterno}}" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="edit_pais">Pais:</label>
                                        <select id="edit_pais" name="edit_pais" class="form-control">
                                            <option value="colombia" selected >Colombia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="edit_municipio">Municipio:</label>
                                        <select id="edit_municipio" name="edit_municipio" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="edit_ciudad">Ciudad:</label>
                                        <select id="edit_ciudad" name="edit_ciudad" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="edit_resolucion_facturacion">Resolución Facturación:</label>
                                        <select id="edit_resolucion_facturacion" name="edit_resolucion_facturacion" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="rnt">RNT:</label>
                                        <input type="text" class="form-control" id="rnt" name="rnt">
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                <div class="form-group col-md-6">
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
                                    <div class="form-group col-md-6">
                                        <label for="edit_ciiu">CIIU Actividad Economica:</label>
                                        <select id="edit_ciiu" name="edit_ciiu" class="form-control">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="edit_cuenta_bancaria">Cuenta(s) Bancaria(s):</label>
                                        <select class="js-bank-account-multiple" multiple="multiple" style="width: 90%" id="edit_cuenta_bancaria" name="edit_cuenta_bancaria" >
                                        </select>
                                    </div>
                                </div>
                                
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
                                <a href="{{ route('data_hotel.index') }}"> 
                                <button type="button" class="btn btn-light mb-0">Volver</button>
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    @endsection
    @push('scripts')

    <script src="{{ asset('js/parameters/data_hotel/edit.js') }}"></script>
    <!-- Carga Inicial de Select -->
    <script> 
    //Funcion para cargar los departamentos al campo "select".
    function cargarDepartamentos() {
    
        //Inicializamos el array.
        var array = @json($deptos);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("edit_municipio", array);
    }
     //Funcion para cargar las resoluciones de facturacion.
     function cargarResoluciones() {
        //Inicializamos el array.
        var array = @json($resoluciones);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("edit_resolucion_facturacion", array);
    }
    //Funcion para cargar las resoluciones de facturacion.
    function cargarCuentaBancaria() {
        //Inicializamos el array.
        var array = @json($cuenta_banc);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("edit_cuenta_bancaria", array);
    }
   </script>

    <!-- Llenado de inputs y select con info -->
<script>
    $(document).ready(function(){
        cargarDepartamentos(event);
        cargarResoluciones(event);
        cargarCuentaBancaria(event);

        let regimen=@json($data->tipoRegimen);
        $("#edit_regimen").val(regimen);

        let tipo_regimen=@json($data->regimenTributario);
            $("#edit_tipo_regimen").val(tipo_regimen);

        //Campo para la ubicacion
        let resolucion_facturacion=@json($data->relBillingResolution);
            $("#edit_resolucion_facturacion").val(resolucion_facturacion);
            let rnt=@json($data->rnt);
            $("#rnt").val(rnt);

        //Campo para la categoria de ciiu
        let tipo_ciiu=@json($ciiu["id_categoria"]);
        $("#edit_tipo_ciiu").val(tipo_ciiu);
        let ciiu=@json($ciiu["data"]);
        RemoveOptions("edit_ciiu");
        $.ajax({
            url: $('#edit_data_hotel #_url').val()+"/request/ciiu/"+tipo_ciiu,
            headers: {'X-CSRF-TOKEN': $('#edit_data_hotel #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                    addOptionsConcat("edit_ciiu",json.data);
                    $("#edit_ciiu").val(ciiu);
                }
            }
        });
        var municipio=@json($location->departament_id);

        //   Precarga de listado de ciudad
            
            $.ajax({
                url: $('#edit_data_hotel #_url').val()+"/request/departaments/"+municipio,
                headers: {'X-CSRF-TOKEN': $('#edit_data_hotel #_token').val()},
                type: 'GET',
                cache: false,
                success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                    cargarCiudades(json.data);
                }
                }
            });

            let ciudad=@json($location->city_id);
            $("#edit_ciudad").val(ciudad);
            $("#edit_municipio").val(municipio);

            var data_persona_natural =  new Array(); 
            var data_persona_juridica =  new Array(); 
            data_persona_natural=["Régimen simplificado","Régimen común"];
            data_persona_juridica=["Gran Contribuyente","Régimen común"];

            var id = $("#edit_regimen").val();

            if(id=="persona_natural"){
                addRegimenes("edit_tipo_regimen",data_persona_natural);
            }
            if(id=="persona_juridica"){
                addRegimenes("edit_tipo_regimen",data_persona_juridica);
            }
            
            let cuentas_bancarias=@json($cuentas_selec);
            $("#edit_cuenta_bancaria").val(cuentas_bancarias);
            
    });
</script>
@endpush
