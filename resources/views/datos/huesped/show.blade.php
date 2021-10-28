
@extends('layouts.app')

@section('content')

<main style="opacity: 1;" class="default-transition">
    <div class="container-fluid">
        <div class="row app-row">
            <div class="col-12" data-check-all="checkAll">
                <div class="mb-2">
                    <h1>
                        <i class="simple-icon-refresh heading-icon"></i>
                        <span class="align-middle d-inline-block pt-1">Información General del Huesped</span>
                    </h1>
                    
                </div>



                <ul class="nav nav-tabs separator-tabs ml-0 mb-5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true">Detalles Huesped</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="third-tab" data-toggle="tab" href="#third" role="tab" aria-controls="third" aria-selected="false">Bitacora</a>
                    </li>
                </ul>
                <div class="tab-content mb-4">
                    <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Porcentaje Datos Completados</h6>
                                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="40" data-show-percent="true">
                                        <div class="progressbar-text" style="position: absolute; left: 50%; top: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(146, 44, 136);">40%</div></div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="position-absolute card-top-buttons">
                                        <button class="btn btn-header-light icon-button">
                                            <i class="simple-icon-pencil"></i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <p class="list-item-heading mb-4">Información Personal</p>
                                        <p class="text-muted text-small mb-2">Nombre Completo</p>
                                        <p class="mb-3">{{$data->primer_nombre." ".$data->segundo_nombre." ".$data->primer_apellido." ".$data->segundo_apellido}}</p>
                                        <p class="text-muted text-small mb-2">Genero</p>
                                        <p class="mb-3">{{$data->genero}}</p>
                                        <p class="text-muted text-small mb-2">Identificación</p>
                                        <p class="mb-3">
                                            @if ($data->validacion_registro==1)
                                                <span class="badge badge-pill badge-outline-theme-2 mb-1">{{$tipo_documento->codigo}} - {{$data->numero_doc}} </span>
                                                <span class="badge badge-pill badge-outline-theme-2 mb-1">{{$lugar_exp}} </span>
                                            @endif
                                            @if ($data->validacion_registro==0)
                                                <span class="badge badge-pill badge-outline-theme-2 mb-1">ID Sistema</span>
                                                <span class="badge badge-pill badge-outline-theme-2 mb-1">{{$data->id_registro}}</span>
                                            @endif
                                        </p>
                                        @isset($nacionalidad)
                                        <p class="text-muted text-small mb-2">Nacionalidad</p>
                                        <p class="mb-3">{{$nacionalidad}}</p>
                                        @endisset

                                        @isset($data->direccion)
                                        <p class="text-muted text-small mb-2">Dirección</p>
                                        <p class="mb-3">{{$data->direccion}}</p>
                                        @endisset
                                        
                                        <p class="text-muted text-small mb-2">Contacto</p>
                                        <div>
                                            <p class="d-sm-inline-block mb-1">
                                                <span class="badge badge-pill badge-outline-theme-3 mb-1">Tel: {{$data->telefono}}</span>
                                            </p>
                                            <p class="d-sm-inline-block  mb-1">
                                                <span class="badge badge-pill badge-outline-theme-3 mb-1"><a href="https://wa.me/{{$data->celular}}" target="_blank">Cel: {{$data->celular}}</a></span>
                                            </p>
                                            <p class="d-sm-inline-block  mb-1">
                                                <span class="badge badge-pill badge-outline-theme-3 mb-1"><a href="mailto:{{$data->email}}">Email: {{$data->email}}</a></span>
                                            </p>
                                        </div>

                                        <p class="text-muted text-small mb-2">Mas Datos</p>
                                        <div>
                                            <p class="d-sm-inline-block mb-1">
                                                <span class="badge badge-pill badge-outline-theme-3 mb-1">Tipo de Huesped: {{$tipo_huesped->value}} - {{$tipo_huesped->secvalue}}</span>
                                            </p>
                                            <p class="d-sm-inline-block  mb-1">
                                                <span class="badge badge-pill badge-outline-theme-3 mb-1">Tarifa: {{$tarifa->value}}</span>
                                            </p>
                                            <p class="d-sm-inline-block  mb-1">
                                                <span class="badge badge-pill badge-outline-theme-3 mb-1">Forma de Pago: {{$forma_pago->value}} - {{$forma_pago->secvalue}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="card">
                                    <div class="position-absolute card-top-buttons">
                                        <button class="btn btn-header-light icon-button">
                                            <i class="simple-icon-refresh"></i>
                                        </button>
                                    </div>
                                    <div class="card-body">
                                        <p class="list-item-heading mb-4">Seguimiento</p>


                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                            <a href="#">
                                                <img alt="Profile Picture" src="{{asset('img/l-4.jpg')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-2">Andrea Meneses</p>
                                                    <p class="text-semi-muted mb-1">
                                                       Se ha reservado una silla en la cabaña del restaurante prioncipal.

                                                    </p>
                                                    <p class="text-muted mb-0 text-small">09.04.2018 - 12:45</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row mb-3 pb-3 border-bottom ">
                                            <a href="#">
                                                <img alt="Profile Picture" src="{{asset('img/l-4.jpg')}}" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                                            </a>
                                            <div class="pl-3">
                                                <a href="#">
                                                    <p class="font-weight-medium mb-2">Andrea Meneses</p>
                                                    <p class="text-semi-muted mb-1">
                                                        Se le ha dejado los medicamentos en la habitación
                                                    </p>
                                                    <p class="text-muted mb-0 text-small">04.04.2018 - 01:45</p>
                                                </a>
                                            </div>
                                        </div>


                                      

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p class="list-item-heading mb-4">Overview</p>
                                        <div class="mb-4">
                                            <p class="mb-2">Pull Requests
                                                <span class="float-right text-muted">12/18</span>
                                            </p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                <div class="progress-bar bg-theme-2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                            </div>

                                            <table class="table table-sm table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-0 pb-1 w-10">
                                                            <span class="log-indicator border-theme-1 align-middle"></span>
                                                        </td>
                                                        <td class="p-0 pb-1">
                                                            <span class="font-weight-medium text-muted text-small">3
                                                                Merged Requests</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-0 pb-1 w-10">
                                                            <span class="log-indicator border-theme-2 align-middle"></span>
                                                        </td>
                                                        <td class="p-0 pb-1">
                                                            <span class="font-weight-medium text-muted text-small">2
                                                                Proposed Requests</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div>
                                            <p class="mb-2">Issues
                                                <span class="float-right text-muted">24/32</span>
                                            </p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                <div class="progress-bar bg-theme-2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                            </div>

                                            <table class="table table-sm table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td class="p-0 pb-1 w-10">
                                                            <span class="log-indicator border-theme-1 align-middle"></span>
                                                        </td>
                                                        <td class="p-0 pb-1">
                                                            <span class="font-weight-medium text-muted text-small">24
                                                                Closed</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-0 pb-1 w-10">
                                                            <span class="log-indicator border-theme-2 align-middle"></span>
                                                        </td>
                                                        <td class="p-0 pb-1">
                                                            <span class="font-weight-medium text-muted text-small">6
                                                                Active</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="mb-4">Frequency</h6>
                                        <div class="dashboard-donut-chart chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="frequencyChart" style="display: block; width: 374px; height: 270px;" class="chartjs-render-monitor" width="374" height="270"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="d-flex flex-row mb-2  mb-4">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile Picture" src="{{asset('img/l-4.jpg')}}" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                            </a>
                                            <div class=" d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                    <div class="min-width-zero">
                                                        <a href="#">
                                                            <p class="mb-0 truncate">Sarah Kortney</p>
                                                        </a>
                                                        <p class="text-muted mb-0 text-small">315 Commits</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dashboard-line-chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="contributionChart1" style="display: block; width: 833px; height: 283px;" class="chartjs-render-monitor" width="833" height="283"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="d-flex flex-row mb-2  mb-4">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile Picture" src="{{asset('img/l-4.jpg')}}" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                            </a>
                                            <div class=" d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                    <div class="min-width-zero">
                                                        <a href="#">
                                                            <p class="mb-0 truncate">Latarsha Gama</p>
                                                        </a>
                                                        <p class="text-muted mb-0 text-small">482 Commits</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dashboard-line-chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="contributionChart2" style="display: block; width: 833px; height: 283px;" class="chartjs-render-monitor" width="833" height="283"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row mb-2  mb-4">
                                            <a class="d-flex" href="#">
                                                <img alt="Profile Picture" src="{{asset('img/l-4.jpg')}}" class="img-thumbnail border-0 rounded-circle mr-3 list-thumbnail align-self-center xsmall">
                                            </a>
                                            <div class=" d-flex flex-grow-1 min-width-zero">
                                                <div class="m-2 pl-0 align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero">
                                                    <div class="min-width-zero">
                                                        <a href="#">
                                                            <p class="mb-0 truncate">Williemae Lagasse</p>
                                                        </a>
                                                        <p class="text-muted mb-0 text-small">102 Commits</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dashboard-line-chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="contributionChart3" style="display: block; width: 833px; height: 283px;" class="chartjs-render-monitor" width="833" height="283"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="app-menu">
        <div class="p-4 h-100">
            <div class="scroll ps">
                <p class="text-muted text-small">Subir archivos del huesped.</p>
                <div class="card" style="border: none">
                    <form action="/file-upload">
                        <div class="dropzone dz-clickable">
                        <div class="dz-default dz-message"><span>Soltar archivos, para adjuntar.</span></div></div>
                    </form>
                </div>
<br>
                <p class="text-muted text-small">Categories</p>
            
                <ul class="list-unstyled mb-5">
                    <li class="active">
                        <a href="#">
                            <i class="simple-icon-refresh"></i>
                            Pending Tasks
                            <span class="float-right">12</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="simple-icon-check"></i>
                            Completed Tasks
                            <span class="float-right">24</span>

                        </a>
                    </li>
                </ul>




                <p class="text-muted text-small">Labels</p>
                <div>
                    <p class="d-sm-inline-block mb-1">
                        <a href="#">
                            <span class="badge badge-pill badge-outline-primary mb-1">NEW FRAMEWORK</span>
                        </a>
                    </p>

                    <p class="d-sm-inline-block mb-1">
                        <a href="#">
                            <span class="badge badge-pill badge-outline-theme-3 mb-1">EDUCATION</span>
                        </a>
                    </p>
                    <p class="d-sm-inline-block  mb-1">
                        <a href="#">
                            <span class="badge badge-pill badge-outline-secondary mb-1">PERSONAL</span>
                        </a>
                    </p>
                </div>

            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
        <a class="app-menu-button d-inline-block d-xl-none" href="#">
            <i class="simple-icon-options"></i>
        </a>
    </div>
</main>

@endsection
@push('scripts')
    <script src="{{ asset('js/datos/huesped/show.js') }}"></script>
    <script>
        $( document ).ready(function() {
            let razon=@json($razon_hotel->value);
            let id_hotel=@json($data->rel_hotel);
            $("#razon_social_hotel").val(razon);
        });
 
    //Funcion para cargar los hoteles al campo "select".
   
</script>
@endpush
