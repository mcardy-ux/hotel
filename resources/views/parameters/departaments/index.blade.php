@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Departamentos</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Listado</li>
                        </ol>
                    </nav>
                    <div class="top-right-button-container">
                        <div class="btn-group">
                            <a href="{{url('departament/create')}}" >
                                    <button type="button" class="btn btn-primary mb-1">Agregar un nuevo departamento</button>
                            </a>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                    <form>
                        <input type="hidden" id="_url" value="{{ url('') }}">
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>

            @foreach($hotels as $value)
                <div class="row">
                    <div class="col-12 col-md-12 col-xl-12">
                        <div class="card mb-4">
                            <div class="card-body">

                                <div class=" d-flex flex-row mb-3">
                                    <a class="d-flex"  href="#">
                                        <img src="{{asset('storage/logos/'.$value->logo)}}" alt="Imagen" class="list-thumbnail responsive border-0" style="width:75px;height:75px; object-fit: cover;">
                                    </a>
                                    <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                            <p class="list-item-heading mb-0 truncate">{{$value->razonComercial}}</p>                                                  
                                        </div>
                                    </div>
                                </div>  
                                <div class="row">
                    
                                    <div class="col-md-12 col-lg-6 mb-4">
                                        <h5 class="card-title">Departamentos</h5>
                                        
                                            <div class="scroll dashboard-list-with-user ps ps--active-y">
                                            
                                                @foreach($deptos as $data_depto)
                                                @if($value->id==$data_depto->rel_hotel)
                                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                                    <div class="pl-3">
                                                        <a href="#">
                                                            <p class="font-weight-medium mb-0">{{$data_depto->nombre}}</p><br>
                                                            <p class="text-muted mb-0 text-small"><strong>Encargado:</strong>  {{$data_depto->name}} | <strong>Correo:</strong>  {{$data_depto->email_responsable}} | <strong>Creado en:</strong> {{$data_depto->created_at}}</p>
                                                        </a>
                                                    </div>
                                                    <div class="pl-3">

                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-outline-primary dropdown-toggle mb-0" type="button" id="dropdownMenuButtonBilling" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Opciones
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBilling" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                                <a class="dropdown-item" href="{{url('departament', [$data_depto->encode_id,'edit'])}}">Editar</a>
                                                                <a class="dropdown-item" onclick="show(this)" id="{{$data_depto->encode_id}}">Eliminar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach
                                            
                                        <div class="ps__rail-x" style="left: 0px; bottom: -79px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 79px; height: 270px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 48px; height: 166px;"></div></div></div>
                                        
                                    </div>
                                    <div class="col-md-12 col-lg-6 mb-4">
                                        <div class="card dashboard-link-list">
                                            <div class="card-body">
                                                <h5 class="card-title">Integrantes</h5>
                                                <div class="d-flex flex-row">
                                                    <div class="w-50">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="mb-1">
                                                                <a href="#">Marble Cake</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
@push('scripts')
<script src="{{ asset('js/parameters/departament/index.js') }}"></script>
<script>
</script>
@endpush
