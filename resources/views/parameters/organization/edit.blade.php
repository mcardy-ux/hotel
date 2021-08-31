@extends('layouts.appIniEdit')

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
            <div class="row" id="card_edit_organization" >
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">A continuación puede ingresar la información correspondiente a editar.</h5>
                            <br>
                            @foreach ($org as $data)
                                <form role="form" id="edit_organization" name="edit_organization" accept-charset="UTF-8" enctype="multipart/form-data">
                                <input type="hidden" id="_url" value="{{url('organization', [$data->encode_id])}}">
                                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label for="razon_social">Razón Social:
                                        </label>
                                        <input type="text" class="form-control" id="edit_razon_social" name="edit_razon_social" 
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->razonSocial}}">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="direccion">Dirección de Notificación:
                                            </label>
                                            <input type="text" class="form-control" id="edit_direccion_contacto" name="edit_direccion_contacto"
                                                aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->direccion_contacto}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="telefono">Telefono de Notificación:</label>
                                            <input type="number" class="form-control" min="1" id="edit_telefono_contacto" name="edit_telefono_contacto" value="{{$data->telefono_contacto}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="telefono_alt">Correo de Notificación:</label>
                                            <input type="email" class="form-control" id="edit_email_contacto" name="edit_email_contacto" value="{{$data->email_contacto}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="nit">Nit:</label>
                                            <input type="number" class="form-control" id="edit_nit" name="edit_nit" min="1" max="9999999999" value="{{$data->nit}}">
                                        </div>
                                        
                                        <div class="form-group col-md-1">
                                            <label for="digito_nit">DV:</label>
                                            <input type="number" max="10" min="1" class="form-control" id="edit_digito_nit" name="edit_digito_nit" value="{{$data->digitoVerificacion}}">
                                        </div>
                                        {{-- <div class="form-group col-md-4">
                                            <label for="logo">Logo de la Organización:</label>
                                            <input type="file" class="form-control" id="logo" name="logo">
                                        </div> --}}
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary mb-0">Editar</button>
                                    <a href="{{ route('organization.index') }}"> 
                                    <button type="button" class="btn btn-light mb-0">Volver</button>
                                    </a>
                                </form>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/parameters/organization/edit.js') }}"></script>
@endpush
