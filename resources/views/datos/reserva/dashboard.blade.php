@extends('layouts.app')

@section('content')
   
       
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-4">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <a href="{{route('reserva_individuo.index')}}">
                                    <div class="card mb-4 progress-banner" style="background-image: linear-gradient(to right top, #C5796D,#DBE6F6 )">
                                        <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                            <div><i class="iconsminds-digital-drawing mr-2 text-white align-text-bottom d-inline-block"></i><p class="lead text-white">Reserva Individual</p></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <a href="{{route('huespedes.index')}}">
                                <div class="card mb-4 progress-banner" style="background-image: linear-gradient(to right top, #DBD4B4,#7AA1D2)">
                                    <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                        <div><i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i><p class="lead text-white">Reserva Grupal</p></div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
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
                    </div>

                
                </div>
            </div>
        </main>

    
@endsection
