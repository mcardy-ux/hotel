@extends('layouts.app')

@section('content')


{{-- Inicio de Modal  Buscar Huesped--}}

<div class="modal fade modalGuests" id="modalGuests" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modulo Buscar Huesped</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Seleccione una opción</h5>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Busqueda" id="RadioIdHuesped" value="1">
                                    <label class="form-check-label" for="RadioIdHuesped">
                                        Buscar por Identificación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Busqueda" id="RadioNombreHuesped" value="2">
                                    <label class="form-check-label" for="RadioNombreHuesped">
                                        Buscar por Nombre Completo
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group position-relative error-l-75">
                                    <label>Parametro de Busqueda</label>
                                    <input type="text" class="form-control" name="parameterSearch" id="parameterSearch">
                                    <small class="form-text text-muted">Debe ingresar la informacion de forma clara y sin caracteres.</small>
                                </div>
                                <button type="button" id="searchGuest" name="searchGuest" class="btn btn-primary mb-0">Buscar</button>
                            </div>
                        </div>

                        <div class="row mb-12" id="TableList" style="display: none">
                            <div class="col-lg-12 col-md-12 mb-4">         
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <table id="TableListGuests" class="table" >
                                         
                                            <thead class="thead-light">
                                                <tr>

                                                    <th scope="col" >Mas Info.</th>
                                                    <th scope="col"></th>
                                                    <th scope="col" style="align:center">Identificación</th>
                                                    <th scope="col" style="align:center">Nombre Completo</th>
                                                    <th scope="col" style="align:center">Nacionalidad</th>
                                                    <th scope="col" style="align:center">Tipo de Huesped</th>
                                                    <th scope="col" style="align:center">Email</th>
                                                    <th scope="col" style="align:center">Celular</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TableBodyListGuests">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" id="buttonSelectGuest" style="display: none">      
                            <input type="button" class="btn btn-primary mb-0" id="selectGuest" value="Escoger Huesped">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div></div></div>

{{-- Inicio de Modal Buscar Agencia--}}
<div class="modal fade modalAgencia" id="modalAgencia" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modulo Buscar Agencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Seleccione una opción</h5>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="BusquedaAgencia" id="RadioIdAgencia" value="1">
                                    <label class="form-check-label" for="RadioIdAgencia">
                                        Buscar por Identificación
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="BusquedaAgencia" id="RadioNombreAgencia" value="2">
                                    <label class="form-check-label" for="RadioNombreAgencia">
                                        Buscar por Nombre Completo
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group position-relative error-l-75">
                                    <label>Parametro de Busqueda</label>
                                    <input type="text" class="form-control" name="parameterSearchAgencia" id="parameterSearchAgencia">
                                    <small class="form-text text-muted">Debe ingresar la información de forma clara y sin caracteres o digitos de verificación.</small>
                                </div>
                                <button type="button" id="searchAgencia" name="searchAgencia" class="btn btn-primary mb-0">Buscar</button>
                            </div>
                        </div>

                        <div class="row mb-12" id="TableListAgen" style="display: none">
                            <div class="col-lg-12 col-md-12 mb-4">         
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <table id="TableListAgencia" class="table" >
                                         
                                            <thead class="thead-light">
                                                <tr>

                                                    <th scope="col" >Mas Info.</th>
                                                    <th scope="col"></th>
                                                    <th scope="col" style="align:center">Identificación</th>
                                                    <th scope="col" style="align:center">Nombre Completo</th>
                                                    <th scope="col" style="align:center">Direccion</th>
                                                    <th scope="col" style="align:center">Email</th>
                                                    <th scope="col" style="align:center">Celular</th>
                                                    <th scope="col" style="align:center">Pagina Web</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TableBodyListAgencia">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" id="buttonSelectAgencia" style="display: none">      
                            <input type="button" class="btn btn-primary mb-0" id="selectAgencia" value="Escoger Agencia">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div></div></div>

{{-- Inicio de Modal Buscar Plan--}}

<div class="modal fade modalPlan" id="modalPlan" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modulo Buscar Plan Seleccionado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Seleccione una opción</h5>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="BusquedaPlan" id="RadioIdPlan" value="1">
                                    <label class="form-check-label" for="RadioIdPlan">
                                        Buscar por Codigo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="BusquedaPlan" id="RadioNombrePlan" value="2">
                                    <label class="form-check-label" for="RadioNombrePlan">
                                        Buscar por Nombre Completo
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group position-relative error-l-75">
                                    <label>Parametro de Busqueda</label>
                                    <input type="text" class="form-control" name="parameterSearchPlan" id="parameterSearchPlan">
                                    <small class="form-text text-muted">Debe ingresar la información de forma clara y sin caracteres.</small>
                                </div>
                                <button type="button" id="searchPlan" name="searchPlan" class="btn btn-primary mb-0">Buscar</button>
                            </div>
                        </div>

                        <div class="row mb-12" id="TableListPlanDiv" style="display: none">
                            <div class="col-lg-12 col-md-12 mb-4">         
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <table id="TableListPlan" class="table" >
                                         
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col" style="align:center">Codigo</th>
                                                    <th scope="col" style="align:center">Descripcion</th>
                                                    <th scope="col" style="align:center">Componentes</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TableBodyListPlan">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" id="buttonSelectPlan" style="display: none">      
                            <input type="button" class="btn btn-primary mb-0" id="selectPlan" value="Escoger Plan ">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div></div></div>

{{-- Inicio de Modal Buscar Habitaciones Disponibles --}}

<div class="modal fade modalSelHab" id="modalSelHab" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modulo Seleccionar Habitacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Seleccione una opción</h5>
                        

                        <div class="row mb-12" id="DivTableListHab" >
                            <div class="col-lg-12 col-md-12 mb-4">         
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <table id="TableListHab" class="table" >
                                         
                                            <thead class="thead-light">
                                                <tr>

                                                    <th scope="col" >Mas Info.</th>
                                                    <th scope="col"></th>
                                                    <th scope="col" style="align:center">Habitación</th>
                                                    <th scope="col" style="align:center">Capacidad</th>
                                                    <th scope="col" style="align:center">Sector</th>
                                                    <th scope="col" style="align:center">Tipo de Habitación</th>
                                                    <th scope="col" style="align:center">Hotel</th>
                                                </tr>
                                            </thead>
                                            <tbody id="TableBodyListHab">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" >      
                            <input type="button" class="btn btn-primary mb-0" id="selectHabitacion" value="Escoger Habitación">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<div></div></div>

{{-- Inicio de Pagina  --}}

        <main style="opacity: 1;" class="default-transition">
            <div class="container-fluid">
                <div class="row" id="card_sel_hotel">
                    <div class="col-12">
                        <div class="col-lg-12 col-md-12 mb-4">
                            <p>A continuación debe escoger el hotel deseado.</p>
                        </div>
                   
                        <div class="col-md-12 col-sm-12 col-lg-12 col-12 mb-4">
                            <div class="card ">
                                <div class="card-body">
                                    <div class="text-center">
                                    <i class="iconsminds-hotel large-icon"></i>
                                        <p class="list-item-heading mb-1">  Hoteles Disponibles</p>
                                        <div class="form-group" style="text-align:center;">
                                            <select class="custom-select col-sm-3" id="avaliable_hotels" name="avaliable_hotels" style="text-align:center;" required="">
                                                <option value="">Escoger Uno</option>
                                            </select>
                                        </div>
                                            <button type="button" class="btn btn-sm btn-outline-primary" id="selectHotel" name="selectHotel">Escoger</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row app-row" id="card_add_reserva_individuo" style="display: none;">
                    <div class="col-12">
                        <div class="mb-2">
                            <h1>Agregar Reserva Individual</h1>
    
                        </div>
    
                       
                        <div class="separator mb-5"></div>
    
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="top-right-button-container">
                                            <input type="button" class="btn btn-primary mb-1" id="label_razon_social"  disabled="" />
                                        </div>
                                        <h5 class="mb-4">Ingresa la información necesaria de la reserva.</h5>
                                        
                                        <br>


                                        <div class="card mb-4">
                                            <div id="smartWizardDot" class="sw-main sw-theme-dots">
                                                <ul class="card-header nav nav-tabs step-anchor">
                                                    <li class="nav-item active"><a href="#dotStep1" class="nav-link">Paso 1<br><small>Escoger Huesped</small></a></li>
                                                    <li class="nav-item"><a href="#dotStep2" class="nav-link">Paso 2<br><small>Escoger Ubiación y Tarifa</small></a></li>
                                                    <li class="nav-item"><a href="#dotStep3" class="nav-link">Paso 3<br><small>Finalización</small></a></li>
                                                </ul>
                    
                                                <div class="card-body sw-container tab-content" style="min-height: 97.5167px;">
                                                    <div id="dotStep1" class="tab-pane step-content" style="display: block;">
                                                        <form role="form" id="add_reserva_individuo" name="add_reserva_individuo" >
                                                            <input type="hidden" id="_url" value="{{ url('reserva_individuo') }}">
                                                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" id="_hotel" value="">
                                                            <input type="hidden" id="_guest" value="">
                                                            
                                                           <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="medio_reserva">Medio de Reserva:</label>
                                                                    <select id="medio_reserva" name="medio_reserva" class="form-control">
                                                                        <option value="">Escoger Uno</option>
                                                                        <option value="">Pagina Web</option>
                                                                        <option value="">Carta</option>
                                                                        <option value="">Redes Sociales</option>
                                                                        <option value="">Telefono</option>
                                                                        <option value="">Otro</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="lugar_exp">Contacto de Registro</label>
                                                                    <input type="text" class="form-control" id="contacto_empleado" name="contacto_empleado" value="{{Auth::user()->name}}" disabled> 
                                                                </div>
                                                            </div>
                                                            <div class="separator mb-5"></div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-3">
                                                                    <button type="button" class="btn btn-outline-primary mb-2" id="search_Guest" >
                                                                        Buscar un Huesped</button>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="show_tipo_doc">Tipo de Documento
                                                                    </label>
                                                                        <select id="show_tipo_doc" name="show_tipo_doc" class="form-control" readonly disabled>
                                                                            <option value="">-</option>
                                                                        </select>
                                                                    
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="show_identificacion">Numero de Identificación
                                                                    </label>
                                                                    <input type="text" class="form-control" id="show_identificacion" name="show_identificacion" placeholder="-" readonly disabled/>
                                                                </div>
                                                                
                                                                <div class="form-group col-md-3">
                                                                    <label for="show_tipo_huesped">Tipo de Huesped</label>
                                                                    <select id="show_tipo_huesped" name="show_tipo_huesped" class="form-control" readonly disabled>
                                                                        <option value="">-</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="show_primer_nombre">Nombre Completo 
                                                                    </label>
                                                                    <input type="text" class="form-control" id="show_primer_nombre" name="show_primer_nombre" placeholder="-" readonly disabled>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="show_genero">Genero </label>
                                                                    <select id="show_genero" name="show_genero" class="form-control" readonly disabled>
                                                                        <option value="">-</option>
                                                                        <option value="masculino">masculino</option>
                                                                        <option value="femenino">femenino</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                   <label for="show_telefono">Telefono</label>
                                                                   <input type="text" class="form-control" id="show_telefono" name="show_telefono" placeholder="-" readonly disabled/>
                                                               </div>
                                                               <div class="form-group col-md-4">
                                                                   <label for="show_celular">Celular</label>
                                                                   <input type="text" class="form-control" id="show_celular" name="show_celular" placeholder="-" readonly disabled/>
                                                               </div>
                                                               <div class="form-group col-md-4">
                                                                   <label for="show_email">Email</label>
                                                                   <input type="text" class="form-control" id="show_email" name="show_email" placeholder="-" readonly disabled/>
                                                               </div>
                                                           </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="show_direccion">Dirección</label>
                                                                    <input type="text" class="form-control" id="show_direccion" name="show_direccion" placeholder="-" readonly disabled/>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="show_nacionalidad">Nacionalidad</label>
                                                                    <select id="show_nacionalidad" name="show_nacionalidad" class="form-control" readonly disabled>
                                                                        <option value="">-</option>  
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="show_ciudad">Ciudad</label>
                                                                    <input type="text" class="form-control" id="show_ciudad" name="show_ciudad" placeholder="-" readonly disabled/>
                                                                </div>
                                                            </div>
                                                           
                                                        </form>
                                                    </div>

                                                    {{-- Menu Paso dos 2 --}}

                                                    <div id="dotStep2" class="tab-pane step-content">
                                                        
                                                        
                                                        <form role="form" id="add_reserva_individuo_two" name="add_reserva_individuo_two" >
                                                            <input type="hidden" id="_url" value="{{ url('reserva_individuo') }}">
                                                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" id="_agencia" value="">
                                                            <input type="hidden" id="_plan" value="">

                                                            <h6>Información general del Huesped:</h6>
                                                            <div class="separator mb-5"></div>
                                                            <br>
                                                           <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="agencia_reserva">  <button type="button" class="btn " data-toggle="modal" data-target=".modalAgencia">
                                                                        <div class="glyph-icon iconsminds-target"></div></button>Agencia</label>
                                                                        <input type="text" class="form-control" id="agencia_reserva" name="agencia_reserva" disabled>           
                                                                </div>
                                                                <div class="form-group col-md-6"> 
                                                                    <label for="tipo_plan"><button type="button" class="btn " data-toggle="modal" data-target=".modalPlan">
                                                                    <div class="glyph-icon iconsminds-target"></div></button>Cambiar Plan</label>
                                                                    <input type="text" class="form-control" id="tipo_plan" name="tipo_plan" disabled> 
                                                                </div>
                                                            </div>
                                                            <div class=" mb-5"></div>
                                                            <h6>Información de la Habitación:</h6>
                                                            <div class="separator mb-5"></div>
                                                            <br>
                                                            
                                                           {{-- Tipo de Habitación --}}
                                                            <div class="form-row">
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label for="tipo_hab_reserva">Tipo de Habitación<span style="color:red">*</span>
                                                                    </label>
                                                                        <select id="tipo_hab_reserva" name="tipo_hab_reserva" class="form-control" readonly>
                                                                            <option value="">Seleccionar</option>
                                                                        </select>
                                                                        <small class="form-text text-muted" id="warning_price_tipo" style="color:red !important">Debes seleccionar el Tipo de Habitación</small>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="acomodacion_reserva">Acomodación<span style="color:red">*</span>
                                                                    </label>
                                                                    <select id="acomodacion_reserva" name="acomodacion_reserva" class="form-control" readonly>
                                                                        <option value="">Seleccionar</option>
                                                                    </select>
                                                                    <small class="form-text text-muted" id="warning_price_acomd" style="color:red !important">Debes seleccionar la acomodación</small>
                                                                </div>
                                                                
                                                            </div>

                                                            
                                                           {{-- Cantidad de Huespedes y de Habitación --}}
                                                            <div class="form-row">

                                                                <div class="form-group col-md-3 position-relative error-l-50">
                                                                    <label>Cantidad Habitaciones</label>
                                                                    <input type="number" class="form-control error" required="" value="0" id="cant_hab_reserva" name="cant_hab_reserva" >
                                                                    <small class="form-text text-muted" id="warning_can_hab"  style="color:red !important">Debes seleccionar la Cantidad de Habitaciones</small>
                                                                </div>
                                                                <div class="form-group col-md-3 position-relative error-l-50">
                                                                    <label>Cantidad Adultos</label>
                                                                    <input type="number" class="form-control error" required="" value="0" id="cant_adul_reserva" name="cant_adul_reserva" >
                                                                </div>
                                                                <div class="form-group col-md-3 position-relative error-l-50">
                                                                    <label>Cantidad Niños</label>
                                                                    <input type="number" class="form-control error" required="" value="0" id="cant_child_reserva" name="cant_child_reserva" >
                                                                </div>
                                                                <div class="form-group col-md-3 position-relative error-l-50">
                                                                    <label>Cantidad Adicional</label>
                                                                    <input type="number" class="form-control error" required="" value="0" id="cant_adic_reserva" name="cant_adic_reserva" >
                                                                </div>
                                                               
                                                            </div>
                                                           {{-- Fechas de la reservacion --}}
                                                             <div class="form-row">
                                                                <div class="form-group col-md-8 mb-3">
                                                                        <label>Establecer fechas</label>
                                                                        <div class="input-daterange input-group" id="datepicker">
                                                                            <input type="text" class="input-sm form-control" id="start" name="start" placeholder="Fecha de Llegada">
                                                                            <span class="input-group-addon"></span>
                                                                            <input type="text" class="input-sm form-control" id="end" name="end" placeholder="Fecha de Salida">
                                                                        </div>
                                                                        <small class="form-text text-muted" id="warning_price_fecha"  style="color:red !important">Debes seleccionar la Fecha correspondiente</small>

                                                                    </div>
                                                                    <div class="form-group col-md-2">
                                                                    <label for="dias_reserva">Dias <span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" id="dias_reserva" name="dias_reserva" readonly>
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label for="noches_reserva">Noches</label>
                                                                    <input type="text" class="form-control" id="noches_reserva" name="noches_reserva" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="valor_hab">Valor  Habitación<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" id="valor_hab" name="valor_hab" readonly disabled>                                                             
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="valor_add">Valor Adicional<span style="color:red">*</span></label>
                                                                    <input type="text" class="form-control" id="valor_add" name="valor_add" >
                                                                </div>
                                                                <div class="form-group col-md-3">
                                                                    <label for="valor_child">Valor Niño</label>
                                                                    <input type="text" class="form-control" id="valor_child" name="valor_child" >
                                                                </div>
                                                            </div>
                                                           
                                                        </form>


                                                    </div>
                                                    <div id="dotStep3" class="tab-pane step-content">

                                                        <form role="form" id="add_reserva_individuo_three" name="add_reserva_individuo_three" >
                                                            <input type="hidden" id="_url" value="{{ url('reserva_individuo') }}">
                                                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" id="_hab" value="">

                                                            <h4 class="pb-2">Seleccionar Habitacion(es)</h4>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="sel_habitacion">  <button type="button" class="btn " id="FindHab">
                                                                        <div class="glyph-icon iconsminds-target"></div></button>Habitaciones</label>
                                                                        <input type="text" class="form-control" id="sel_habitacion" name="sel_habitacion" disabled>           
                                                                </div>
                                                            </div>

                                                        </form>

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
            </div>
    
            {{-- Modal Quick operation for create guests --}}
            <div class="modal fade modal-right" id="ModalCreateGuest" tabindex="-1" role="dialog" aria-labelledby="ModalCreateGuest" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregar nuevo Huesped</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form role="form" id="add_huesped" name="add_huesped" >
                                <input type="hidden" id="_url" value="{{ url('huespedes') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="rel_hotel" name="rel_hotel"  value="{{ csrf_token() }}">
                                <input type="hidden" id="validacion_registro" name="validacion_registro" value="true">
                                <div class="form-group 6" >
                                    <label for="tipo_doc">Tipo de Documento</label>
                                    <select id="tipo_doc" name="tipo_doc" class="form-control">
                                            <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group 6" >
                                    <label for="numero_doc">Numero de documento: <span style="color:red">*</span></label>
                                    <input type="number" class="form-control" min="1" id="numero_doc" name="numero_doc">
                                </div>
                                <div class="form-group">
                                    <label for="lugar_exp">Lugar de Expedición</label>
                                    <select id="lugar_exp" name="lugar_exp" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ciudad_exp">Ciudad de Expedición:</label>
                                    <select id="ciudad_exp" name="ciudad_exp" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                    <input class="form-control datepicker" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="primer_nombre">Primer Nombre <span style="color:red">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="segundo_nombre">Segundo Nombre </label>
                                    <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="primer_apellido">Primer Apellido <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="primer_apellido" name="primer_apellido"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="segundo_apellido">Segundo Apellido </label>
                                    <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="genero">Genero <span style="color:red">*</span></label>
                                    <select id="genero" name="genero" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="masculino">masculino</option>
                                        <option value="femenino">femenino</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="direccion">Dirección <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="direccion" name="direccion"
                                    aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Telefono </label>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="celular">Celular<span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="celular" name="celular"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group">
                                    <label for="nacionalidad">Nacionalidad</label>
                                    <select id="nacionalidad" name="nacionalidad" class="form-control">
                                        <option value="">SELECCIONAR</option>  
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                    <select id="ciudad" name="ciudad" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tipo_huesped">Tipo de Huesped <span style="color:red">*</span></label>
                                    <select id="tipo_huesped" name="tipo_huesped" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tarifa">Tarifa <span style="color:red">*</span></label>
                                    <select id="tarifa" name="tarifa" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="forma_pago">Forma de Pago <span style="color:red">*</span></label>
                                    <select id="forma_pago" name="forma_pago" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal--}}

            {{-- Inicio de Barra Lateral de Accesos directos --}}
            <div class="app-menu" id="card_barra_lateral" style="display: none;">
                <div class="p-4 h-100">
                    <div class="scroll ps">
                        <p class=" text-small">Accesos Directos</p>
                        <div>
                            <p class="d-sm-inline-block mb-1">
                                <button type="button" class="badge badge-pill badge-outline-primary mb-1" data-toggle="modal" data-backdrop="static" data-target="#ModalCreateGuest">CREAR HUESPED</button>
                            </p>
    
                            <p class="d-sm-inline-block mb-1">
                                <a href="#">
                                    <span class="badge badge-pill badge-outline-theme-3 mb-1">VER TARFIAS</span>
                                </a>
                            </p>
                            <p class="d-sm-inline-block  mb-1">
                                <a href="#">
                                    <span class="badge badge-pill badge-outline-secondary mb-1">VER PLANES</span>
                                </a>
                            </p>
                        </div>
                        <p class=" text-medium">Información Reserva</p>
                        
                        <div>
                            <img alt="thumb" class="img-thumbnail border-0 rounded-circle mb-4 list-thumbnail mx-auto" id="picture_Hotel">
                            <p style="font-size: .55rem;" class="mb-3" id="label_nombre_hotel"></p>
                            <h6 class="mb-0 font-weight-semibold color-theme-1 mb-3">Datos Huesped - Reserva</h6>
                            <p style="font-size: .55rem;" class="mb-3" id="label_nombre_mostrar"></p>
                            <br>
                            <p class="mb-3" style="font-size: .55rem;"  id="label_tipo_huesped_mostrar"></p>
                            <p class="mb-3" style="font-size: .55rem;"  id="label_tarifa_mostrar"></p>
                            <p class="mb-3" style="font-size: .55rem;"  id="label_forma_pago"></p>
                            <p class="mb-3" style="font-size: .55rem;"  id="label_plan_actual"></p>
                            
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
<script src="{{ asset('js/datos/reserva_individuo/create.js') }}"></script>

<script>
    window.addEventListener("load", function() {
        cargarTipoDocs();
        cargarTipoCliente();
        cargarPaises();
        cargarTipoHabitaciones();
        cargarAcomodaciones();
        cargarTarifa();
        cargarFormaPago();
}, false);

//Funcion para cargar los hoteles al campo "select".
function cargarHoteles() {

   //Inicializamos el array.
   var array = @json($avaliable_hotels);
   //Ordena el array alfabeticamente.
   //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
   addOptions("avaliable_hotels", array);
}
function cargarTipoDocs() {

   //Inicializamos el array.
   var tipo_docs = @json($tipo_docs);
   //Ordena el array alfabeticamente.
   if(tipo_docs.length==0)
   {
       alert("No esta configurado el tipo de documento");
   }else{
   //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
   addOptionsConcat("show_tipo_doc", tipo_docs);
   addOptionsConcat("tipo_doc", tipo_docs);
   }
}
function cargarTipoCliente() {
   //Inicializamos el array.
   var tipoCliente = @json($tipoCliente);
   //Ordena el array alfabeticamente.
   if(tipoCliente.length==0)
   {
       alert("No esta configurado el tipo de huesped");
   }else{
   //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
   addOptionsConcat("show_tipo_huesped", tipoCliente);
   addOptionsConcat("tipo_huesped", tipoCliente);
   
   }
}
function cargarPaises() {
   //Inicializamos el array.
   var paises = @json($paises);
   //Ordena el array alfabeticamente.
   if(paises.length==0)
   {
       alert("No estan configurados los paises");
   }else{
   //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
   addOptions("show_nacionalidad", paises);
   addOptions("nacionalidad", paises);
   addOptions("lugar_exp", paises);
   }
}
function cargarCiudades(data,options) {
   if(data.length==0)
   {
       alert("No estan configurados los paises");
   }else{
   //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
   addOptions(options, data);
   }
}

function cargarTipoHabitaciones(){
       //Inicializamos el array.
   var tipos_Hab = @json($tiposHabitaciones);
   //Ordena el array alfabeticamente.
   if(tipos_Hab.length==0)
   {
       alert("No estan configurados los tipos de habitaciones");
   }else{
   //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
   addOptions("tipo_hab_reserva", tipos_Hab);
   }
}
function cargarAcomodaciones(){
    var Acomodaciones = @json($acomodaciones);
   //Ordena el array alfabeticamente.
   if(Acomodaciones.length==0)
   {
       alert("No estan configurados las clases de Acomodación");
   }else{
   //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
   addOptions("acomodacion_reserva", Acomodaciones);
   }
}

function cargarTarifa() {
        //Inicializamos el array.
        var regimenes = @json($regimenes);
        //Ordena el array alfabeticamente.
        if(regimenes.length==0)
        {
            alert("No esta configurado los regimenes");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("tarifa", regimenes);
        }
    }
    function cargarFormaPago() {
        //Inicializamos el array.
        var formaPago = @json($formaPago);
        //Ordena el array alfabeticamente.
        if(formaPago.length==0)
        {
            alert("No esta configurado la forma de pago");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("forma_pago", formaPago);
        }
    }
    $("#lugar_exp").change(function(){
        let num=$(this).val();
        RemoveOptions("ciudad_exp");
        $.ajax({
            url: $('#add_huesped #_url').val()+"/request/citiesEstado/"+num,
            headers: {'X-CSRF-TOKEN': $('#add_huesped #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
                cargarCiudades(response,"ciudad_exp");
            }
        });
    });

    $("#nacionalidad").change(function(){
    let num=$(this).val();
    RemoveOptions("ciudad");
    $.ajax({
        url: $('#add_huesped #_url').val()+"/request/citiesEstado/"+num,
        headers: {'X-CSRF-TOKEN': $('#add_huesped #_token').val()},
        type: 'GET',
        cache: false,
        success: function (response) {
            cargarCiudades(response,"ciudad");
        }
    });
    });

//Funcion para listar la tabla segun la opcione escogida y el parametro dado
function ListGuest(typeSearch,parameter,hotel){
    let data=[typeSearch,parameter,hotel];
    
    let e="{{ route('ajax.ruta.showGuests')}}/"+data;
            let table=$('#TableListGuests').DataTable({
                "paging": false,
                "searching": false,
                
                "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "order": [[ 0, "asc" ]],
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax": e,
                "columns":[
                {"data":"empty",orderable:false, searchable:false },
                { "data": "actions",orderable:false, searchable:false },
                {"data":"idNumber"},
                {"data":"fullName"},
                {"data":"nationality"},
                {"data":"typeGuest"},
                {"data":"email",orderable:false, searchable:false },
                {"data":"celular",orderable:false, searchable:false },
                ],
            });
}


//Funcion para listar la tabla segun la opcione escogida y el parametro dado
function ListAgencia(typeSearch,parameter){
    let data=[typeSearch,parameter];
    
    let e="{{ route('ajax.ruta.showAgencia')}}/"+data;
            let table=$('#TableListAgencia').DataTable({
                "paging": false,
                "searching": false,
                
                "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "order": [[ 0, "asc" ]],
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax": e,
                "columns":[
                {"data":"empty",orderable:false, searchable:false },
                { "data": "actions",orderable:false, searchable:false },
                {"data":"idNumber"},
                {"data":"nombre"},
                {"data":"direccion"},
                {"data":"email"},
                {"data":"celular",orderable:false, searchable:false },
                {"data":"paginaWeb",orderable:false, searchable:false },
                ],
            });
}

//Funcion para listar la tabla segun la opcione escogida y el parametro dado
function ListPlan(typeSearch,parameter){
    let data=[typeSearch,parameter];
    
    let e="{{ route('ajax.ruta.showPlan')}}/"+data;
            let table=$('#TableListPlan').DataTable({
                "paging": false,
                "searching": false,
                
                "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "order": [[ 0, "asc" ]],
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax": e,
                "columns":[
                { "data": "actions",orderable:false, searchable:false },
                {"data":"codigo"},
                {"data":"descripcion"},
                {"data":"Components"},
                ],
            });
}

$(document).ready(function(){

let cantHoteles=@json($count_Hotel);
let razon_hotel=@json($avaliable_hotels);
if(cantHoteles==1){
   $('#card_sel_hotel').hide();
   $('#card_add_reserva_individuo').show();
   $('#card_barra_lateral').show();
   $("#_hotel").val(razon_hotel[0].id);
   $("#rel_hotel").val(razon_hotel[0].id);
   $("#label_razon_social").val(razon_hotel[0].value);
}else{
   $('#card_sel_hotel').show();
   $('#card_add_reserva_individuo').hide();
   $('#card_barra_lateral').hide();
   cargarHoteles(event);
}
$("#warning_price_tipo").hide();
$("#warning_price_acomd").hide();
$("#warning_price_fecha").hide();
$("#warning_can_hab").hide();

$("#selectHotel").click(function(){

            let razon_hoteles=@json($avaliable_hotels);

            let idHotel=$("#avaliable_hotels").val();
            if(idHotel!=""){
                let razon_social="";
                razon_hoteles.forEach(element => {
                element.id == idHotel ? razon_social=element.value : element.id ;
                });
                $('#card_sel_hotel').hide();
                $('#card_add_reserva_individuo').show();
                $('#card_barra_lateral').show();
                $("#_hotel").val(idHotel);
                $("#rel_hotel").val(idHotel);
                $("#label_razon_social").val(razon_social);
            }
        });

//
//Boton para escoger el tipo de buesqueda por identificacion o nombre
//

$("#searchGuest").click(function(){
 
        $('#TableListGuests').DataTable().destroy();
        $('#TableList').show();
        $('#buttonSelectGuest').show();
        let id_hotel=$("#_hotel").val();
        $('[name="Busqueda"]:checked').each(function () {
                let typeSearch=$(this).val();
                let parameter=document.getElementById("parameterSearch").value;
                if (parameter!="") {
                    ListGuest(typeSearch,parameter,id_hotel);
                }
        });
});

$("#search_Guest").click(function(e){
    let value=$("#_hotel").val();
    if(value==""){
        alert("Debe escoger un hotel");
        $("#modalGuests").modal('hide');
        document.getElementById("modalGuests").style.display="none";
    }else{
        $("#modalGuests").modal('show');
        document.getElementById("modalGuests").style.display="block";
    }
});

$("#selectGuest").click(function(){
    let guestSelected = document.querySelector('input[name="Huespedes"]:checked').value;
   
    $("#parameterSearch").val("");
    $('#TableListGuests').DataTable().destroy();
    $("#TableBodyListGuests tr").remove(); 
    $("#modalGuests").modal('hide');
    $.ajax({
            url: $('#add_reserva_individuo #_url').val()+"/findGuest/"+guestSelected,
            headers: {'X-CSRF-TOKEN': $('#add_reserva_individuo #_token').val()},
            type: 'GET',
            cache: false,
            data: guestSelected,
            success: function (response) {
                document.getElementById("show_tipo_doc").value=response.tipo_doc;
                document.getElementById("show_identificacion").value=response.numero_doc;
                document.getElementById("show_tipo_huesped").value=response.tipo_huesped;
                let nombre=function (response){
                    let primer_nombre = response.primer_nombre == null ? '': response.primer_nombre + ' ' ;
                    let segundo_nombre =response.segundo_nombre == null ? '': response.segundo_nombre + ' ';
                    let primer_apellido = response.primer_apellido == null ? '' : response.primer_apellido + ' ';
                    let segundo_apellido = response.segundo_apellido == null ? '' : response.segundo_apellido + ' ';
                    return primer_nombre+segundo_nombre+primer_apellido+segundo_apellido;
                }
                document.getElementById("show_primer_nombre").value= nombre(response);
                document.getElementById("show_genero").value=response.genero;
                document.getElementById("show_telefono").value=response.telefono;
                document.getElementById("show_celular").value=response.celular;
                document.getElementById("show_email").value=response.email;
                document.getElementById("show_direccion").value=response.direccion;
                document.getElementById("show_nacionalidad").value=response.nacionalidad;
                document.getElementById("show_ciudad").value=response.ciudad;

            }
        });
        $.ajax({
            url: $('#add_reserva_individuo #_url').val()+"/findFullDataGuest/"+guestSelected,
            headers: {'X-CSRF-TOKEN': $('#add_reserva_individuo #_token').val()},
            type: 'GET',
            cache: false,
            data: guestSelected,
            success: function (response) {
                console.log(response[9]);
                // Visor de Informacion General
                $("#picture_Hotel").attr("src", '{{ URL::asset('/storage/logos/')}}/'+response[7].logo);
                document.getElementById("label_nombre_hotel").innerHTML=response[7].razonComercial;
                document.getElementById("label_nombre_mostrar").innerHTML=response[1].value+"<br>"+response[0].value+"<br>"+response[2].value+"<br>"+response[3].value;
                document.getElementById("label_tipo_huesped_mostrar").innerHTML="<strong>TIPO DE HUESPED:</strong> <BR>"+response[4].value;
                document.getElementById("label_forma_pago").innerHTML="<strong>FORMA DE PAGO:</strong> <BR>"+response[6].value;
                document.getElementById("label_plan_actual").innerHTML="<strong>PLAN PREDEFINIDO:</strong> <BR>"+response[5].value;
                document.getElementById("tipo_plan").value=response[8].value;
                document.getElementById("_plan").value=response[9].tarifa;
                

            }
        });
});

//
//Boton para escoger el tipo de buesqueda por identificacion o nombre
//

    $("#searchAgencia").click(function(){
        
        $('#TableListAgencia').DataTable().destroy();
        $('#TableListAgen').show();
        $('#buttonSelectAgencia').show();
        $('[name="BusquedaAgencia"]:checked').each(function () {
                let typeSearch=$(this).val();
                let parameter=document.getElementById("parameterSearchAgencia").value;
                ListAgencia(typeSearch,parameter);
        });
    });

    $("#agencia_reserva").click(function(e){
        let value=$("#_hotel").val();
        if(value==""){
        alert("Debe escoger un hotel");
        $("#modalAgencia").modal('hide');
        document.getElementById("modalAgencia").style.display="none";
        }else{
        $("#modalAgencia").modal('show');
        document.getElementById("modalAgencia").style.display="block";
        }
    });

    $("#selectAgencia").click(function(){
    let AgenciaSelected = document.querySelector('input[name="Agencia"]:checked').value;

    $("#parameterSearchAgencia").val("");
    $('#TableListAgencia').DataTable().destroy();
    $("#TableBodyListAgencia tr").remove(); 
    $("#modalAgencia").modal('hide');
        $.ajax({
            url: $('#add_reserva_individuo #_url').val()+"/findAgencia/"+AgenciaSelected,
            headers: {'X-CSRF-TOKEN': $('#add_reserva_individuo #_token').val()},
            type: 'GET',
            cache: false,
            data: AgenciaSelected,
            success: function (response) {
                document.getElementById("_agencia").value=response.id;  
                document.getElementById("agencia_reserva").value=response.nombre;
            }
        });
    });

    function calcularDias(){
        let start=document.getElementById("start").value;
       let end=document.getElementById("end").value;
        start = new Date(start);
        end = new Date(end);
        let diffTime = Math.abs(end - start);
        let diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
        return diffDays;
    }
    $("#start").change(function(){
       diffDays=calcularDias();
        $("#dias_reserva").val(diffDays+1);
        $("#noches_reserva").val(diffDays);
    });
    $("#end").change(function(){
       diffDays=calcularDias();
        $("#dias_reserva").val(diffDays+1);
        $("#noches_reserva").val(diffDays);
    });

//
//Boton para escoger el tipo de plan por codigo o descripción
//


    $("#searchPlan").click(function(){
        
        $('#TableListPlan').DataTable().destroy();
        $('#TableListPlanDiv').show();
        $('#buttonSelectPlan').show();
        $('[name="BusquedaPlan"]:checked').each(function () {
                let typeSearch=$(this).val();
                let parameter=document.getElementById("parameterSearchPlan").value;
                if (parameter!="") {
                    ListPlan(typeSearch,parameter)
                }
        });
    });

    $("#tipo_plan").click(function(e){
        let value=$("#_hotel").val();
        if(value==""){
        alert("Debe escoger un hotel");
        $("#modalPlan").modal('hide');
            document.getElementById("modalPlan").style.display="none";
        }else{
            $("#modalPlan").modal('show');
            document.getElementById("modalPlan").style.display="block";
        }
    });

    $("#tipo_hab_reserva").click(function(e){
        CalculateValue();
    });
    $("#acomodacion_reserva").click(function(e){
        CalculateValue();
    });
    $("#start").click(function(e){
        CalculateValue();
    });
    $("#end").click(function(e){
        CalculateValue();
    });
    

//Metodo que aplica la seleccion del plan y lo cambia en el lable
//Pendiente si cambia en la tabla principal de huespedes
    $("#selectPlan").click(function(){
    let PlanSelected = document.querySelector('input[name="Plan"]:checked').value;

        $("#parameterSearchPlan").val("");
        $('#TableListPlan').DataTable().destroy();
        $("#TableBodyListPlan tr").remove(); 
        $("#modalPlan").modal('hide');
        $.ajax({
            url: $('#add_reserva_individuo #_url').val()+"/findPlan/"+PlanSelected,
            headers: {'X-CSRF-TOKEN': $('#add_reserva_individuo #_token').val()},
            type: 'GET',
            cache: false,
            data: PlanSelected,
            success: function (response) {
            
                document.getElementById("_plan").value=response.id;    
                document.getElementById("label_tarifa_mostrar").innerHTML= `<strong>PLAN APLICADO:</strong> <BR> ${response.descripcion}`;            
                document.getElementById("tipo_plan").value=response.codigo+" - "+response.descripcion;
            }
        });

    });

    function CalculateValue(){
        let start=document.getElementById("start").value;
        let date_start=new Date(start);
        let day_start=date_start.getDate();
        let month_start=date_start.getMonth()+1;
        let year_start=date_start.getFullYear();

        let tipo_hab=document.getElementById("tipo_hab_reserva").value;
        let acomodacion=document.getElementById("acomodacion_reserva").value;
        let hotel=document.getElementById("_hotel").value;
        let cant_hab_reserva=document.getElementById("cant_hab_reserva").value;
        //Parametros para Calculo de Habitacion

        let arraytDate =[day_start,month_start,year_start,tipo_hab,acomodacion,hotel];
        if(start != "" && tipo_hab != "" &&  acomodacion != "" &&  hotel != "" && cant_hab_reserva != ""){
            $("#warning_price_tipo").hide();
            $("#warning_price_acomd").hide();
            $("#warning_price_fecha").hide();
            $("#warning_can_hab").hide();
            AjaxCalculateValue(arraytDate);
        }else{
            $("#warning_price_tipo").show();
            $("#warning_price_acomd").show();
            $("#warning_price_fecha").show();
            $("#warning_can_hab").show();
        }
    }

    function AjaxCalculateValue(arraytDate){
        document.getElementById("valor_hab").value="";
        $.ajax({
                url: $('#add_reserva_individuo #_url').val()+"/calculateValue/"+arraytDate,
                headers: {'X-CSRF-TOKEN': $('#add_reserva_individuo #_token').val()},
                type: 'GET',
                cache: false,
                data: arraytDate,
                success: function (response) {
                    if(response[0]){
                        document.getElementById("valor_hab").value=response[1];
                    }else{
                        document.getElementById("valor_hab").value=response[1];
                    }
            
                    
                }
            });
    }

    //
//Boton para escoger la habitacion disponible
//

function ExistenDatosBuscarHab(id_hotel,id_plan,tipo_hab){


    if(id_hotel !="" && id_plan !="" && tipo_hab != ""){
        return true;
    }else{
        return false;
    } 
}
$("#FindHab").click(function(){
    let id_hotel= $("#_hotel").val();
    let id_plan= $("#_plan").val();
    let tipo_hab= $("#tipo_hab_reserva").val();
    
    if(ExistenDatosBuscarHab(id_hotel,id_plan,tipo_hab)){
        
        $('#modalSelHab').modal('show');
        $('#modalSelHab').show();
        ListHabitaciones(id_hotel,tipo_hab);
    }else{
        alert("No esta establecido el hotel o el tipo de habitación, Recargue la pagina");
        $('#modalSelHab').modal('hide');
        $('#modalSelHab').hide();
    }
        
    });

});
function ListHabitaciones(hotel,plan){
    let data=[hotel,plan];
    
    let e="{{ route('ajax.ruta.showHabs')}}/"+data;
            let table=$('#TableListHab').DataTable({
                "paging": false,
                "searching": false,
                
                "language": {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "order": [[ 0, "asc" ]],
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax": e,
                "columns":[
                {"data":"empty",orderable:false, searchable:false },
                { "data": "actions",orderable:false, searchable:false },
                {"data":"num_habitacion"},
                {"data":"capacity"},
                {"data":"sector"},
                {"data":"tipo",orderable:false, searchable:false},
                {"data":"razonComercial",orderable:false, searchable:false },
                ],
            });
}

$("#selectHabitacion").click(function(){
    let HabitacionSelected = document.querySelector('input[name="Habitaciones"]:checked').value;
    console.log(HabitacionSelected);
    $('#TableListHab').DataTable().destroy();
    $("#TableListHab tr").remove(); 
    $("#modalSelHab").modal('hide');
        $.ajax({
            url: $('#add_reserva_individuo_three #_url').val()+"/findHabitacion/"+HabitacionSelected,
            headers: {'X-CSRF-TOKEN': $('#add_reserva_individuo #_token').val()},
            type: 'GET',
            cache: false,
            data: HabitacionSelected,
            success: function (response) {
                console.log(response);
                document.getElementById("_hab").value=response.id;  
                document.getElementById("sel_habitacion").value='Habitacion '+response.num_habitacion;
            }
        });
    });
selectHabitacion
</script>
@endpush