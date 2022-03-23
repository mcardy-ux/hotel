@extends('layouts.appIniEdit')

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
                            <form role="form" id="edit_formaPago"  name="edit_formaPago" >
                                <input type="hidden" id="_url"  value="{{ url('formaPago', [$data->encode_id])}}">
                                    <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                    <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                               
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="edit_estado">Estado:</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="edit_estado" id="edit_estado_activo" value="activo">
                                                    <label class="form-check-label" for="estado_activo">
                                                        Activo
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="edit_estado" id="edit_estado_inactivo" value="inactivo">
                                                    <label class="form-check-label" for="estado_inactivo">
                                                        Inactivo
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="edit_estado" id="edit_estado_bloqueado" value="bloqueado">
                                                    <label class="form-check-label" for="estado_bloqueado">
                                                        Bloqueado
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="formaPago">Formas de Pago:</label>
                                            <input type="text" class="form-control" id="edit_forma" name="edit_forma"  value="{{$data->formaPago}}"
                                                aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="descripcion">Descripción:</label>
                                            <input type="text" class="form-control" id="edit_descripcion" name="edit_descripcion" value="{{$data->descripcion}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="puc">PUC:</label>
                                            <select id="edit_puc" name="edit_puc" class="form-control">
                                                <option value="" selected>SELECCIONAR</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="edit_rel_hotel">Hotel:</label>
                                            <select id="edit_rel_hotel" name="edit_rel_hotel" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                     
                                    <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
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
    <script src="{{ asset('js/parameters/formaPago/edit.js') }}"></script>
    <script>
    $(function(){
        let estado= @json($data->estado);
        if(estado=="activo"){
            document.getElementById("edit_estado_activo").checked = true;
        }
        if(estado=="inactivo"){
            document.getElementById("edit_estado_inactivo").checked = true;
        }
        if(estado=="bloqueado"){
            document.getElementById("edit_estado_bloqueado").checked = true;
        }
        let rel_puc = @json($data->rel_puc);
        $("#edit_puc").val(rel_puc);
        
    });
    
    window.addEventListener("load", function() {
            cargarPuc(event);
            cargarHoteles();
    }, false);
 
    function cargarHoteles() {
        //Inicializamos el array.
        var array = @json($hotels);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("edit_rel_hotel", array);
        let rel_hotel = @json($data->rel_hotel);
        $("#edit_rel_hotel").val(rel_hotel);
    }
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
