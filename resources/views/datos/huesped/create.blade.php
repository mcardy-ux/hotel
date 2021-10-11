
@extends('layouts.app')

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
                            <li class="breadcrumb-item active" aria-current="page">Creación</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>

           @if($count_Hotel>1)
            <div class="row mb-4" id="card_huesped">
                <div class="row mb-12">
                    <div class="col-lg-12 col-md-12 mb-4">
                        <p>A continuación debe escoger el hotel que dese agregar el huesped.</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 col-12 mb-4">
                    <div class="card ">
                        <div class="card-body">
                            <div class="text-center">
                            <i class="iconsminds-hotel large-icon"></i>
                                <p class="list-item-heading mb-1">  Hoteles Disponibles</p>
                                <div class="form-group" style="text-align:center;">
                                    <select class="custom-select col-sm-3" id="avaliable_hotels" name="avaliable_hotels" style="text-align:center;" required="">
                                        <option value=""></option>
                                    </select>
                                </div>
                                    <button type="button" class="btn btn-sm btn-outline-primary" id="independiente" name="independiente" value="independiente">Escoger</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="row" id="card_add_huespedes" style="display:none;">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="top-right-button-container">
                                <input type="button" class="btn btn-primary mb-1" id="razon_social_hotel" disabled="" />
                            </div>
                            <h5 class="mb-4">Ingresa la información necesaria del Huesped.</h5>
                            
                            <br>
                            <form role="form" id="add_huesped" name="add_huesped" 
                            >
                            <input type="hidden" id="_url" value="{{ url('huespedes') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="rel_hotel" name="rel_hotel" >
                                <input type="hidden" id="id_registro" name="id_registro" >

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                       <label for="validacion_registro">Registro con documento de Identidad</label>
                                       <select id="validacion_registro" name="validacion_registro" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                            <option value="true">SI</option>
                                            <option value="false">NO</option>
                                        </select>
                                   </div>
                                   <div class="form-group col-md-6" style="display: none;text-align:right" id="registro_sistema">
                                    <p id="num_sistema"></p>                  
                                    </div>
                                   
                               </div>
                               <div class="form-row" style="display: none;" id="registro_documento">
                                    <div class="form-group 6" >
                                    <label for="tipo_doc">Tipo de Documento</label>
                                    <select id="tipo_doc" name="tipo_doc" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                    </div>
                                    <div class="form-group 6" >
                                    <label for="numero_doc">Numero de documento:</label>
                                    <input type="number" class="form-control" min="1" id="numero_doc" name="numero_doc">
                                </div>
                            </div>
                                
                               <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="lugar_exp">Lugar de Expedición</label>
                                        <select id="lugar_exp" name="lugar_exp" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ciudad_exp">Ciudad de Expedición:</label>
                                        <select id="ciudad_exp" name="ciudad_exp" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                        <input class="form-control datepicker" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="">
                                    </div>
                                </div>

                                <div class="form-row">
                                     <div class="form-group col-md-3">
                                        <label for="primer_nombre">Primer Nombre <span style="color:red">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="segundo_nombre">Segundo Nombre </label>
                                        <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="primer_apellido">Primer Apellido <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="segundo_apellido">Segundo Apellido </label>
                                        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="genero">Genero <span style="color:red">*</span></label>
                                        <select id="genero" name="genero" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                            <option value="masculino">masculino</option>
                                            <option value="femenino">femenino</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-8">
                                        <label for="direccion">Dirección <span style="color:red">*</span></label>
                                        <input type="text" class="form-control" id="direccion" name="direccion"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                       <label for="telefono">Telefono <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" id="telefono" name="telefono"
                                           aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="celular">Celular</label>
                                       <input type="text" class="form-control" id="celular" name="celular"
                                           aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="email">Email <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" id="email" name="email"
                                           aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                   </div>
                               </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nacionalidad">Nacionalidad</label>
                                        <select id="nacionalidad" name="nacionalidad" class="form-control">
                                            <option value="">SELECCIONAR</option>  
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ciudad">Ciudad</label>
                                        <select id="ciudad" name="ciudad" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                        </select>
                                    </div>
                                </div>



                               <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tipo_huesped">Tipo de Huesped</label>
                                    <select id="tipo_huesped" name="tipo_huesped" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tarifa">Tarifa</label>
                                    <select id="tarifa" name="tarifa" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="forma_pago">Forma de Pago</label>
                                    <select id="forma_pago" name="forma_pago" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                            </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('huespedes.index') }}"> 
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
    <script src="{{ asset('js/datos/huesped/create.js') }}"></script>
    <script>
         window.addEventListener("load", function() {
            cargarTipoDocs();
            cargarTipoCliente();
            cargarTarifa();
            cargarFormaPago();
            cargarPaises();
    }, false);
 
    //Funcion para cargar los hoteles al campo "select".
    function cargarHoteles() {
    
        //Inicializamos el array.
        var array = @json($avaliable_hotels);
        //Ordena el array alfabeticamente.
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("avaliable_hotels", array);
    }
    function cargarTipoDocs() {
    
        //Inicializamos el array.
        var tipo_docs = @json($tipo_docs);
        //Ordena el array alfabeticamente.
        if(tipo_docs.length==0)
        {
            alert("No esta configurado el tipo de documento");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("tipo_doc", tipo_docs);
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
        addOptionsConcat("tipo_huesped", tipoCliente);
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
        addOptionsConcat("tarifa", regimenes);
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
        addOptions("forma_pago", formaPago);
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
        addOptions("lugar_exp", paises);
        addOptions("nacionalidad", paises);
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
    $("#lugar_exp").change(function(){
        let num=$(this).val();
        RemoveOptions("ciudad_exp");
        $.ajax({
            url: $('#add_huesped #_url').val()+"/request/citiesEstado/"+num,
            headers: {'X-CSRF-TOKEN': $('#add_huesped #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
                cargarCiudades(response,"ciudad_exp");
            }
        });
    });

    $("#nacionalidad").change(function(){
        let num=$(this).val();
        RemoveOptions("ciudad");
        $.ajax({
            url: $('#add_huesped #_url').val()+"/request/citiesEstado/"+num,
            headers: {'X-CSRF-TOKEN': $('#add_huesped #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
                cargarCiudades(response,"ciudad");
            }
        });
    });

  

    let cantHoteles=@json($count_Hotel);
    let razon_hotel=@json($avaliable_hotels);
    if(cantHoteles==1){
        let components= document.getElementById('card_add_huespedes');
        components.style.display="block";
        $("#rel_hotel").val(razon_hotel[0].id);
        $("#razon_social_hotel").val(razon_hotel[0].value);
    }else{
        cargarHoteles(event);
    }
    
    </script>
@endpush
