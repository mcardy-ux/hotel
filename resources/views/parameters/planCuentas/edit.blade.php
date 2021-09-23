@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Plan de Cuentas</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('planCuentas.index')}}">Listado</a>
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
                            <form role="form" id="edit_planCuentas"  name="edit_planCuentas" >
                                <input type="hidden" id="_url"  value="{{ url('planCuentas', [$data->encode_id])}}">
                                    <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                    <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                               
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="edit_codigoCuenta">Codigo de Cuenta:</label>
                                            <input type="text" class="form-control" id="edit_codigoCuenta" name="edit_codigoCuenta" value="{{$data->codigoCuenta}}"
                                                aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="edit_nombreCuenta">Nombre de Cuenta:</label>
                                            <input type="text" class="form-control" id="edit_nombreCuenta" name="edit_nombreCuenta"  value="{{$data->nombreCuenta}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="edit_centroInventario">Centro de Inventario:</label>
                                            <input type="number" class="form-control" id="edit_centroInventario" name="edit_centroInventario"  min="1" max="9999" value="{{$data->centroInventario}}"
                                                aria-describedby="razonHelp" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="edit_centroCosto">Centro de Costo:</label>
                                            <input type="number" class="form-control" id="edit_centroCosto" name="edit_centroCosto" min="1" max="9999" value="{{$data->centroCosto}}"
                                            aria-describedby="razonHelp" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="edit_centroVenta">Centro de Ingreso:</label>
                                            <input type="number" class="form-control" id="edit_centroVenta" name="edit_centroVenta" min="1" max="9999" value="{{$data->centroVenta}}"
                                            aria-describedby="razonHelp" >
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="edit_terceros">Terceros:</label>
                                            <input type="text" class="form-control" id="edit_terceros" name="edit_terceros" value="{{$data->terceros}}"
                                                aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>

                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
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
    <script src="{{ asset('js/parameters/planCuentas/edit.js') }}"></script>
    
    @endpush
