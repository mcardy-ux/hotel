
@extends('layouts.app')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Huespedes</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Listado</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>
           
            <div class="row" id="card_sel_hotel">
                <div class="col-12">
                    <div class="col-lg-12 col-md-12 mb-4">
                        <p>A continuación debe escoger el hotel que dese agregar el huesped.</p>
                    </div>
               
                    <div class="col-md-12 col-sm-12 col-lg-12 col-12 mb-4">
                        <div class="card ">
                            <div class="card-body">
                                <div class="text-center">
                                <i class="iconsminds-hotel large-icon"></i>
                                    <p class="list-item-heading mb-1">  Hoteles Disponibles</p>
                                    <div class="form-group" style="text-align:center;">
                                        <select class="custom-select col-sm-3" id="avaliable_hotels" name="avaliable_hotels" style="text-align:center;" required="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" id="selectHotel" name="selectHotel">Escoger</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="card_huespedes" style="display:none;">
                <div class="col-12">
                    
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="top-right-button-container">
                                <input type="button" class="btn btn-primary mb-1" id="razon_social_hotel" disabled=""/>
                                <div class="btn-group">
                                    <a href="{{url('huespedes/create')}}" >
                                            <button type="button" class="btn btn-success mb-1">Agregar un nuevo Huesped</button>
                                    </a>
                                </div>
                            </div>
                            <h5 class="mb-4">Ingresa la información necesaria.</h5>
                            <br>
                            <br>
                            <form role="form" id="list_huespedes" name="list_huespedes" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input type="hidden" id="_url" value="{{ url('organization') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="rel_hotel" name="rel_hotel"  >
                                <div class="row mb-12">
                                    <div class="col-lg-12 col-md-12 mb-4">         
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Listado</h5>
                                                
                                                <table id="listado_huespeds" class=”display”>
                                                 
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Nombre Completo</th>
                                                            <th scope="col">Documento</th>
                                                                <th scope="col">Genero</th>
                                                                <th scope="col">Celular</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Porcentaje de Datos Completados</th>
                                                                <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody >
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/datos/huesped/index.js') }}"></script>
    <script>
         window.addEventListener("load", function() {
            cargarHoteles(event);
    }, false);
 
    //Funcion para cargar los hoteles al campo "select".
    function cargarHoteles() {
        //Inicializamos el array.
        var array = @json($avaliable_hotels);
        //Ordena el array alfabeticamente.
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("avaliable_hotels", array);
    }

   

    $(document).ready(function(){
        let cantHoteles=@json($count_Hotel);
        let razon_hotel=@json($avaliable_hotels);
        if(cantHoteles===1){
            $('#card_sel_hotel').hide();
            $('#card_huespedes').show();
            $("#rel_hotel").val(razon_hotel[0].id);
            $("#razon_social_hotel").val(razon_hotel[0].value);
            cargarHuespedes(razon_hotel[0].id);
        }else{
            $('#card_sel_hotel').show();
            $('#card_huespedes').hide();
        }

        $("#selectHotel").click(function(){
            let razon_hoteles=@json($avaliable_hotels);
            let idHotel=$("#avaliable_hotels").val();
            let razonHotel=razon_hotel[idHotel-1].value;
            $('#card_sel_hotel').hide();
            $('#card_huespedes').show();
            cargarHuespedes(idHotel);
            $("#rel_hotel").val(idHotel);
            $("#razon_social_hotel").val(razonHotel);
        });

        function cargarHuespedes(idRazon){
            console.log(idRazon);
            let a="{{ route('ajax.ruta.huespedes')}}/"+idRazon;
            console.log(a);
            let table=$('#listado_huespeds').DataTable({
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
                "order": [[ 0, "desc" ]],
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax": a,
                "columns":[
                {"data":"nombre_completo"},
                {"data":"documento"},
                {"data":"genero"},
                {"data":"celular"},
                {"data":"email"},
                {"data":"porcentaje_datos"},
                { "data": "actions",orderable:false, searchable:false },
                ],
            });
        }
});
</script>
@endpush
