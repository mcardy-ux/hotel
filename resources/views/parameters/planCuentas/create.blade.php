@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1> Plan de Cuentas</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('planCuentas.index')}}">Listado</a>
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
                            <form role="form" id="add_planCuentas" name="add_planCuentas" accept-charset="UTF-8" >
                            <input type="hidden" id="_url" value="{{ url('planCuentas') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="created_by" value="{{ Auth::user()->id }}" >
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="codigoCuenta">Codigo de Cuenta:</label>
                                        <input type="text" class="form-control" id="codigoCuenta" name="codigoCuenta"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombreCuenta">Nombre de Cuenta:</label>
                                        <input type="text" class="form-control" id="nombreCuenta" name="nombreCuenta"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="centroInventario">Centro de Inventario:</label>
                                        <input type="number" class="form-control" id="centroInventario" name="centroInventario"  min="1" max="9999"
                                            aria-describedby="razonHelp" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="centroCosto">Centro de Costo:</label>
                                        <input type="number" class="form-control" id="centroCosto" name="centroCosto" min="1" max="9999"
                                        aria-describedby="razonHelp" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="centroVenta">Centro de Ingreso:</label>
                                        <input type="number" class="form-control" id="centroVenta" name="centroVenta" min="1" max="9999"
                                        aria-describedby="razonHelp" >
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="terceros">Terceros:</label>
                                        <input type="text" class="form-control" id="terceros" name="terceros"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('planCuentas.index') }}"> 
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
    <script src="{{ asset('js/parameters/planCuentas/create.js') }}"></script>
    
    @endpush
