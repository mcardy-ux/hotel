@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1> Cupo de Credito</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('cupoCredito.index')}}">Listado</a>
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
                            <form role="form" id="add_cupoCredito" name="add_cupoCredito" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input type="hidden" id="_url" value="{{ url('cupoCredito') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="created_by" value="{{ Auth::user()->id }}" >
                               
                               
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
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('cupoCredito.index') }}"> 
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
    <script src="{{ asset('js/parameters/cupoCredito/create.js') }}"></script>
    
    @endpush
