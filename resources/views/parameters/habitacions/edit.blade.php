@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Habitaciones</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('habitacions.index')}}">Listado</a>
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
                            <form role="form" id="edit_data_habitacion" name="edit_data_habitacion" accept-charset="UTF-8">
                                <input type="hidden" id="_url"  value="{{ url('departament') }}">
                                <input type="hidden" id="_urlSubmit"  value="{{ url('departament', [$data->id])}}">
                                <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="num_habitacion">Numero de Habitación:</label>
                                        <input type="text" class="form-control" id="num_habitacion" name="num_habitacion" value="{{$data->num_habitacion}}"
                                            aria-describedby="num_habitacion" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="capacidad_huespedes">Capacidad Huespedes:</label>
                                        <input type="number" class="form-control" id="capacidad_huespedes" name="capacidad_huespedes" value="{{$data->capacidad_huespedes}}"
                                        aria-describedby="capacidad_huespedes" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                
                              
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="sector_hab">Sector de Habitación:</label>
                                        <select id="sector_hab" name="sector_hab" class="form-control">
                                            
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipo_hab">Tipo de Habitación:</label>
                                        <select id="tipo_hab" name="tipo_hab" class="form-control">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="estado">Estado de la Habitación:</label>
                                        <select id="estado" name="estado" class="form-control">
                                            <option id="habilitada">Habilitada</option>
                                            <option id="deshabilitada">Deshabilitada</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="hotel">Hotel:</label>
                                        <select id="hotel" name="hotel" class="form-control">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="clase_hab">Clases de Habitación:</label>
                                        <select class="js-clases-multiple" multiple="multiple" style="width: 90%" id="clase_hab" name="clase_hab" >
                                        </select>
                                    </div>
                                    
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('habitacions.index') }}"> 
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
    <script src="{{ asset('js/parameters/habitacions/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarClases(event);
            cargarTipos(event);
            cargarSectores(event);
            cargarHoteles(event);
    }, false);
 
    //Funcion para cargar los departamentos al campo "select".
    function cargarClases() {
    
        //Inicializamos el array.
        var array = @json($clases);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("clase_hab", array);
    }
     //Funcion para cargar las resoluciones de facturacion.
     function cargarTipos() {
        //Inicializamos el array.
        var array = @json($tipos);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("tipo_hab", array);
    }
    //Funcion para cargar las resoluciones de facturacion.
    function cargarSectores() {
        //Inicializamos el array.
        var array = @json($sectores);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("sector_hab", array);
    }

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
