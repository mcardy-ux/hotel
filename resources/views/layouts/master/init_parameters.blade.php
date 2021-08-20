<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 bg-transparent border-0">
            </div>
                <div class="card mb-4 col-lg-4" >
                    <div id="smartWizardCheck" class="sw-main sw-theme-check">
                        <ul class="card-header nav nav-tabs step-anchor">
                            <li class="nav-item active"><a href="#checkStep1" class="nav-link">Step 1<br><small>Organización</small></a></li>
                            <li class="nav-item "><a href="#checkStep2" class="nav-link">Step 2<br><small>Second step description</small></a></li>
                            <li class="nav-item"><a href="#checkStep3" class="nav-link">Step 3<br><small>Third step description</small></a></li>
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
                                <div>Para continuar la configuración debe ingresar la infromación correspondiente en los modulos de acontinuación:</div>
                                <br>
                                <p class="mb-3">
                                @if($hasBilling==0)
                                <a href="{{route('billing.create')}}">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Crear Resolución Facturación</span>
                                </a>
                                @else
                                <a href="{{route('billing.index')}}">
                                    <span class="badge badge-pill badge-outline-success mb-1"> Ver Resolución Facturación</span>
                                </a>
                                @endif
                                @if($hasAccount==0)
                                <a href="{{route('bank_account.create')}}">
                                    <span class="badge badge-pill badge-outline-theme-2 mb-1">Crear Cuenta Bancaria</span>
                                </a>
                                @else
                                <a href="{{route('bank_account.index')}}">
                                    <span class="badge badge-pill badge-outline-success mb-1">Ver Cuenta Bancaria</span>
                                </a>
                                @endif
                            </p>
                            </div>
                            <div id="checkStep3" class="tab-pane step-content">
                                <h4 class="pb-2">Configurar Datos Hotel</h4>
                                <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries, but also
                                    the leap into electronic typesetting, remaining essentially unchanged. It
                                    was popularised in the 1960s with the release of Letraset sheets containing
                                    Lorem Ipsum passages, and more recently with desktop publishing software
                                    like Aldus PageMaker including versions of Lorem Ipsum. </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            <div class="col-lg-4 bg-transparent border-0">
            </div>
        </div>
    </div>
    
</main>