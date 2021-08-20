@extends('layouts.appe')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Ubicaciones</h1>
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
            <!-- <div class="row">
                <div class="col-12 col-lg-6 mb-5">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Puedes agregar una nueva Ubicación</h5>
                            <a href="{{url('locations/create')}}" class="btn btn-primary rounded active mb-1" role="button" aria-pressed="true">Agregar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            
                            <h5 class="mb-4">Pais por defecto: Colombia</h5>
                        </div>
                    </div>
                </div>      
            </div> -->

            <br>
            <div class="row mb-12">
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Listado de ubicaciones de colombia.</h5>
                            <div class="col-lg-4 col-md-6 mb-2">
                                <select id="select_departamento" name="select_departamento" class="form-control">
                                    <option selected="">Seleccionar Departamento</option>
                                </select>
                            </div>
                            <br>
                            
                            <table class="table">
                             
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">Nombre de la Ciudad / Territorio / Municipio</th>
                                    </tr>
                                </thead>
                                <tbody id="ciudadesDatatable">
                                   
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
    // Carga del filtro de departamentos
    window.addEventListener("load",function(){
        cargarDepartamentos(event);
    },false);

    function cargarDepartamentos(){
        var array = @json($departamentos);
        addOptions("select_departamento", array);
    }
    function addOptions(domElement, array) {
        var selector = document.getElementsByName(domElement)[0];
        //Recorremos el array.
        for (var i=0;i<array.length;i++) {
            var opcion = document.createElement("option");
            opcion.value = array[i].id;
            opcion.text = array[i].value;
            selector.add(opcion);
        }
    }

    // Carga de tabla de acuerdo al departamento seleccionado
    $(document).ready(function(){
        $("#select_departamento").on("change",function(e){
            e.preventDefault();
            let valor=  $("#select_departamento").val();
            SolicitudListado(valor);
        });
    });

    function SolicitudListado(valor){
        let _token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('ajax.request.cities') }}",
            type:'GET',
            data: {_token:_token, valor:valor},
            success: function(data) {
            CargarListado(data);
            }
        });
    }

    function CargarListado(data){
        $("#ciudadesDatatable").html("");
       console.log(data.length);
       let impreso="";
        for(var i=0; i<data.length; i++){
            var tr = `<tr>
            <td>`+data[i].id+`</td>
            <td>`+data[i].value+`</td>
            </tr>`; 
            impreso=impreso+tr;
        }
        $("#ciudadesDatatable").append(impreso);
    }
    
</script>
@endpush
