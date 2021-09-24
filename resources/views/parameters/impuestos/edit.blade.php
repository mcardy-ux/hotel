@extends('layouts.appIniEdit')

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
                            <h5 class="mb-4">Ingrese la información necesaria.</h5>
                            <form role="form" id="edit_impuestos"  name="edit_impuestos" >
                                <input type="hidden" id="_url"  value="{{ url('impuestos', [$data->encode_id])}}">
                                    <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                    <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                               
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="edit_nombre">Nombre del Impuesto:</label>
                                            <input type="text" class="form-control" id="edit_nombre" name="edit_nombre" value="{{$data->nombreImpuesto}}"
                                                aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="edit_descripcion">Descripción Contable:</label>
                                            <input type="text" class="form-control" id="edit_descripcion" name="edit_descripcion"  value="{{$data->descripcionContable}}"
                                            aria-describedby="razonHelp">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="edit_porcentaje">Porcentaje:</label>
                                            <input type="number" class="form-control" id="edit_porcentaje" name="edit_porcentaje" step="0.01" min="0.00" max="9999999.99" value="{{$data->porcentaje}}">
                                        </div>
                                        <div class="form-group col-md-10">
                                            <label for="edit_puc">PUC:</label>
                                            <select id="edit_puc" name="edit_puc" class="form-control">
                                                <option value="" selected>SELECCIONAR</option>
                                            </select>
                                        </div>
    
                                       
                                        
                                    </div>                            
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
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
    <script src="{{ asset('js/parameters/impuestos/edit.js') }}"></script>
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
