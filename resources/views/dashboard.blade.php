@extends('layouts.app')

@section('content')
   
       
        <main>
            <div class="container-fluid">
                <div class="row">
                   
                    <div class="col-lg-12 col-xl-9">
                        <div class="icon-cards-row">
                            <div class="glide dashboard-numbers glide--ltr glide--slider glide--swipeable">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides" style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 704px; transform: translate3d(0px, 0px, 0px);">
                                        <li class="glide__slide glide__slide--active" style="width: 169px; margin-right: 3.5px;">
                                            <a href="#" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-clock"></i>
                                                    <p class="card-text mb-0">Pending Orders</p>
                                                    <p class="lead text-center">16</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="glide__slide" style="width: 169px; margin-left: 3.5px; margin-right: 3.5px;">
                                            <a href="#" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-basket-coins"></i>
                                                    <p class="card-text mb-0">Completed Orders</p>
                                                    <p class="lead text-center">32</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="glide__slide" style="width: 169px; margin-left: 3.5px; margin-right: 3.5px;">
                                            <a href="#" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-arrow-refresh"></i>
                                                    <p class="card-text mb-0">Refund Requests</p>
                                                    <p class="lead text-center">2</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="glide__slide" style="width: 169px; margin-left: 3.5px;">
                                            <a href="#" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-mail-read"></i>
                                                    <p class="card-text mb-0">New Comments</p>
                                                    <p class="lead text-center">25</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="card">
                                    <div class="position-absolute card-top-buttons">
    
                                        <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="simple-icon-refresh"></i>
                                        </button>
    
                                        <div class="dropdown-menu dropdown-menu-right mt-3">
                                            <a class="dropdown-item" href="#">Sales</a>
                                            <a class="dropdown-item" href="#">Orders</a>
                                            <a class="dropdown-item" href="#">Refunds</a>
                                        </div>
    
                                    </div>
    
                                    <div class="card-body">
                                        <h5 class="card-title">Sales</h5>
                                        <div class="dashboard-line-chart chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="salesChart" style="display: block; width: 631px; height: 283px;" class="chartjs-render-monitor" width="631" height="283"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-12 mb-4">
                        <div class="row">
                            <div class="col-xl-12 col-lg-4">
                                <a href="{{route('dash_settings')}}">
                                    <div class="card mb-4 progress-banner" style="background-image: linear-gradient(to right top,#639ad1 ,#e0c4fc )">
                                        <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                            <div>
                                                <i class="iconsminds-digital-drawing mr-2 text-white align-text-bottom d-inline-block"></i>
                                                <div>
                                                    <p class="lead text-white">Configurar Parametros</p>
                                                    <p class="text-small text-white">Administración total del hotel.</p>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-12 col-lg-4">
                                <div class="card mb-4 progress-banner" style="background-image: linear-gradient(to right top, #fb83a7,#fdd29e)">
                                    <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                        <div>
                                            <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                                            <div>
                                                <p class="lead text-white">Datos Basicos</p>
                                                <p class="text-small text-white">Puedes administrar huespedes, compañias o agencias.</p>
                                            </div>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-4">
                                <div class="card mb-4 progress-banner" style="background-image: linear-gradient(to right top,#60606b,#acacb3)">
                                    <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                        <div>
                                            <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                            <div>
                                                <p class="lead text-white">Reservas</p>
                                                <p class="text-small text-white">Puedes gestionar reservas, forecast y grupos.</p>
                                            </div>
                                        </div>
                                        <div>
                                            
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    
@endsection
