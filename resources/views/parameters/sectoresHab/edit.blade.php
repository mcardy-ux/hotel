@extends('layouts.appIniEdit')

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
                            <h5 class="mb-4">Edite la información necesaria.</h5>
                            <form role="form" id="edit_data_sectoresHab" name="edit_data_sectoresHab" >
                            <input type="hidden" id="_url"  value="{{ url('sectoresHab', [$data->encode_id])}}">
                            <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                            <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="edit_descripcion">Descripción del Sector:</label>
                                        <input type="text" class="form-control"  id="edit_descripcion" name="edit_descripcion" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->descripcion}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="edit_hotel_id">Hotel:</label>
                                        <select id="edit_hotel_id" name="edit_hotel_id" class="form-control">
                                            
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
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
    <script src="{{ asset('js/parameters/sectoresHab/edit.js') }}"></script>
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
        addOptions("edit_hotel_id", array);
        let value=@json($data);
        console.log(value.hotel_id);
        $("#edit_hotel_id option[value='"+ value.hotel_id +"']").attr("selected",true);
    }
    </script>
    @endpush
