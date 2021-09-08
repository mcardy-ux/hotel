@extends('layouts.appHotel')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Regimenes</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('regimens.index')}}">Listado</a>
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
                            <form role="form" id="add_regimens" name="add_regimens" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input type="hidden" id="_url" value="{{ url('regimens') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="id_user_create" value="{{ Auth::user()->id }}" >
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="codigo">Codigo:</label>
                                        <input type="text" class="form-control" id="codigo" name="codigo"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="descripcion">Descripcion:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                
                                
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="componente_reg">Componentes de Regimen:</label>
                                        <select class="js-component-multiple" multiple="multiple" style="width: 90%" id="componente_reg" name="componente_reg" >
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('regimens.index') }}"> 
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
    <script src="{{ asset('js/parameters/regimens/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarComponentes(event);
    }, false);
 
    //Funcion para cargar los departamentos al campo "select".
    function cargarComponentes() {
    
        //Inicializamos el array.
        var array = @json($components);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("componente_reg", array);
    }
    
   </script>
    @endpush
