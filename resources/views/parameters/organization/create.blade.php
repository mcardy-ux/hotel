@extends('layouts.app')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Organización</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>
           
            <div class="row mb-4" id="card_organization">
                <div class="row mb-12">
                    <div class="col-lg-12 col-md-12 mb-4">
                        <p>A continuación debe escoger el tipo de organización que desea parametrizar, esto tendra un efecto en la configuración inicial y en la forma en que el aplicativo manejara su información.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-6 mb-4">
                    <div class="card ">
                        <div class="card-body">
                            <div class="text-center">
                            <i class="iconsminds-hotel large-icon"></i>
                                <p class="list-item-heading mb-1">  Hotel Independiente</p>
                                <p class="mb-4 text-muted">Esta es una buena opción para llevar el control de un solo hotel</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" id="independiente" name="independiente" value="independiente">Escoger</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-6 mb-4">
                    <div class="card ">
                        <div class="card-body">
                            <div class="text-center">
                            <i class="iconsminds-monitor---laptop large-icon"></i>
                                <p class="list-item-heading mb-1"> MultiHotel</p>
                                <p class="mb-4 text-muted ">Esta es una buena opción para llevar el control de un varias franquicias</p>
                                    <button type="button" class="btn btn-sm btn-outline-primary" id="multihotel" name="multihotel" value="multihotel">Escoger</button>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="card_add_organization" style="display:none;">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="top-right-button-container">
                                <input type="button" class="btn btn-primary mb-1" id="tipo_select" disabled=""></input>
                            </div>
                            <h5 class="mb-4">Ingresa la información necesaria.</h5>
                            
                            <br>
                            <form role="form" id="add_organization" name="add_organization" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input type="hidden" id="_url" value="{{ url('organization') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="_type_org" name="_type_org"  >
                                <div class="form-group">
                                    <label for="razon_social">Razón Social:
                                    </label>
                                    <input type="text" class="form-control" id="razon_social" name="razon_social" 
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-row">
                                     <div class="form-group col-md-4">
                                        <label for="direccion">Dirección de Notificación:
                                        </label>
                                        <input type="text" class="form-control" id="direccion_contacto" name="direccion_contacto"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="telefono">Telefono de Notificación:</label>
                                        <input type="number" class="form-control" min="1" id="telefono_contacto" name="telefono_contacto">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="telefono_alt">Correo de Notificación:</label>
                                        <input type="email" class="form-control" id="email_contacto" name="email_contacto">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="nit">Nit:</label>
                                        <input type="number" class="form-control" id="nit" name="nit" min="1" max="9999999999">
                                    </div>
                                    
                                    <div class="form-group col-md-1">
                                        <label for="digito_nit">DV:</label>
                                        <input type="number" max="10" min="1" class="form-control" id="digito_nit" name="digito_nit" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="logo">Logo de la Organización:</label>
                                        <input type="file" class="form-control" id="logo" name="logo">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('organization.create') }}"> 
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
    <script src="{{ asset('js/parameters/organization/create.js') }}"></script>
<script>
</script>
@endpush
