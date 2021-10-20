
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
                            <li class="breadcrumb-item">
                                <a href="{{route('agencias.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Creación</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>

           
            <div class="row" >
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Ingresa la información necesaria de la agencia.</h5>
                            
                            <br>
                            <form role="form" id="add_agencias" name="add_agencias" >
                            <input type="hidden" id="_url" value="{{ url('agencias') }}">
                            <input type="hidden" id="_token" value="{{ csrf_token() }}">

                              
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="nit">NIT<span style="color:red">*</span></label>
                                    <input type="number" class="form-control" min="1" id="nit" name="nit">
                                    </div>
                                    <div class="form-group col-md-6" >
                                    <label for="digitoVerificacion">DV:<span style="color:red">*</span></label>
                                    <input type="number" class="form-control" max="10" min="1" id="digitoVerificacion" name="digitoVerificacion">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                   <label for="nombre">Nombre de la Agencia<span style="color:red">*</span>
                                   </label>
                                   <input type="text" class="form-control" id="nombre" name="nombre"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="direccion">Dirección </label>
                                   <input type="text" class="form-control" id="direccion" name="direccion"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                           </div>

                
                           <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="telefono">Telefono<span style="color:red">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="telefono" name="telefono"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="celular">Celular </label>
                                    <input type="text" class="form-control" id="celular" name="celular"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="email">Email </label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="paginaWeb">Pagina Web </label>
                                    <input type="text" class="form-control" id="paginaWeb" name="paginaWeb"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="potencial">Potencial </label>
                                    <input type="number" min="0"  class="form-control" id="potencial" name="potencial"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="comision">% Comision</label>
                                    <input type="number" min="0" class="form-control" id="comision" name="comision"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="aplicaCredito">Aplica Credito?</label>
                                    <select id="aplicaCredito" name="aplicaCredito" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="true">SI</option>
                                        <option value="false">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                               
                            </div>
                            <div id="card_credito" class="row" style="display:none;">
                                <div class="form-group col-md-4">
                                    <label for="montoCredito">Monto Credito</label>
                                    <input type="number" min="0" class="form-control" id="montoCredito" name="montoCredito">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="diasCredito">Dias Credito</label>
                                    <input type="number" min="0" class="form-control" id="diasCredito" name="diasCredito">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="diasCorte">Dias Corte</label>
                                    <input type="number" min="0" class="form-control" id="diasCorte" name="diasCorte">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="tarifa">Tarifa<span style="color:red">*</span></label>
                                    <select id="tarifa" name="tarifa" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="forma_pago">Forma de Pago<span style="color:red">*</span></label>
                                    <select id="forma_pago" name="forma_pago" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                            </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                <a href="{{ route('agencias.index') }}"> 
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
    <script src="{{ asset('js/datos/agencias/create.js') }}"></script>
    <script>
         window.addEventListener("load", function() {
            cargarTarifa();
            cargarFormaPago();
    }, false);
 
    $("#aplicaCredito").change(function(){
        console.log($(this).val());
        let decision=$(this).val();
        if (decision==="true") {
            $("#card_credito").show();
        }else{
            $("#card_credito").hide();
        }
    });
    
    function cargarTarifa() {
        //Inicializamos el array.
        var regimenes = @json($regimenes);
        //Ordena el array alfabeticamente.
        if(regimenes.length==0)
        {
            alert("No esta configurado los regimenes");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("tarifa", regimenes);
        }
    }
    function cargarFormaPago() {
        //Inicializamos el array.
        var formaPago = @json($formaPago);
        //Ordena el array alfabeticamente.
        if(formaPago.length==0)
        {
            alert("No esta configurado la forma de pago");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("forma_pago", formaPago);
        }
    }

    </script>
@endpush
