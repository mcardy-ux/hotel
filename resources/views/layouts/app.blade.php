
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('font/iconsmind-s/css/iconsminds.css')}}" />
    <link rel="stylesheet" href="{{asset('font/simple-line-icons/css/simple-line-icons.css')}}" />

    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.rtl.only.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-float-label.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/fullcalendar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/datatables.responsive.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/glide.core.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-datepicker3.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap-tagsinput.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/component-custom-switch.min.css')}}" />
    
    <link rel="stylesheet" href="{{asset('css/vendor/smart_wizard.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dore.light.blueyale.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>
        </div>

        <a class="navbar-logo" href="/dashboard">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1"
                         data-toggle="tooltip" data-placement="left" title="Dark Mode">
                        <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                        <label class="custom-switch-btn" for="switchDark"></label>
                    </div>
                </div>

               


                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">{{Auth::user()->name}}</span>
                   
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
              
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
 
                            <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </a>
                        </form>
                   
                </div>
            </div>
        </div>
    </nav>

    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li class="active">
                        <a href="{{route('dashboard')}}">
                            <i class="iconsminds-shop-4"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#layouts">
                            <i class="iconsminds-digital-drawing"></i> Parametrización
                        </a>
                        <a href="#datos">
                            <i class="iconsminds-profile"></i> Datos
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @include('layouts.leftmenu_organization')
    </div>

    @yield('content')

    <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/Chart.bundle.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/chartjs-plugin-datalabels.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/moment.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/fullcalendar.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/datatables.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/perfect-scrollbar.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/glide.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/progressbar.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/jquery.barrating.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/select2.full.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/nouislider.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/bootstrap-datepicker.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/Sortable.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/mousetrap.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/jquery.validate/jquery.validate.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/jquery.validate/additional-methods.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/bootstrap-tagsinput.min.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/vendor/jquery.smartWizard.min.js')}}" style="opacity: 1;"></script>
    
    

    <script src="{{asset('js/dore.script.js')}}" style="opacity: 1;"></script>
    <script src="{{asset('js/scripts.js')}}" style="opacity: 1;"></script>
    @stack('scripts')
</body>

</html>
