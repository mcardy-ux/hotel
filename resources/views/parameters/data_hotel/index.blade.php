@extends('layouts.app')

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
                    @php 
                    if($has_hotel){
                    @endphp
                    <div class="top-right-button-container">
                        <div class="btn-group">
                            <a href="{{url('data_hotel/create')}}" >
                                    <button type="button" class="btn btn-primary mb-1">Agregar una nuevo Hotel</button>
                            </a>
                        </div>
                    </div>
                    @php 
                    }
                    @endphp
                    <div class="separator mb-5"></div>
                    
                    <div class="container-fluid disable-text-selection">
                    

                    <div class="row">
                        <div class="col-12 list" data-check-all="checkAll">
                            @php
                                if($data->isEmpty()){
                            @endphp
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
                            @php
                                }
                            @endphp
                            @foreach($data as $value)
                            
                            <div class="card d-flex flex-row mb-3">
                                    <a class="d-flex"  href="#">
                                        <img src="{{asset('storage/logos/'.$value->logo)}}" alt="Imagen" class="list-thumbnail responsive border-0" style="width:75px;height:75px; object-fit: cover;">
                                    </a>
                                <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                    <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                        <a href="Pages.Product.Detail.html" class="w-40 w-sm-100">
                                            <p class="list-item-heading mb-0 truncate">{{$value->razonSocial}}</p>
                                        </a>
                                        <p class="mb-0 text-muted text-small w-15 w-sm-100">Nit: {{$value->nit."-".$value->digitoVerificacion}}</p>
                                        <p class="mb-0 text-muted text-small w-15 w-sm-100">Telefono: {{$value->telefono}}</p>
                                        <p class="mb-0 text-muted text-small w-15 w-sm-100">Telefono: {{$value->telefonoAlterno}}</p>
                                        <p class="mb-0 text-muted text-small w-15 w-sm-100">{{$value->direccion}}</p>
                                        <div class="w-15 w-sm-100">
                                            <span class="badge badge-pill badge-primary">Disponible</span>
                                        </div>
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
