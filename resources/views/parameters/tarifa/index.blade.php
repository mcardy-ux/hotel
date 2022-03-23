@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Tarifas</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Listado</li>
                        </ol>
                    </nav>


                    <div class="top-right-button-container">
                        <div class="btn-group">
                            <a href="{{url('tarifa/create')}}" >
                                    <button type="button" class="btn btn-primary mb-1">Modificar Tarifas</button>
                            </a>
                        </div>
                    </div>
                    
                    <div class="separator mb-5"></div>
                    
                    <div class="container-fluid disable-text-selection">
                        @foreach($hotels as $value)
                
                            <div class="row" id="card_lista_integrantes_{{$value->id}}" name="card_lista_integrantes_{{$value->id}}">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <div class="card mb-4">
                                        <div class="card-body" >

                                            <div class=" d-flex flex-row mb-3">
                                                <a class="d-flex"  href="#">
                                                    <div style="margin: 0 auto;text-align: left; width:175px;height:75px;">
                                                        <img src="{{asset('storage/logos/'.$value->logo)}}" alt="Imagen" class="list-thumbnail responsive border-0" style="width:175px;height:75px; object-fit: contain;">
                                                        </div>
                                                </a>
                                                <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                                    <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                                        <p class="list-item-heading mb-0 truncate">{{$value->razonComercial}}</p>                                                  
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                
                                                <div class="col-md-12 col-lg-12 mb-12">
                                                    <div id="accordion">

                                                        <div class="border">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Temporada Baja
                                                            </button>
                        
                                                            <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                                                                <div class="row mb-4">
                                                                    @foreach ($tipo_habs as $tipo)
                                                                        @php
                                                                        $tipo_converted=str_replace(' ','_',$tipo->descripcion);    
                                                                        @endphp
                                                                    <div class="col-lg-6 col-md-12 mb-4">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title text-center font-black">{{$tipo->descripcion}}</h5>
                                                                                    <table class="table" id="{{$tipo->descripcion}}_baja">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                {{-- Aqui se configuran los regimenes --}}
                                                                                                <th scope="col"></th>
                                                                                                @foreach ($regimens as $itemReg)
                                                                                                <th scope="col" id="reg_{{$itemReg->id}}">{{$itemReg->codigo}}</th>
                                                                                                @endforeach
                                                                                                
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            @foreach ($clases as $itemClase)
                                                                                            <tr>
                                                                                                {{-- En la primera columna se configuran las clases de habitaciones --}}
                                                                                                <th scope="row" id="clase_{{$itemClase->id}}">{{$itemClase->descripcion}}</th>
                                                                                                
                                                                                                
                                                                                                @for ($i = 1; $i <= $regimens->count(); $i++)
                                                                                                <td id="hotel_{{$value->id}}_baja_{{$tipo_converted}}_clase_{{$itemClase->id}}_reg_{{$i}}">-</td>
                                                                                                @endfor
                                                                                                
                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border">
                                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Temporada Media
                                                            </button>
                                                            <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                                                
                                                                <div class="row mb-4">
                                                                    @foreach ($tipo_habs as $tipo)
                                                                        @php
                                                                        $tipo_converted=str_replace(' ','_',$tipo->descripcion);    
                                                                        @endphp
                                                                    <div class="col-lg-6 col-md-12 mb-4">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title text-center font-black">{{$tipo->descripcion}}</h5>
                                                                                    <table class="table" id="{{$tipo->descripcion}}_media">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                {{-- Aqui se configuran los regimenes --}}
                                                                                                <th scope="col"></th>
                                                                                                @foreach ($regimens as $itemReg)
                                                                                                <th scope="col" id="reg_{{$itemReg->id}}">{{$itemReg->codigo}}</th>
                                                                                                @endforeach
                                                                                                
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            @foreach ($clases as $itemClase)
                                                                                            <tr>
                                                                                                {{-- En la primera columna se configuran las clases de habitaciones --}}
                                                                                                <th scope="row" id="{{$itemClase->id}}">{{$itemClase->descripcion}}</th>
                                                                                                
                                                                                                
                                                                                                @for ($i = 1; $i <= $regimens->count(); $i++)
                                                                                                <td id="hotel_{{$value->id}}_media_{{$tipo_converted}}_clase_{{$itemClase->id}}_reg_{{$i}}">-</td>
                                                                                                @endfor
                                                                                                
                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Temporada Alta
                                                            </button>
                                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                                <div class="row mb-4">
                                                                    @foreach ($tipo_habs as $tipo)
                                                                        @php
                                                                        $tipo_converted=str_replace(' ','_',$tipo->descripcion);    
                                                                        @endphp
                                                                    <div class="col-lg-6 col-md-12 mb-4">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title text-center font-black">{{$tipo->descripcion}}</h5>
                                                                                    <table class="table" id="{{$tipo->descripcion}}_alta">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                {{-- Aqui se configuran los regimenes --}}
                                                                                                <th scope="col"></th>
                                                                                                @foreach ($regimens as $itemReg)
                                                                                                <th scope="col" id="reg_{{$itemReg->id}}">{{$itemReg->codigo}}</th>
                                                                                                @endforeach
                                                                                                
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            @foreach ($clases as $itemClase)
                                                                                            <tr>
                                                                                                {{-- En la primera columna se configuran las clases de habitaciones --}}
                                                                                                <th scope="row" id="clase_{{$itemClase->id}}">{{$itemClase->descripcion}}</th>
                                                                                                
                                                                                                
                                                                                                @for ($i = 1; $i <= $regimens->count(); $i++)
                                                                                                <td id="hotel_{{$value->id}}_alta_{{$tipo_converted}}_clase_{{$itemClase->id}}_reg_{{$i}}">-</td>
                                                                                                @endfor
                                                                                                
                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="border">
                                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                Temporada Especial
                                                            </button>
                                                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                                                <div class="row mb-4">
                                                                    @foreach ($tipo_habs as $tipo)
                                                                        @php
                                                                        $tipo_converted=str_replace(' ','_',$tipo->descripcion);    
                                                                        @endphp
                                                                    <div class="col-lg-6 col-md-12 mb-4">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title text-center font-black">{{$tipo->descripcion}}</h5>
                                                                                    <table class="table" id="{{$tipo->descripcion}}_especial">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                {{-- Aqui se configuran los regimenes --}}
                                                                                                <th scope="col"></th>
                                                                                                @foreach ($regimens as $itemReg)
                                                                                                <th scope="col" id="reg_{{$itemReg->id}}">{{$itemReg->codigo}}</th>
                                                                                                @endforeach
                                                                                                
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            @foreach ($clases as $itemClase)
                                                                                            <tr>
                                                                                                {{-- En la primera columna se configuran las clases de habitaciones --}}
                                                                                                <th scope="row" id="clase_{{$itemClase->id}}">{{$itemClase->descripcion}}</th>
                                                                                                
                                                                                                
                                                                                                @for ($i = 1; $i <= $regimens->count(); $i++)
                                                                                                <td id="hotel_{{$value->id}}_especial_{{$tipo_converted}}_clase_{{$itemClase->id}}_reg_{{$i}}">-</td>
                                                                                                @endfor
                                                                                                
                                                                                            </tr>
                                                                                            @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
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
                        @endforeach
                </div>
            </div>



        </div>
    </main>


@endsection
@push('scripts')
<script>

let array = @json($data);
let mask=

array.forEach( function(valor, array) {
    let temporada=valor.temporada.toLowerCase();
    let puntero ="hotel_"+valor.rel_hotel+"_"+temporada+"_"+valor.tipo_habitacion+"_clase_"+valor.relClaseHabitacion+"_reg_"+valor.relRegimen;
    document.getElementById(puntero).innerHTML=valor.valorAlojamiento;
});

</script>

@endpush
