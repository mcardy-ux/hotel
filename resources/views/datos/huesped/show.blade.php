
@extends('layouts.app')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Huespedes</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('huespedes.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Visualización</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>
        

            <div class="row" id="card_huesped">
                <div class="col-12">
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="top-right-button-container">
                                <input type="button" class="btn btn-primary mb-1" id="razon_social_hotel" disabled=""/>
                                <div class="btn-group">
                                    <a href="{{url('huespedes/create')}}" >
                                            <button type="button" class="btn btn-success mb-1">Agregar un nuevo Huesped</button>
                                    </a>
                                </div>
                            </div>
                            <h5 class="mb-4">Información general del huesped.</h5>
                            
                            <br>
                            <form role="form" id="show_huespedes" name="show_huespedes" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input type="hidden" id="_url" value="{{ url('organization') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="rel_hotel" name="rel_hotel"  >
                                <div class="row mb-12">
                                    <div class="col-lg-12 col-md-12 mb-4">  
                                        
                                        
                                        <div class="row equal-height-container">

                    
                    
                                            <div class="col-md-8 col-lg-8 mb-4 col-item">
                                                <div class="card">
                                                    <div class="card-body pt-5 pb-5 d-flex flex-lg-column flex-md-row flex-sm-row flex-column">
                                                        <div class="price-top-part">
                                                            <i class="iconsminds-male large-icon"></i>
                                                            <h5 class="font-weight-semibold color-theme-1 mb-4">{{$data->primer_nombre." ".$data->segundo_nombre." ".$data->primer_apellido." ".$data->segundo_apellido}}</h5>
                                                         
                                                                <p class="mb-3">
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Genero: {{$data->genero}}</span>
                                                                </p>
                                                                <p class="text text-small mb-2">Identificación</p>
                                                                <p class="mb-3">
                                                                    @if ($data->validacion_registro==1)
                                                                        <span class="badge badge-pill badge-outline-theme-2 mb-1">{{$tipo_documento->codigo}} - {{$data->numero_doc}} </span>
                                                                        <span class="badge badge-pill badge-outline-theme-2 mb-1">{{$lugar_exp}} </span>
                                                                    @endif
                                                                    @if ($data->validacion_registro==0)
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">ID Sistema</span>
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">{{$data->id_registro}}</span>
                                                                    @endif
                                                                </p>
                                                                 
                                                                <p class="mb-3">
                                                                    @isset($nacionalidad)
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Nacionalidad: {{$nacionalidad}}</span>@endisset

                                                                    @isset($data->direccion)
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Dirección: {{$data->direccion}}</span>@endisset
                                                                </p>
                                                                <p class="text text-small mb-2">Contacto</p>
                                                                <p class="mb-3">
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Tel: {{$data->telefono}}</span>
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1"><a href="https://wa.me/{{$data->celular}}" target="_blank">Cel: {{$data->celular}}</a></span>
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1"><a href="mailto:{{$data->email}}">Email: {{$data->email}}</a></span>
                                                                </p>
                                                                <p class="text text-small mb-2">Mas Datos</p>
                                                                <p class="mb-3">
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Tipo de Huesped: {{$tipo_huesped->value}} - {{$tipo_huesped->secvalue}}</span>
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Tarifa: {{$tarifa->value}}</span>
                                                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Forma de Pago: {{$forma_pago->value}} - {{$forma_pago->secvalue}}</span>
                                                                </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-lg-4 mb-4 col-item">
                                                <div class="card" style="border: none">
                                                    <form action="/file-upload">
                                                        <div class="dropzone dz-clickable">
                                                        <div class="dz-default dz-message"><span>Soltar archivos, para adjuntar.</span></div></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/datos/huesped/show.js') }}"></script>
    <script>
        $( document ).ready(function() {
            let razon=@json($razon_hotel->value);
            let id_hotel=@json($data->rel_hotel);
            $("#razon_social_hotel").val(razon);
        });
 
    //Funcion para cargar los hoteles al campo "select".
   
</script>
@endpush
