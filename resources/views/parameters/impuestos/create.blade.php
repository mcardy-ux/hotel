@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Impuestos</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('impuestos.index')}}">Listado</a>
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
                            <form role="form" id="add_impuestos" name="add_impuestos" accept-charset="UTF-8" >
                            <input type="hidden" id="_url" value="{{ url('impuestos') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="created_by" value="{{ Auth::user()->id }}" >
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombre del Impuesto:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="descripcion">Descripción Contable:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                                        aria-describedby="razonHelp">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="porcentaje">Porcentaje:</label>
                                        <input type="number" class="form-control" id="porcentaje" name="porcentaje" step="0.01" min="0.00" max="9999999.99">
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="puc">PUC:</label>
                                        <select id="puc" name="puc" class="form-control">
                                            <option value="" selected>SELECCIONAR</option>
                                        </select>
                                    </div>

                                   
                                    
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('impuestos.index') }}"> 
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
    <script src="{{ asset('js/parameters/impuestos/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarPuc(event);
    }, false);
 
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
