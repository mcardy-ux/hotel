<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 bg-transparent border-0">
            </div>
                <div class="card mb-4 col-lg-4" >
                    <div id="smartWizardCheck" class="sw-main sw-theme-check">
                        <ul class="card-header nav nav-tabs step-anchor">
                            <li class="nav-item active"><a href="#checkStep1" class="nav-link">Paso 1<br><small>Organización</small></a></li>
                            <li class="nav-item "><a href="#checkStep2" class="nav-link">Paso 2<br><small>Hotel y sus parámetros</small></a></li>
                            <li class="nav-item"><a href="#checkStep3" class="nav-link">Paso 3<br><small>Mercadeo</small></a></li>
                        </ul>
                        <div class="card-body sw-container tab-content" style="min-height: 157.5167px;">
                            <div id="checkStep1" class="tab-pane step-content" >
                                @if($isNew==0)
                                <h4 class="pb-2">Configurar Organización</h4>
                                <p>Para dar comienzo al aplicativo web debe escoger el tipo de organizacion que desea emplear en el aplicativo 
                                y luego diligenciar la información que se le ha requerido, puede dar clic en el siguiente boton o dirgirse en el menu lateral bajo la seccion Parametrización</p><br>
                                <a href="{{route('organization.create')}}"><button type="button" class="btn btn-outline-secondary mb-1">Ir a Organización</button></a>
                                @else
                                <h4 class="pb-2"> Organización Configurada</h4>
                                <p>Puede ver y editar la información general de la organización, o seguir con la configuración, para ello debes dar clic en Next. </p><br>
                                <a href="{{route('organization.index')}}"><button type="button" class="btn btn-outline-success mb-1">Ir a Organización</button></a>
                                @endif
                            </div>
                            <div id="checkStep2" class="tab-pane step-content" >
                                <h4 class="pb-2">Configurar Parametros Esenciales</h4>
                                <div>Para continuar con la configuración debe acceder a cada modulo y crear los registros requeridos:</div>
                                <br>
                                <p class="mb-3">
                                @if($hasBilling==0)
                                <a href="{{route('billing.create')}}">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">1. Crear Resolución Facturación</span>
                                </a>
                                @else
                                <a href="{{route('billing.index')}}">
                                    <span class="badge badge-pill badge-outline-success mb-1"> Ver Resolución Facturación</span>
                                </a>
                                @endif
                                @if($hasAccount==0)
                                
                                <a href="{{route('bank_account.create')}}">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">2. Crear Cuenta Bancaria</span>
                                </a>
                                @else
                                <a href="{{route('bank_account.index')}}">
                                    <span class="badge badge-pill badge-outline-success mb-1">Ver Cuenta Bancaria</span>
                                </a>
                                @endif
                                @if(!$hasHotel && $hasBilling>=1 && $hasAccount>=1)
                                <a href="{{route('data_hotel.create')}}">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">3. Crear Hotel</span>
                                </a>
                                @elseif($hasHotel &&  $hasBilling>=1 && $hasAccount>=1)
                                <a href="{{route('data_hotel.index')}}">
                                    <span class="badge badge-pill badge-outline-success mb-1">Ver Hotel</span>
                                </a>
                                @endif
                                @if(!$hasDpto && $hasHotel &&  $hasBilling>=1 && $hasAccount>=1)
                                <a href="{{route('departament.create')}}">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">4. Crear Departamentos</span>
                                </a>
                                @elseif($hasDpto && $hasHotel &&  $hasBilling>=1 && $hasAccount>=1)
                                <a href="{{route('departament.index')}}">
                                    <span class="badge badge-pill badge-outline-success mb-1">Ver Departamentos</span>
                                </a>
                                @endif
                                @if(!$hasUsers && $hasDpto && $hasHotel &&  $hasBilling>=1 && $hasAccount>=1)
                                <a href="{{route('user.create')}}">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">5. Crear Usuarios</span>
                                </a>
                                @elseif($hasUsers && $hasDpto && $hasHotel &&  $hasBilling>=1 && $hasAccount>=1)
                                <a href="{{route('user.index')}}">
                                    <span class="badge badge-pill badge-outline-success mb-1">Ver Usuarios</span>
                                </a>
                                @endif
                            </p>
                            </div>
                            <div id="checkStep3" class="tab-pane step-content">
                                <h4 class="pb-2">Configurar Parametros mercadeo</h4>
                                <div>Para continuar con la configuración debe acceder a cada modulo y crear los registros requeridos:</div>
                                <br>
                                <p class="mb-3">Habitaciones<br>
                                    @if($SectoresHab==0  )
                                    <a href="{{route('sectoresHab.create')}}">
                                        <span class="badge badge-pill badge-outline-theme-2 mb-1">1. Crear Sectores de Habitaciones</span>
                                    </a>
                                    @else
                                    <a href="{{route('sectoresHab.index')}}">
                                        <span class="badge badge-pill badge-outline-success mb-1"> Ver Sectores de Habitaciones</span>
                                    </a>
                                    @endif
                                    @if($tiposHab==0)
                                    <a href="{{route('tiposHab.create')}}">
                                        <span class="badge badge-pill badge-outline-theme-2 mb-1">2. Crear Tipos de Habitaciones</span>
                                    </a>
                                    @else
                                    <a href="{{route('tiposHab.index')}}">
                                        <span class="badge badge-pill badge-outline-success mb-1"> Ver Tipos de Habitaciones</span>
                                    </a>
                                    @endif
                                    @if($claseHab==0)
                                    <a href="{{route('claseHab.create')}}">
                                        <span class="badge badge-pill badge-outline-theme-2 mb-1">3. Crear Clase de Habitaciones</span>
                                    </a>
                                    @else
                                    <a href="{{route('claseHab.index')}}">
                                        <span class="badge badge-pill badge-outline-success mb-1"> Ver Clase de Habitaciones</span>
                                    </a>
                                    @endif
                                    </p>
                                    <p class="mb-3">Regimenes<br></p>
                                        <p class="mb-3">
                                    @if($comp_reg==0)
                                    <a href="{{route('comp_regimen.create')}}">
                                        <span class="badge badge-pill badge-outline-theme-2 mb-1">1. Crear Componentes de Regimen</span>
                                    </a>
                                    @else
                                    <a href="{{route('comp_regimen.index')}}">
                                        <span class="badge badge-pill badge-outline-success mb-1"> Ver Componentes de Regimen</span>
                                    </a>
                                        @if($regimenes==0)
                                        <a href="{{route('regimens.create')}}">
                                            <span class="badge badge-pill badge-outline-theme-2 mb-1">2. Crear Regimenes</span>
                                        </a>
                                        @else
                                        <a href="{{route('regimens.index')}}">
                                            <span class="badge badge-pill badge-outline-success mb-1"> Ver Regimenes</span>
                                        </a>
                                    @endif

                                    @endif
                                </p>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            <div class="col-lg-4 bg-transparent border-0">
            </div>
        </div>
    </div>
    
</main>