@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Plan de Cuentas</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('planCuentas.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edición</li>
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
                            <form role="form" id="edit_planCuentas"  name="edit_planCuentas" >
                                <input type="hidden" id="_url"  value="{{ url('planCuentas', [$data->encode_id])}}">
                                    <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                                    <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                               
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="edit_codigoCuenta">Codigo de Cuenta:</label>
                                            <input type="text" class="form-control" id="edit_codigoCuenta" name="edit_codigoCuenta" value="{{$data->codigoCuenta}}"
                                                aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="edit_nombreCuenta">Nombre de Cuenta:</label>
                                            <input type="text" class="form-control" id="edit_nombreCuenta" name="edit_nombreCuenta"  value="{{$data->nombreCuenta}}"
                                            aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="edit_centroInventario">Centro de Inventario:</label>
                                            <select id="edit_centroInventario" name="edit_centroInventario" class="custom-select inputs_centro" multiple="multiple" disabled>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="edit_centroCosto">Centro de Costo:</label>
                                            <select id="edit_centroCosto" name="edit_centroCosto" class="custom-select inputs_centro" multiple="multiple" disabled></select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="edit_centroVenta">Centro de Ingreso:s</label>
                                            <select id="edit_centroVenta" name="edit_centroVenta" class="custom-select inputs_centro" multiple="multiple" disabled></select>
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
                                            <label for="edit_terceros">Terceros:</label>
                                            <select id="edit_terceros" name="edit_terceros" class="form-control" disabled>
                                                <option value="" selected="">SELECCIONAR</option>
                                                <option value="clientes">Clientes</option>
                                                <option value="proveedores">Proveedores</option>
                                                <option value="empleado">Empleado</option>
    
                                            </select>
                                            
                                        </div>
                                    </div>

                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
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
    <script src="{{ asset('js/parameters/planCuentas/edit.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarCentros();
        }, false);
        function cargarCentros() {

            $.ajax({
                url: "{{ route('api.centro_venta.list') }}",
                success: function(result){
                    result.sort();

                    //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
                    addOptionsConcat("edit_centroInventario", result);
                }
            });

            $.ajax({
                url: "{{ route('api.centro_costo.list') }}",
                success: function(result){
                    result.sort();
                    //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
                    addOptionsConcat("edit_centroCosto", result);
                }
            });

            $.ajax({
                url: "{{ route('api.centro_ingreso.list') }}",
                success: function(result){
                    result.sort();
                    //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
                    addOptionsConcat("edit_centroVenta", result);
                }
            });

        }
       
        


        $(document).ready(function(){
            
            let centroInventario = document.getElementById("edit_centroInventario");
            let centroCosto = document.getElementById("edit_centroCosto");
            let centroVenta = document.getElementById("edit_centroVenta");
            let tercero = document.getElementById("edit_terceros");

            function restablecer(centro) {
                centro.disabled=true;
                $("#edit_centroInventario").val(null).trigger("change"); 
                $("#edit_centroCosto").val(null).trigger("change"); 
                $("#edit_centroVenta").val(null).trigger("change");
            }
            $("#edit_codigoCuenta").keyup(function(){
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

            // Carga Inicial

            function rellenar(centro,num) {
                    centro.disabled=false;
                    let centro_selwer=@json($centros);
                    if(num===14){
                            $("#edit_centroInventario").val(centro_selwer).trigger("change");
                    }
                    if (num===61) {
                            $("#edit_centroCosto").val(centro_selwer).trigger("change");
                            
                    }
                    if (num===41) {
                            $('#edit_centroVenta').val(centro_selwer).trigger("change");
                            
                    } 
                    
                }
                let valor= $("#edit_codigoCuenta").val();
                let num_inciales=valor.substr(0,2);
                num_inciales==="14" ? rellenar(centroInventario,14) : centroInventario.disabled=true;
                num_inciales==="61" ? rellenar(centroCosto,61):centroCosto.disabled=true;
                num_inciales==="41" ? rellenar(centroVenta,41):centroVenta.disabled=true;

                let terceros=@json($data->terceros);
                if(terceros!=null){
                    $("#edit_estado").val("si");
                    document.getElementById("edit_terceros").disabled=false;
                    $("#edit_terceros").val(terceros);
                }else{
                    $("#edit_estado").val("no");
                    document.getElementById("edit_terceros").disabled=true;
                }
           
        });
        </script>
    @endpush
