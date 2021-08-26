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
                            <li class="breadcrumb-item active" aria-current="page">Listado</li>
                        </ol>
                    </nav>
                    
                    <div class="separator mb-5"></div>
                    
                    <div class="container-fluid disable-text-selection">
                    <div class="row equal-height-container">
                            <div class="col-md-1 col-lg-3 mb-4 col-item"></div>
                            @foreach($data as $value)
                            <div class="col-md-12 col-lg-6 mb-4 col-item">
                                <div class="card">
                                    <div class="card-body pt-5 pb-5 d-flex flex-lg-column flex-md-row flex-sm-row flex-column">
                                        <div class="price-top-part">
                                        <img src="{{asset('storage/logos/'.$value->logo)}}" alt="Imagen" class="list-thumbnail responsive border-0" style="width:75px;height:75px; object-fit: cover;">
                                        
                                        <h5 class="mb-0 font-weight-semibold color-theme-1 mb-4">{{$value->razonSocial}}</h5>
                                        </div>
                                        <div class="pl-3 pr-3 pt-3 pb-0 d-flex price-feature-list flex-column flex-grow-1">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="mb-0 ">
                                                    <strong>Dirección de contacto:</strong>  {{$value->direccion_contacto}}
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-0 ">
                                                    <strong>Nit:</strong> {{$value->nit."-".$value->digitoVerificacion}}
                                                    </p>
                                                </li>

                                                <li>
                                                    <p class="mb-0 ">
                                                        <strong>Email:</strong> {{$value->email_contacto}}
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-0 ">
                                                        <strong>Telefono:</strong> {{$value->telefono_contacto}}
                                                    </p>
                                                </li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{url('data_hotel', [$value->id,'edit']) }}" class="btn btn-link btn-empty btn-lg">Editar <i class="simple-icon-arrow-right"></i></a>
                                                <a href="{{url('dashboard')}}" class="btn btn-link btn-empty btn-lg">Volver <i class="simple-icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-12 col-lg-3 mb-4 col-item"> </div>
                            </div>

                </div>
            </div>
        </div>
    </main>
@endsection

