
<div class="sub-menu">
            <div class="scroll">
                 {{-- ****
                    Lista para Parametros de hotel  
                    ****--}}
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
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseContable" aria-expanded="true"
                            aria-controls="collapseContable" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Contabilidad</span>
                        </a>
                        <div id="collapseContable" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                              @php
                                 $listaContable=App\Http\Controllers\DashboardController::mostrarMenuContable();
                                   
                                       echo $listaContable ?? '';
                              @endphp
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseParametros" aria-expanded="true"
                            aria-controls="collapseParametros" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Parametros Adicionales</span>
                        </a>
                        <div id="collapseParametros" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                              @php
                                 $listaParametros=App\Http\Controllers\DashboardController::mostrarMenuParametrosAdicion();
                                   
                                       echo $listaParametros ?? '';
                              @endphp
                            </ul>
                        </div>
                    </li>
                    
                </ul>
                
                {{-- ****
                    Lista para Datos  
                    ****--}}
                
                <ul class="list-unstyled" data-link="datos" id="datos">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseHotel" aria-expanded="true"
                            aria-controls="collapseHotel" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Datos Generales</span>
                        </a>
                        <div id="collapseHotel" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                              @php
                               $listaDatos=App\Http\Controllers\DashboardController::mostrarDatosGenrales();
                               echo $listaDatos ?? '';
                              @endphp
                            </ul>
                        </div>
                    </li>
                   
                    
                </ul>
            </div>
        </div>