@extends('layouts.app')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Resoluciones de Facturación</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('billing.index')}}">Listado</a>
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
                            <h5 class="mb-4">En esta seccion podras crear una nueva resolucion de facturación.</h5>
                            <form role="form" id="add_billing_resolution" name="add_billing" >
                                <input type="hidden" id="_url" value="{{ url('billing') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="id_user_create" value="{{ Auth::user()->id }}">
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="numResolucion">Numero de Resolución:
                                        </label>
                                        <input type="text" class="form-control" id="numResolucion" name="numResolucion">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fechaResolucion">Fecha de Resolución:</label>
                                        <input type="date" class="form-control" id="fechaResolucion" name="fechaResolucion">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="desde">Desde:</label>
                                        <input type="number" class="form-control" id="desde" name="desde">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="hasta">Hasta:</label>
                                        <input type="number" class="form-control" id="hasta" name="hasta" >
                                    </div>
                                </div>  
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('billing.index') }}"> 
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
    <script src="{{ asset('js/parameters/billing/create.js') }}"></script>
    @endpush
