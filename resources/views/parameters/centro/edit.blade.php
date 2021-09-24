@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1> Centros</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('centro.index')}}">Listado</a>
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
                            <form role="form" id="edit_centro"  name="edit_centro" >
                                <input type="hidden" id="_url"  value="{{ url('centro', [$data->encode_id])}}">
                                    <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                    <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                               
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="edit_nombre">Nombre del centro:</label>
                                            <input type="text" class="form-control" id="edit_nombre" name="edit_nombre" value="{{$data->nombre}}"
                                                aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="edit_departamento">Departamento:</label>
                                            <input type="text" class="form-control" id="edit_departamento" name="edit_departamento" value="{{$data->departamento}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="edit_PUC_Costo">PUC Costo:</label>
                                            <input type="number" class="form-control" id="edit_PUC_Costo" name="edit_PUC_Costo" max="999999999" value="{{$data->PUC_Costo}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="edit_PUC_Gasto">PUC Gasto:</label>
                                            <input type="number" class="form-control" id="edit_PUC_Gasto" name="edit_PUC_Gasto" max="999999999" value="{{$data->PUC_Gasto}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="edit_tipo">Tipo:</label>
                                            <input type="text" class="form-control" id="edit_tipo" name="edit_tipo" value="{{$data->tipo}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="edit_puc">PUC:</label>
                                            <select id="edit_puc" name="edit_puc" class="form-control">
                                                <option value="" selected>SELCECCIONAR</option>
                                            </select>
                                        </div>
                                    </div>
                                     
                                    <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
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
    <script src="{{ asset('js/parameters/centro/edit.js') }}"></script>
    <script>
    $(function(){
        let rel_puc = @json($data->rel_puc);
        $("#edit_puc").val(rel_puc);
    });
    
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
        addOptions("edit_puc", array);
    }
    </script>
    @endpush
