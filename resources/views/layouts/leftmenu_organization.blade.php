
<div class="sub-menu">
            <div class="scroll">
                
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseHotel" aria-expanded="true"
                            aria-controls="collapseHotel" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Hotel</span>
                        </a>
                        <div id="collapseHotel" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                              @php
                               $listaHotel=App\Http\Controllers\DashboardController::mostrarMenuHotel();
                               echo $listaHotel ?? '';
                              @endphp
                            </ul>
                        </div>
                    </li>
                    @php
                    $ExistenDatosHotel=App\Http\Controllers\DashboardController::validarExistenDatosHotel();
                    @endphp 
                    @if($ExistenDatosHotel)
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMercadeo" aria-expanded="true"
                            aria-controls="collapseMercadeo" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Mercadeo</span>
                        </a>
                        <div id="collapseMercadeo" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                              @php
                                 $listaMercadeo=App\Http\Controllers\DashboardController::mostrarMenuMercadeo();
                                   
                                       echo $listaMercadeo ?? '';
                              @endphp
                            </ul>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>