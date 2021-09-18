@extends('layouts.appIniEdit')

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
                            <form role="form" id="edit_regimens"  name="edit_regimens" >
                                <input type="hidden" id="_url"  value="{{ url('regimens', [$data->encode_id])}}">
                                    
                                    <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                    <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                                 
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="edit_codigo">Codigo:</label>
                                        <input type="text" class="form-control" id="edit_codigo" name="edit_codigo"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" value="{{$data->codigo}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="edit_descripcion">Descripcion:</label>
                                        <input type="text" class="form-control" id="edit_descripcion" name="edit_descripcion"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" value="{{$data->descripcion}}" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                
                                
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="edit_componente_reg">Componentes de Regimen:</label>
                                        <select class="js-component-multiple" multiple="multiple" style="width: 90%" id="edit_componente_reg" name="edit_componente_reg" >
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
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
    <script src="{{ asset('js/parameters/regimens/edit.js') }}"></script>
    <script>
 
 
    //Funcion para cargar los departamentos al campo "select".
    function cargarComponentes() {
    
        //Inicializamos el array.
        var array = @json($components);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("edit_componente_reg", array);
    }
    
    $(document).ready(function(){
        cargarComponentes(event);
        let componentes=@json($componentsOfRegimen);
            $("#edit_componente_reg").val(componentes);
    });
    </script>
    @endpush
