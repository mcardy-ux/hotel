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
                    <div class="top-right-button-container">
                        <div class="btn-group">
                            <a href="{{url('data_hotel/create')}}" >
                                    <button type="button" class="btn btn-primary mb-1">Agregar una nuevo Hotel</button>
                            </a>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                    
                    <div class="container-fluid disable-text-selection">
           

            <div class="row">
                <div class="col-12 list" data-check-all="checkAll">
                    @foreach($data as $value)
                    <div class="card d-flex flex-row mb-3">
                        <a class="d-flex" href="Pages.Product.Detail.html">
                            <img src="{{asset('storage/logos/'.$value->logo)}}" alt="Imagen" class="list-thumbnail responsive border-0 card-img-left">
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
