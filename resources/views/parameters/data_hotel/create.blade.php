@extends('layouts.appHotel')

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
                            <li class="breadcrumb-item active" aria-current="page">Creación</li>
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
                            <form role="form" id="add_data_hotel" name="add_data_hotel" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input type="hidden" id="_url" value="{{ url('data_hotel') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="id_user_create" value="{{ Auth::user()->id }}" >
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="razon_comercial">Razón Comercial:</label>
                                        <input type="text" class="form-control" id="razon_comercial" name="razon_comercial"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="direccion">Dirección:</label>
                                        <input type="text" class="form-control" id="direccion" name="direccion"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                <div class="form-group col-md-3">
                                        <label for="regimen">Regimen Tributario:</label>
                                        <select id="regimen" name="regimen" class="form-control">
                                            <option value="" selected="">Seleccionar</option>
                                            <option value="persona_natural">Persona Natural</option>
                                            <option value="persona_juridica">Persona Jurídica</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tipo_regimen">Tipo de Regimen Tributario:</label>
                                        <select id="tipo_regimen" name="tipo_regimen" class="form-control">
                                            <option value="" selected="" >Seleccionar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="telefono">Telefono:</label>
                                        <input type="number" class="form-control" min="1" id="telefono" name="telefono">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="telefono_alt">Telefono Alterno:</label>
                                        <input type="number" class="form-control" min="1"  id="telefono_alt" name="telefono_alt">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="pais">Pais:</label>
                                        <select id="pais" name="pais" class="form-control">
                                            <option value="colombia" selected disabled="disabled">Colombia</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="municipio">Municipio:</label>
                                        <select id="municipio" name="municipio" class="form-control">
                                            <option value="" selected >Seleccionar</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ciudad">Ciudad:</label>
                                        <select id="ciudad" name="ciudad" class="form-control">
                                            <option value="" selected="" >Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="logo">Logo:</label>
                                        <input type="file" class="form-control" id="logo" name="logo">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="resolucion_facturacion">Resolución Facturación:</label>
                                        <select id="resolucion_facturacion" name="resolucion_facturacion" class="form-control">
                                            <option value="" selected="" >Seleccionar</option>
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6">
                                        <label for="rnt">RNT:</label>
                                        <input type="text" class="form-control" id="rnt" name="rnt">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipo_ciiu">Categoria CIIU:</label>
                                        <select id="tipo_ciiu" name="tipo_ciiu" class="form-control">
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
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-12">
                                        <label for="ciiu">CIIU Actividad Economica:</label>
                                        <select id="ciiu" name="ciiu" class="form-control">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="cuenta_bancaria">Cuenta(s) Bancaria(s):</label>
                                        <select class="js-bank-account-multiple" multiple="multiple" style="width: 90%" id="cuenta_bancaria" name="cuenta_bancaria" >
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
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
    <script src="{{ asset('js/parameters/data_hotel/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarDepartamentos(event);
            cargarResoluciones(event);
            cargarCuentaBancaria(event);
    }, false);
 
    //Funcion para cargar los departamentos al campo "select".
    function cargarDepartamentos() {
    
        //Inicializamos el array.
        var array = @json($deptos);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("municipio", array);
    }
     //Funcion para cargar las resoluciones de facturacion.
     function cargarResoluciones() {
        //Inicializamos el array.
        var array = @json($resoluciones);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("resolucion_facturacion", array);
    }
    //Funcion para cargar las resoluciones de facturacion.
    function cargarCuentaBancaria() {
        //Inicializamos el array.
        var array = @json($cuenta_banc);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("cuenta_bancaria", array);
    }
   </script>
    @endpush
