@extends('layouts.app')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Resoluciones de Facturación</h1>
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
                            <a href="{{url('billing/create')}}" >
                                    <button type="button" class="btn btn-primary mb-1">Agregar una nueva Resolución</button>
                            </a>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                    <form>
                        <input type="hidden" id="_url" value="{{ url('') }}">
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>

            
                    
            <div class="row mb-12">
                <div class="col-lg-12 col-md-12 mb-4">         
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listado</h5>
                            
                            <table id=ResolucionDate class=”display”>
                             
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Numero de Resolución</th>
                                        <th scope="col">Fecha de Resolución</th>
                                        <th scope="col">Dias Restantes</th>
                                        <th scope="col">Desde</th>
                                        <th scope="col">Hasta</th>
                                        <th scope="col">Estado</th> 
                                        <th scope="col">Accion</th> 
                                        
                                    </tr>
                                </thead>
                                <tbody >
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
<script src="{{ asset('js/parameters/billing/index.js') }}"></script>

<script>
$(document).ready(function(){

    $('#ResolucionDate').DataTable({
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
          "order": [[ 1, "asc" ]],
          "processing": true,
          "responsive": true,
          "serverSide": true,
        "ajax": "{{ route('ajax.request.billing') }}",
        "columns":[
        {"data":"numResolucion"},
        {"data":"fechaResolucion"},
        {"data":"diasRestantes"},
        {"data":"desde"},
        {"data":"hasta"},
        { "data": "status",orderable:false, searchable:false },
        { "data": "actions",orderable:false, searchable:false },
        ],
    });
});
</script>
@endpush
