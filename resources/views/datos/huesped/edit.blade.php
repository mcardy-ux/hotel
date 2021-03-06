
@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Huespedes</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('huespedes.index')}}">Listado</a>
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
                            <div class="top-right-button-container">
                                <input type="button" class="btn btn-primary mb-1" id="id_huesped" disabled="" />
                                <input type="button" class="btn btn-primary mb-1" id="razon_social_hotel" disabled="" />
                            </div>
                            <h5 class="mb-4">Ingresa la información necesaria del Huesped.</h5>
                            
                            <br>
                            <form role="form" id="edit_huesped" name="edit_huesped" >
                            <input type="hidden" id="_url"  value="{{ url('huespedes', [$data->encode_id])}}">
                            <input type="hidden" id="_urlStatic"  value="{{ url('huespedes')}}">
                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                            <input type="hidden" id="edit_validacion" name="edit_validacion" >
                            <input type="hidden" id="data_id_huesped" name="data_id_huesped" >
                            <input type="hidden" id="rel_hotel" name="rel_hotel" >
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label for="edit_tipo_doc">Tipo de Documento</label>
                                       <select id="edit_tipo_doc" name="edit_tipo_doc" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="edit_numero_doc">Numero de documento:</label>
                                       <input type="number" class="form-control" min="1" id="edit_numero_doc" name="edit_numero_doc" value="{{$data->numero_doc}}">
                                   </div>
                               </div>
                               <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="edit_lugar_exp">Lugar de Expedición</label>
                                        <select id="edit_lugar_exp" name="edit_lugar_exp" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="edit_ciudad_exp">Ciudad de Expedición:</label>
                                        <select id="edit_ciudad_exp" name="edit_ciudad_exp" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="edit_fecha_nacimiento">Fecha de Nacimiento:</label>
                                        <input class="form-control datepicker" name="edit_fecha_nacimiento" id="edit_fecha_nacimiento" placeholder="" value="{{$data->fecha_nacimiento}}">
                                    </div>
                                </div>

                                <div class="form-row">
                                     <div class="form-group col-md-3">
                                        <label for="edit_primer_nombre">Primer Nombre <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="edit_primer_nombre" name="edit_primer_nombre"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->primer_nombre}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="edit_segundo_nombre">Segundo Nombre:</label>
                                        <input type="text" class="form-control" id="edit_segundo_nombre" name="edit_segundo_nombre"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->segundo_nombre}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="edit_primer_apellido">Primer Apellido <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="edit_primer_apellido" name="edit_primer_apellido"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->primer_apellido}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="edit_segundo_apellido">Segundo Apellido:</label>
                                        <input type="text" class="form-control" id="edit_segundo_apellido" name="edit_segundo_apellido"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->segundo_apellido}}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="edit_genero">Genero <span style="color:red">*</span></label>
                                        <select id="edit_genero" name="edit_genero" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                            <option value="masculino">masculino</option>
                                            <option value="femenino">femenino</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-8">
                                        <label for="edit_direccion">Dirección <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="edit_direccion" name="edit_direccion"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->direccion}}">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="edit_nacionalidad">nacionalidad</label>
                                        <select id="edit_nacionalidad" name="edit_nacionalidad" class="form-control">
                                            <option value="">SELECCIONAR</option>  
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="edit_ciudad">Ciudad</label>
                                        <select id="edit_ciudad" name="edit_ciudad" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                       <label for="edit_telefono">Telefono <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" id="edit_telefono" name="edit_telefono"
                                           aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->telefono}}">
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="edit_celular">Celular</label>
                                       <input type="text" class="form-control" id="edit_celular" name="edit_celular"
                                           aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->celular}}">
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="edit_email">Email <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" id="edit_email" name="edit_email"
                                           aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->email}}">
                                   </div>
                               </div>

                               <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="edit_tipo_huesped">Tipo de Huesped</label>
                                    <select id="edit_tipo_huesped" name="edit_tipo_huesped" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edit_tarifa">Tarifa</label>
                                    <select id="edit_tarifa" name="edit_tarifa" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edit_forma_pago">Forma de Pago</label>
                                    <select id="edit_forma_pago" name="edit_forma_pago" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                            </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
                                <a href="{{ route('huespedes.index') }}"> 
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
    <script src="{{ asset('js/datos/huesped/edit.js') }}"></script>
    <script>
         window.addEventListener("load", function() {
            cargarTipoDocs();
            cargarTipoCliente();
            cargarTarifa();
            cargarFormaPago();
            cargarPaises();
            cargarDatosEstablecidos();
    }, false);
 
  
    function cargarTipoDocs() {
    
        //Inicializamos el array.
        var tipo_docs = @json($tipo_docs);
        //Ordena el array alfabeticamente.
        if(tipo_docs.length==0)
        {
            alert("No esta configurado el tipo de documento");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("edit_tipo_doc", tipo_docs);
        }
    }

    function cargarTipoCliente() {
        //Inicializamos el array.
        var tipoCliente = @json($tipoCliente);
        //Ordena el array alfabeticamente.
        if(tipoCliente.length==0)
        {
            alert("No esta configurado el tipo de huesped");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("edit_tipo_huesped", tipoCliente);
        }
    }

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
        addOptions("edit_lugar_exp", paises);
        addOptions("edit_nacionalidad", paises);
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
        let validacion = @json($data->validacion_registro);
        $("#edit_validacion").val(validacion);
        if(validacion==0){
            let id_huesped=@json($data->id_registro);
            $("#id_huesped").val("ID: "+id_huesped);
            $("#data_id_huesped").val(id_huesped);
        }
        else{
            $("#id_huesped").val("ID: N/A");
            $("#data_id_huesped").val(null);
        }
//MODI
        $("#rel_hotel").val(@json($data->rel_hotel));
        $("#razon_social_hotel").val(@json($razonById->value));

        let tipo_doc=@json($data->tipo_doc);
        $("#edit_tipo_doc").val(tipo_doc);
        // lugar expedicion
        let lugar_exp=@json($data->lugar_exp);
        $("#edit_lugar_exp").val(lugar_exp).change();
        // ciudad expedicion
        let ciudad_exp=@json($data->ciudad_exp);
        $("#edit_ciudad_exp").val(ciudad_exp).change();
        // Genero
        let genero=@json($data->genero);
        $("#edit_genero").val(genero);
        // lugar expedicion
        let nacionalidad=@json($data->nacionalidad);
        $("#edit_nacionalidad").val(nacionalidad).change();
        // ciudad expedicion
        let ciudad=@json($data->ciudad);
        $("#edit_ciudad").val(ciudad).change();
        // ciudad expedicion
        let tipo_huesped=@json($data->tipo_huesped);
        $("#edit_tipo_huesped").val(tipo_huesped);
        // ciudad expedicion
        let tarifa=@json($data->tarifa);
        $("#edit_tarifa").val(tarifa);
        // ciudad expedicion
        let forma=@json($data->forma_pago);
        $("#edit_forma_pago").val(forma);
    }
    
        $("#edit_lugar_exp").change(function(){
            let num=$(this).val();
            RemoveOptions("edit_ciudad_exp");
            $.ajax({
                url: $('#edit_huesped #_urlStatic').val()+"/request/citiesEstado/"+num,
                headers: {'X-CSRF-TOKEN': $('#edit_huesped #_token').val()},
                type: 'GET',
                cache: false,
                success: function (response) {
                    cargarCiudades(response,"edit_ciudad_exp");
                }
            });
        });
 
        $("#edit_nacionalidad").change(function(){
            let num=$(this).val();
            RemoveOptions("edit_ciudad");
            $.ajax({
                url: $('#edit_huesped #_urlStatic').val()+"/request/citiesEstado/"+num,
                headers: {'X-CSRF-TOKEN': $('#edit_huesped #_token').val()},
                type: 'GET',
                cache: false,
                success: function (response) {
                    cargarCiudades(response,"edit_ciudad");
                }
            });
        });
 

  
    </script>
@endpush
