
@extends('layouts.app')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Compañias</h1>
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
           
            <div class="col-12">
                
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="top-right-button-container">
                            <div class="btn-group">
                                <a href="{{url('compania/create')}}" >
                                        <button type="button" class="btn btn-success mb-1">Agregar una nueva compañia</button>
                                </a>
                            </div>
                        </div>
                        <h5 class="mb-4">Información Basica</h5>                        <br>
                        <br>
                        <form role="form" id="list_compania" name="list_compania" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" id="_url" value="{{ url('compania') }}">
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
                                                        <th scope="col">Nit</th>
                                                        <th scope="col">Empresa</th>
                                                            <th scope="col">Dirección</th>
                                                            <th scope="col">Celular</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Tarifa</th>
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
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/datos/compania/index.js') }}"></script>
    <script>
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
                    }
                },
                "order": [[ 0, "asc" ]],
                "processing": true,
                "responsive": true,
                "serverSide": true,
                "ajax": "{{ route('ajax.request.companias')}}",
                "columns":[
                {"data":"nit"},
                {"data":"razonSocial"},
                {"data":"direccion"},
                {"data":"celular"},
                {"data":"email"},
                {"data":"cod_tarifa"},
                { "data": "actions",orderable:false, searchable:false },
                ],
            });
        
});
</script>
@endpush
