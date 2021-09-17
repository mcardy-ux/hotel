@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Rango de Edades</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('rangoEdades.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edicion</li>
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
                            <form role="form" id="edit_rangoEdades"  name="edit_rangoEdades" >
                                <input type="hidden" id="_url"  value="{{ url('rangoEdades', [$data->encode_id])}}">
                                    
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
                                    <div class="form-group col-md-6">
                                        <label for="edit_rangoInicial">Rango Inicial:</label>
                                        <input type="number" class="form-control" id="edit_rangoInicial" name="edit_rangoInicial"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" value="{{$data->rangoInicial}}" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="edit_edit_rangoFinal">Rango Final:</label>
                                        <input type="number" class="form-control" id="edit_edit_rangoFinal" name="edit_edit_rangoFinal"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" value="{{$data->rangoFinal}}" >
                                    </div>
                                </div>                              
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('rangoEdades.index') }}"> 
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
    <script src="{{ asset('js/parameters/rangoEdades/edit.js') }}"></script>
    
    @endpush