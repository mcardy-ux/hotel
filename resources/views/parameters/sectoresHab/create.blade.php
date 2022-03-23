@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Sectores de Habitaciones</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('sectoresHab.index')}}">Listado</a>
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
                            <h5 class="mb-4">Ingrese la información necesaria.</h5>
                            <form role="form" id="add_data_sectoresHab" name="add_data_sectoresHab" >
                            <input type="hidden" id="_url" value="{{ url('sectoresHab') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <div class="form-row">
                                
                                    
                                    <div class="form-group col-md-6">
                                        <label for="descripcion">Descripción del Sector:</label>
                                        <input type="text" class="form-control"  id="descripcion" name="descripcion" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="hotel_id">Hotel:</label>
                                        <select id="hotel_id" name="hotel_id" class="form-control">
                                            
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('sectoresHab.index') }}"> 
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
    <script src="{{ asset('js/parameters/sectoresHab/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarHoteles(event);
    }, false);
    
    function cargarHoteles() {
        //Inicializamos el array.
        var array = @json($hotels);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("hotel_id", array);
    }
    </script>

    @endpush
