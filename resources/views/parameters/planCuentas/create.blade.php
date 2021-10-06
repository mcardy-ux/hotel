@extends('layouts.appIni')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1> Plan de Cuentas</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('planCuentas.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Creación</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Ingresa la información necesaria.</h5>
                            <form role="form" id="add_planCuentas" name="add_planCuentas" accept-charset="UTF-8" >
                            <input type="hidden" id="_url" value="{{ url('planCuentas') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_user_create" name="created_by" value="{{ Auth::user()->id }}" >
                               
                               
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="codigoCuenta">Codigo de Cuenta:</label>
                                        <input type="text" class="form-control" id="codigoCuenta" name="codigoCuenta"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nombreCuenta">Nombre de Cuenta:</label>
                                        <input type="text" class="form-control" id="nombreCuenta" name="nombreCuenta"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="centroInventario">Centro de Inventario:</label>
                                        <select id="centroInventario" name="centroInventario" class="custom-select inputs_centro" multiple="multiple" disabled>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="centroCosto">Centro de Costo:</label>
                                        <select id="centroCosto" name="centroCosto" class="custom-select inputs_centro" multiple="multiple" disabled></select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="centroVenta">Centro de Ingreso:s</label>
                                        <select id="centroVenta" name="centroVenta" class="custom-select inputs_centro" multiple="multiple" disabled></select>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="edit_estado">¿Aplica Tercero?:</label>
                                        <select id="edit_estado" name="edit_estado" class="form-control" >
                                            <option value="" selected="">SELECCIONAR</option>
                                            <option value="si">SI</option>
                                            <option value="no">NO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="terceros">Terceros:</label>
                                        <select id="terceros" name="terceros" class="form-control" disabled>
                                            <option value="" selected="">SELECCIONAR</option>
                                            <option value="clientes">Clientes</option>
                                            <option value="proveedores">Proveedores</option>
                                            <option value="empleado">Empleado</option>

                                        </select>
                                        
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('planCuentas.index') }}"> 
                                <button type="button" class="btn btn-light mb-0">Volver</button>
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    @endsection
    @push('scripts')
    <script src="{{ asset('js/parameters/planCuentas/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarCentros();
        }, false);
       function cargarCentros() {
            $.ajax({
                url: "{{ route('api.centro_venta.list') }}",
                success: function(result){
                    console.log(result);
                     //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
                    addOptionsConcat("centroInventario", result);
                }
            });

            $.ajax({
                url: "{{ route('api.centro_costo.list') }}",
                success: function(result2){
                    //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
                    addOptionsConcat("centroCosto", result2);
                }
            });

            $.ajax({
                url: "{{ route('api.centro_ingreso.list') }}",
                success: function(result3){
                    //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
                    addOptionsConcat("centroVenta", result3);
                }
            });
            return false;
        }
      
        $(document).ready(function(){
        
        let centroInventario = document.getElementById("centroInventario");
        let centroCosto = document.getElementById("centroCosto");
        let centroVenta = document.getElementById("centroVenta");

        let tercero = document.getElementById("terceros");

            function restablecer(centro) {
                centro.disabled=true;
                $("#centroInventario").val(null).trigger("change"); 
                $("#centroCosto").val(null).trigger("change"); 
                $("#centroVenta").val(null).trigger("change");
            }
            $("#codigoCuenta").keyup(function(){
                let valor=$(this).val();
                let num_inciales=valor.substr(0,2);
                num_inciales==="14" ? centroInventario.disabled=false : restablecer(centroInventario);
                num_inciales==="61" ? centroCosto.disabled=false :restablecer(centroCosto);
                num_inciales==="41" ? centroVenta.disabled=false :restablecer(centroVenta);
               
            });

            $("#edit_estado").change(function(){
                let valor=$(this).val();
               
                valor==="si" ? tercero.disabled=false :tercero.disabled=true;
               
            });

        });
        </script>
    @endpush
