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
                                <a href="{{route('departament.index')}}">Listado</a>
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
                            <form role="form" id="add_data_depto" name="add_data_depto" >
                            <input type="hidden" id="_url" value="{{ url('departament') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="id_user_create" value="{{ Auth::user()->id }}" >
                               
                            
                                
                                <div class="form-row">
                                
                                    
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombre del departamento:</label>
                                        <input type="text" class="form-control"  id="nombre" name="nombre">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="responsable">Responsable:</label>
                                        <select id="responsable" name="responsable" class="form-control">
                                            <option value="" selected="" >Seleccionar</option>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Correo Responsable:</label>
                                        <input type="email" class="form-control" readonly id="email" name="email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="hotel">Hotel:</label>
                                        <select id="hotel" name="hotel" class="form-control">
                                            <option value="" selected="" >Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('departament.index') }}"> 
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
    <script src="{{ asset('js/parameters/departament/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarUsuarios(event);
            cargarHoteles(event);
    }, false);
 
    //Funcion para cargar los departamentos al campo "select".
    function cargarUsuarios() {
        //Inicializamos el array.
        var array = @json($users);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("responsable", array);
    }

    //Funcion para cargar los departamentos al campo "select".
    function cargarHoteles() {
        //Inicializamos el array.
        var array = @json($hotels);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("hotel", array);
    }
   </script>
    @endpush
