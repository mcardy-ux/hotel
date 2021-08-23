<div class="sub-menu">
            <div class="scroll">
                
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                            aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Administrar Datos</span>
                        </a>
                        <div id="collapseAuthorization" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                            @if($isNew==0)
                                <li>
                                    <a href="{{route('organization.create')}}">
                                        <i class="simple-icon-globe"></i> <span
                                            class="d-inline-block">Organización</span>
                                    </a>
                                </li>
                            @elseif($hasBilling==0 || $hasAccount==0)
                          
                                <li>
                                    <a href="{{route('organization.index')}}">
                                        <i class="simple-icon-globe"></i> <span
                                            class="d-inline-block">Organización</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('billing.index')}}">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Resoluciones de <br>Facturación</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('bank_account.index')}}">
                                        <i class="iconsminds-bank"></i> <span class="d-inline-block">Cuentas Bancarias</span>
                                    </a>
                                </li>
                               @elseif($hasBilling==1 || $hasAccount==1 || $isNew==1)
                               <li>
                                    <a href="{{route('organization.index')}}">
                                        <i class="simple-icon-globe"></i> <span
                                            class="d-inline-block">Organización</span>
                                    </a>
                                </li>
                               <li>
                                    <a href="{{route('user.index')}}">
                                        <i class="simple-icon-people"></i> <span
                                            class="d-inline-block">Usuarios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('billing.index')}}">
                                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Resoluciones de <br>Facturación</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('bank_account.index')}}">
                                        <i class="iconsminds-bank"></i> <span class="d-inline-block">Cuentas Bancarias</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('data_hotel.index')}}">
                                        <i class="iconsminds-hotel"></i> <span
                                            class="d-inline-block">Hotel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('departament.index')}}">
                                        <i class="iconsminds-server-2"></i> <span
                                            class="d-inline-block">Departamentos</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                </ul>
            </div>
        </div>