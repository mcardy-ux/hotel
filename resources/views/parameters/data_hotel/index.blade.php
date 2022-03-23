@extends('layouts.appHotel')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Hoteles</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Listado</li>
                        </ol>
                    </nav>

                    @if($is_Ind->Is_independiente==0)
                    <div class="top-right-button-container">
                        <div class="btn-group">
                            <a href="{{url('data_hotel/create')}}" >
                                    <button type="button" class="btn btn-primary mb-1">Agregar un nuevo Hotel</button>
                            </a>
                        </div>
                    </div>
                    @endif
                    @if($is_Ind->Is_independiente==1)
                        @if($has_hotel==false)
                            <div class="top-right-button-container">
                                <div class="btn-group">
                                    <a href="{{url('data_hotel/create')}}" >
                                            <button type="button" class="btn btn-primary mb-1">Agregar un nuevo Hotel</button>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endif
                    <div class="separator mb-5"></div>
                    
                    <div class="container-fluid disable-text-selection">
                    

                    <div class="row">
                        <div class="col-12 list" data-check-all="checkAll">
                            @if($data->isEmpty())
                            <div class="row">
                                <div class="col-lg-4 col-sm-12 mb-4">
                                    
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class=" justify-content-start" >
                                        <center>
                                        <img src="{{asset('storage/empty.png')}}" alt="Imagen"  style="width:360px;height:290px;">
                                        </center>
                                        <div class="card-body justify-content-end d-flex flex-column">
                                            <center>
                                            <h5 class="card-title">Aun no existen registros!</h5>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            @endif
                            @foreach($data as $value)


                            <div class="row">
                            <div class="col-12 col-md-12 col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-body">

                                        <div class=" d-flex flex-row mb-3">
                                            <a class="d-flex"  href="#">
                                                <div style="margin: 0 auto;text-align: left; width:175px;height:75px;">
                                                <img src="{{asset('storage/logos/'.$value->logo)}}" alt="Imagen" class="list-thumbnail responsive border-0" style="width:175px;height:75px;object-fit: contain;">
                                                </div>
                                                
                                            </a>
                                            <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                                <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                                    
                                                    <p class="list-item-heading mb-0 truncate">{{$value->razonComercial}}</p>
                                                    <p class="text-muted text-small mb-2"><strong>Dirección fisica:</strong></p>
                                                    <p class="mb-3 text-muted text-small">{{$value->direccion}}</p>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonBank" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBank" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                            <a class="dropdown-item" href="{{url('data_hotel', [$value->id,'edit']) }}">Editar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            
                                            <p class="text-muted text-small mb-2"><strong>Telefono de contacto:</strong></p>
                                            <p class="mb-3 text-muted text-small">{{$value->telefono}}</p>
                                            <p class="text-muted text-small mb-2"><strong>Telefono alterno</strong></p>
                                            <p class="mb-3 text-muted text-small">{{$value->telefonoAlterno}}</p>                                       
                                            <p class="text-muted text-small mb-2"><strong>Regimen Tributario:</strong></p>
                                            <p class="mb-3 text-muted text-small">{{$value->regimenTributario}}</p>
                                            <p class="text-muted text-small mb-2"><strong>Codgio CIIU:</strong></p>
                                            <p class="mb-3 text-muted text-small">{{$value->ciiuActividad}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>

                        @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
