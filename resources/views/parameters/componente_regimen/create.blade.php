@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Componentes de Regimen</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('comp_regimen.index')}}">Listado</a>
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
                            <form role="form" id="add_data_comp_regimen" name="add_data_comp_regimen" >
                            <input type="hidden" id="_url" value="{{ url('comp_regimen') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <div class="form-row">
                                
                                    <div class="form-group col-md-6">
                                        <label for="codigo">Código del componente:</label>
                                        <input type="text" class="form-control" placeholder="HM" id="codigo" name="codigo" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombre">Nombre del componente:</label>
                                        <input type="text" class="form-control" placeholder="Solo Alojamiento" id="nombre" name="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('comp_regimen.index') }}"> 
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
    <script src="{{ asset('js/parameters/comp_regimen/create.js') }}"></script>
    @endpush
