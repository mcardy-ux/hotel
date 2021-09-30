@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Centros</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('centro.index')}}">Listado</a>
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
                            <form role="form" id="add_centro" name="add_centro" accept-charset="UTF-8" >
                            <input type="hidden" id="_url" value="{{ url('centro') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="created_by" value="{{ Auth::user()->id }}" >
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="codigo">Codigo:</label>
                                        <input type="text" class="form-control" id="codigo" name="codigo"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombre del centro:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="departamento">Departamento:</label>
                                        <select id="departamento" name="departamento" class="form-control">
                                            <option value="" selected>SELECCIONAR</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipo">Tipo:</label>
                                        <select id="tipo" name="tipo" class="form-control">
                                            <option value="" selected>SELECCIONAR</option>
                                            <option value="inventario">Inventario</option>
                                            <option value="costo">Costo</option>
                                            <option value="ingreso">Ingreso</option>

                                        </select>
                                    </div>
                                </div>
                                 
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('centro.index') }}"> 
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
    <script src="{{ asset('js/parameters/centro/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarDptos(event);
    }, false);
 
    //Funcion para cargar los departamentos al campo "select".
    function cargarDptos() {
    
        //Inicializamos el array.
        var array = @json($dptos);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("departamento", array);
    }
   </script>
    @endpush
