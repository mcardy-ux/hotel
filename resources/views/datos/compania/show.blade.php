
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
                            <li class="breadcrumb-item active" aria-current="page">Visualización</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>
        

            <div class="row" id="card_huesped">
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
                            <form role="form" id="show_huespedes" name="show_huespedes" accept-charset="UTF-8" enctype="multipart/form-data">
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
                                                                <th scope="col">Nacionalidad</th>
                                                                <th scope="col">Genero</th>
                                                                <th scope="col">Celular</th>
                                                                <th scope="col">Email</th>
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

    let cantHoteles=@json($count_Hotel);
    let razon_hotel=@json($avaliable_hotels);
    console.log(cantHoteles,razon_hotel);
    if(cantHoteles==1){
        let huespedes= document.getElementById('card_huespedes');
        huespedes.style.display="block";
        let hotel= document.getElementById('card_sel_hotel');
        hotel.style.display="none";
        $("#rel_hotel").val(razon_hotel[0].id);
        $("#razon_social_hotel").val(razon_hotel[0].value);
    }else{
        let hotel= document.getElementById('card_sel_hotel');
        hotel.style.display="block";
        let huespedes= document.getElementById('card_huespedes');
        huespedes.style.display="none";
        cargarHoteles(event);
    }

    $(document).ready(function(){

$('#listado_huespeds').DataTable({
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
      }},
      "order": [[ 0, "asc" ]],
      "processing": true,
      "responsive": true,
      "serverSide": true,
    "ajax": "{{ route('ajax.request.huespedes') }}",
    "columns":[
    {"data":"nombre_completo"},
    {"data":"documento"},
    {"data":"nacion"},
    {"data":"genero"},
    {"data":"celular"},
    {"data":"email"},
    { "data": "actions",orderable:false, searchable:false },
    ],
});
});
</script>
@endpush
