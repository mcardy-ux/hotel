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
                                        <input type="number" class="form-control" id="centroInventario" name="centroInventario"  min="1" max="9999" disabled
                                            aria-describedby="razonHelp" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="centroCosto">Centro de Costo:</label>
                                        <input type="number" class="form-control" id="centroCosto" name="centroCosto" min="1" max="9999" disabled
                                        aria-describedby="razonHelp" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="centroVenta">Centro de Ingreso:</label>
                                        <input type="number" class="form-control" id="centroVenta" name="centroVenta" min="1" max="9999" disabled
                                        aria-describedby="razonHelp" >
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

        let centroInventario = document.getElementById("centroInventario");
        let centroCosto = document.getElementById("centroCosto");
        let centroVenta = document.getElementById("centroVenta");

        let tercero = document.getElementById("terceros");
        $(document).ready(function(){
            $("#codigoCuenta").keyup(function(){
                let valor=$(this).val();
                let num_inciales=valor.substr(0,2);
                    console.log(num_inciales);
                num_inciales==="14" ? centroInventario.disabled=false :centroInventario.disabled=true;
                num_inciales==="61" ? centroCosto.disabled=false :centroCosto.disabled=true;
                num_inciales==="41" ? centroVenta.disabled=false :centroVenta.disabled=true;
               
            });

            $("#edit_estado").change(function(){
                let valor=$(this).val();
               
                valor==="si" ? tercero.disabled=false :tercero.disabled=true;
               
            });

        });
        </script>
    @endpush
