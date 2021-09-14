
@extends('layouts.appIni')

@section('content')
<main style="opacity: 1;" class="default-transition">
    <div class="container-fluid">
        <div class="row app-row">
            <div class="col-12 chat-app">
               
                {{-- Inicio de contenido --}}

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>Temporada</h1>
                            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                                <ol class="breadcrumb pt-0">
                                    <li class="breadcrumb-item">
                                        <a href="/dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Listado</li>
                                </ol>
                            </nav>
                            <div class="separator mb-5"></div>
                            <form id="index_temporada" name="index_temporada">
                                <input type="hidden" id="_url" value="{{ url('') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                 
                
                
                
                        <div class="row" >
                            <div class="col-12 col-md-12 col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <br><br>
                                            @php
                                            $i=0;  
                                            
                                            $mes_text = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];  
                                            @endphp
                                                @for ($i = 0; $i < 12; $i++)
                                                    <div class="col-md-3 col-sm-6 col-xs-12 mb-3">
                                                        <div class="card dashboard-filled-line-chart">
                                                            <div class="card-body ">
                                                                <div class="float-left float-none-xs">
                                                                    <div class="d-inline-block">
                                                                        <h5 class="d-inline">{{$mes_text[$i]}}</h5>
                                                                        
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="chart card-body pt-0">
                                                                
                                                                <div class="tabla_mes{{$i}}" id="tabla_mes{{$i}}"  name="tabla_mes{{$i}}"  style="font-size:16px;display: flex;justify-content: center;" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                                
                                            </div>
                
                                        </div>
                
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                </div>

                {{-- Fin de contenido --}}
            </div>
        </div>
    </div>

    <div class="app-menu">
        <ul class="nav nav-tabs card-header-tabs ml-0 mr-0 mb-1" role="tablist">
            <li class="nav-item w-50 text-center">
                <a class="nav-link active" id="first-tab" data-toggle="tab" href="#firstFull" role="tab" aria-selected="true">Configurar Calendario</a>
            </li>
        </ul>

        <div class="p-4 h-100">
            <div class="tab-content h-100">
                <div class="tab-pane fade h-100 active show" id="firstFull" role="tabpanel" aria-labelledby="first-tab">

                    <div class="scroll ps">
                       
                        <div class="tab-content h-100">
                            <div class="form-group mb-3">
                                <p class="text-muted text-small">Rango de Fechas</p>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="start"   id="datepickerStart" name="datepickerStart" placeholder="Fecha de Inicio de Temporada">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="input-sm form-control" name="end" id="datepickerEnd" name="datepickerEnd" placeholder="Fecha de Fin de Temporada">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <p class="text-muted text-small">Tipo de Temporada</p>


                                <div class="input-group">
                                    <select class="custom-select" id="tipoTemporada" name="tipoTemporada">
                                        <option selected="">Seleccione...</option>
                                        <option value="E">Especial</option>
                                        <option value="A">Alta</option>
                                        <option value="M">Media</option>
                                        <option value="B">Baja</option>
                                        <option value="F">Festivo</option>
                                    </select>
                                    <div class="input-group-append show">
                                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="sr-only">Opciones/span>
                                        </button>
                                        <div class="dropdown-menu show" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(1317px, 38px, 0px);">
                                            <a class="dropdown-item" onclick="agregar()">Agregar Temporada</a>
                                            <a class="dropdown-item" href="#">Editar Temporada</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            
                            <div class="form-group mb-3">
                                <p class="text-muted text-small">Codigos establecidos</p>
                                <ul class="list-unstyled mb-5">
                                    <li class="active">
                                        <i class="simple-icon-arrow-right" style="background-color:#9CD286;"></i>
                                        Especial  ->   E
                                    </li>
                                    <li>
                                        <i class="simple-icon-arrow-right" style="background-color: #FFF2A8"></i>
                                        Alta  ->   A
                                    </li>
                                    <li>
                                        <i class="simple-icon-arrow-right" style="background-color: #F9A65C"></i>
                                         Media  ->   M
                                    </li>
                                    <li>
                                        <i class="simple-icon-arrow-right" style="background-color: #D1E1E3"></i>
                                        Baja  ->   B
                                    </li>
                                    <li>
                                        <i class="simple-icon-arrow-right" style="border-width:1px;border-style: solid; border-color: black"></i>
                                        Festivo  ->   F
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

              
            </div>
        </div>

        <a class="app-menu-button d-inline-block d-xl-none" href="#">
            <i class="simple-icon-options"></i>
        </a>
    </div>

    
</main>
@endsection

@push('scripts')
<script src="{{ asset('js/parameters/temporada/index.js') }}"></script>
<script>

    let data=@json($data);
    colorear(data);
    
     function agregar(){
        let start=document.getElementById("datepickerStart").value;
        let end=document.getElementById("datepickerEnd").value;
        
        let tipo=$('select[name="tipoTemporada"] option:selected').text();
        let codigo=document.getElementById("tipoTemporada").value;
        var dateStart = start.split("/");
        let newdateStart=dateStart[2]+"-"+dateStart[0]+"-"+dateStart[1];

        var dateEnd = end.split("/");
        let newdateEnd=dateEnd[2]+"-"+dateEnd[0]+"-"+dateEnd[1];

            
        $.ajax({
            dataType: "json",
            method: "POST",
            url:'/add_temporada',
            headers: {'X-CSRF-TOKEN': $('#index_temporada #_token').val()},
            data:{
                "tipo":tipo,
                "codigo":codigo,
                "newdateStart":newdateStart,
                "newdateEnd":newdateEnd,
            },
            success:function(data) {
                location.href='/temporadaw';
            }
        });
    }
$(document).ready(function(){
    $('#datepickerStart').change(function(){
    let e=document.getElementById("datepickerStart").value;
        let date=new Date(e);
        let year=date.getFullYear();
        if(year!=2021){
            alert('Debe seleccionar una fecha de este año');
            $('#datepickerStart').val('');
            $('#datepickerEnd').val('');
            
        }
    });
    $('#datepickerEnd').change(function(){
    let e=document.getElementById("datepickerEnd").value;
        let date=new Date(e);
        let year=date.getFullYear();
        if(year!=2021){
            alert('Debe seleccionar una fecha de este año');
            $('#datepickerStart').val('');
            $('#datepickerEnd').val('');
            
        }
    });
});
    




</script>
@endpush


