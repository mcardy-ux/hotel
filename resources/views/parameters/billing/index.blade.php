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
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 mb-5">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Puedes agregar una nueva Resolución</h5>
                            <a href="{{url('locations/create')}}" class="btn btn-primary rounded active mb-1" role="button" aria-pressed="true">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="row mb-12">
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listado</h5>
                            
                            <table id=ResolucionDate class=”display”>
                             
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Numero de Resolución</th>
                                        <th scope="col">Fecha de Resolución</th>
                                        <th scope="col">Desde</th>
                                        <th scope="col">Hasta</th>
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
<script>
$(document).ready(function(){

    $('#ResolucionDate').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('ajax.request.billing') }}",
        "columns":[
        {"data":"id"},
        {"data":"numResolucion"},
        {"data":"fechaResolucion"},
        {"data":"desde"},
        {"data":"hasta"},
    ],
    });
});
</script>
@endpush
