@extends('layouts.app')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Cuentas Bancarias</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('bank_account.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Creación</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <!-- Seccion para agregar nueva resolucion -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">En esta sección podras crear una nueva cuenta bancaria.</h5>
                            <form role="form" id="add_bank_account" name="add_billing" >
                                <input type="hidden" id="_url" value="{{ url('bank_account') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="id_user_create" value="{{ Auth::user()->id }}">
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="banco">Nombre del Banco:</label>
                                        <input type="text" class="form-control" id="banco" name="banco">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipoCuenta">Tipo de  de Resolución:</label>
                                        <select id="tipoCuenta" name="tipoCuenta" class="form-control">
                                            <option selected="" disabled="disabled">Seleccionar</option>
                                            <option value="Corriente">Corriente</option>
                                            <option value="Ahorros">Ahorros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="numeroCuenta">Numero de Cuenta:</label>
                                        <input type="text" class="form-control" id="numeroCuenta" name="numeroCuenta">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="titular">Titular de la Cuenta:</label>
                                        <input type="text" class="form-control" id="titular" name="titular" >
                                    </div>
                                </div>  
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('bank_account.index') }}"> 
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
    <script src="{{ asset('js/parameters/bank_account/create.js') }}"></script>
    @endpush
