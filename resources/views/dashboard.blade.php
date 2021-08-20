@extends('layouts.app')

@section('content')
    @php
        
        if($isNew==0 || $hasBilling==0 || $hasAccount==0){
        @endphp
        @include('layouts.master.init_parameters')
        @php
        echo $hasBilling;
        }
        else{
        @endphp
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="iconsminds-clock mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">5 Resoluciones</p>
                                        <p class="text-small text-white">Pending for publish</p>
                                    </div>
                                </div>

                                <div>
                                    <div role="progressbar"
                                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="5" aria-valuemax="12"
                                        data-show-percent="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">4 Usuarios</p>
                                        <p class="text-small text-white">Nuevos</p>
                                    </div>
                                </div>
                                <div>
                                    <div role="progressbar"
                                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="4" aria-valuemax="6"
                                        data-show-percent="false">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 progress-banner">
                            <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">8 Alertas</p>
                                        <p class="text-small text-white">Nuevas Alertas</p>
                                    </div>
                                </div>
                                <div>
                                    <div role="progressbar"
                                        class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                        data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="8" aria-valuemax="10"
                                        data-show-percent="false">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @php
        }
    @endphp
    
@endsection
