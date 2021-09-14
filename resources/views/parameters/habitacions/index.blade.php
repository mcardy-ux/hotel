@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Habitaciones</h1>
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
                            <a href="{{url('habitacions/create')}}" >
                                    <button type="button" class="btn btn-primary mb-1">Agregar un nuevo departamento</button>
                            </a>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                    <form id="index_dpto" name="index_dpto">
                        <input type="hidden" id="_url" value="{{ url('') }}">
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
            @php
            $iterador=1;
            @endphp
            @foreach($hotels as $value)
       
                <div class="row" id="card_lista_integrantes_{{$value->id}}" name="card_lista_integrantes_{{$value->id}}">
                    <div class="col-12 col-md-12 col-xl-12">
                        <div class="card mb-4">
                            <div class="card-body" >

                                <div class=" d-flex flex-row mb-3">
                                    <a class="d-flex"  href="#">
                                        <img src="{{asset('storage/logos/'.$value->logo)}}" alt="Imagen" class="list-thumbnail responsive border-0" style="width:75px;height:75px; object-fit: cover;">
                                    </a>
                                    <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                                        <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                                            <p class="list-item-heading mb-0 truncate">{{$value->razonComercial}}</p>                                                  
                                        </div>
                                    </div>
                                </div>  
                                <div class="row">
                    
                                    <div class="col-md-12 col-lg-12 mb-12">
                                       
                                            @foreach ($info as $item)
                                            @if($item->hotel_id==$value->id)
                                                <div class="card-body d-flex justify-content-between align-items-center">
                                                            
                                                    <p class="list-item-heading mb-2"><strong>Numero de Habitación:</strong></p>
                                                    <p class="text-muted list-item-heading">{{$item->num_habitacion}}</p>
                                                    <p class="list-item-heading mb-2"><strong>Capacidad</strong></p>
                                                    <p class="text-muted list-item-heading">{{$item->capacidad_huespedes}}</p>                                       
                                                   
                                                    <p class="list-item-heading mb-2"><strong>Tipo de Habitación</strong></p>
                                                    <p class="text-muted list-item-heading">{{$item->descripcion}}</p>
                                                    <p class="list-item-heading mb-2"><strong>Estado:</strong></p>
                                                    <p class="text-muted list-item-heading">
                                                        @if($item->estado=="habilitada")
                                                        <span class="badge badge-pill badge-outline-success mb-1">Habilitada</span>
                                                        @elseif($item->estado=="deshabilitada")
                                                        <span class="badge badge-pill badge-outline-warning mb-1">Deshabilitada</span>
                                                        @endif</p>
                                                    <div class="dropdown d-inline-block">
                                                        <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button" id="dropdownMenuButtonBank" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Opciones
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBank" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                            <a class="dropdown-item" href="{{url('habitacions', [$item->encode_id,'edit']) }}">Editar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                      
                                    </div>
                                    
                            
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                @php
                $iterador=$iterador+1;
                @endphp
            @endforeach
        </div>
    </main>
@endsection
@push('scripts')
<script src="{{ asset('js/parameters/departament/index.js') }}"></script>
<script>
    function verIntegrantes(id,iterador){

        let lista=document.getElementById("lista_integrantes_"+iterador);
        let concat="";
        // RemoveOptions("ciiu");
        $.ajax({
            url: $('#index_dpto #_url').val()+"/ajax/request/integrantes/"+id,
            headers: {'X-CSRF-TOKEN': $('#index_dpto #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
            var json = $.parseJSON(response);
            
            if(json.success){
                for (let index = 0; index < json.data.length; index++) {
                    concat=concat+' <li class="mb-1"><span class="log-indicator border-theme-2 align-middle"></span>  '+json.data[index].name+'</li>';
                }
                lista.innerHTML=concat;
            }
            }
        });

     
        
    }
</script>
@endpush
