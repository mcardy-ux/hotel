@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1> Formas de Pago</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('formaPago.index')}}">Listado</a>
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
                            <form role="form" id="add_formaPago" name="add_formaPago" accept-charset="UTF-8" >
                            <input type="hidden" id="_url" value="{{ url('formaPago') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="created_by" value="{{ Auth::user()->id }}" >
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="estado">Estado:</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estado" id="estado_activo" value="activo" checked="">
                                                <label class="form-check-label" for="estado_activo">
                                                    Activo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estado" id="estado_inactivo" value="inactivo">
                                                <label class="form-check-label" for="estado_inactivo">
                                                    Inactivo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="estado" id="estado_bloqueado" value="bloqueado">
                                                <label class="form-check-label" for="estado_bloqueado">
                                                    Bloqueado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="formaPago">Formas de Pago:</label>
                                        <input type="text" class="form-control" id="formaPago" name="formaPago"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="descripcion">Descripción:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="puc">PUC:</label>
                                        <select id="puc" name="puc" class="form-control">
                                            <option value="" selected>SELECCIONAR</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="rel_hotel">Hotel:</label>
                                        <select id="rel_hotel" name="rel_hotel" class="form-control">
                                        </select>
                                    </div>
                                </div>
                                 
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('formaPago.index') }}"> 
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
    <script src="{{ asset('js/parameters/formaPago/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarPuc(event);
            cargarHoteles(event);
    }, false);
 
    function cargarHoteles() {
        //Inicializamos el array.
        var array = @json($hotels);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("rel_hotel", array);
    }

    //Funcion para cargar los departamentos al campo "select".
    function cargarPuc() {
    
        //Inicializamos el array.
        var array = @json($puc);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("puc", array);
    }
   </script>
    @endpush
