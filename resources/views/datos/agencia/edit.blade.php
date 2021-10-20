
@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Agencias</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('agencias.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edición</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <br>

        
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Ingresa la información necesaria del Huesped.</h5>
                            
                            <br>
                            <form role="form" id="edit_agencias" name="edit_agencias" >
                            <input type="hidden" id="_url"  value="{{ url('agencias', [$data->encode_id])}}">
                            <input type="hidden" id="_urlStatic"  value="{{ url('agencias')}}">
                            <input type="hidden" id="_token" value="{{ csrf_token() }}">
                               
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <label for="edit_nit">NIT<span style="color:red">*</span></label>
                                    <input type="number" class="form-control" min="1" id="edit_nit" name="edit_nit">
                                    </div>
                                    <div class="form-group col-md-6" >
                                    <label for="edit_digitoVerificacion">DV:<span style="color:red">*</span></label>
                                    <input type="number" class="form-control" max="10" min="1" id="edit_digitoVerificacion" name="edit_digitoVerificacion">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                   <label for="edit_nombre">Nombre de la Agencia<span style="color:red">*</span>
                                   </label>
                                   <input type="text" class="form-control" id="edit_nombre" name="edit_nombre"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="edit_direccion">Dirección </label>
                                   <input type="text" class="form-control" id="edit_direccion" name="edit_direccion"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                           </div>

                
                           <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="edit_telefono">Telefono<span style="color:red">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="edit_telefono" name="edit_telefono"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="edit_celular">Celular </label>
                                    <input type="text" class="form-control" id="edit_celular" name="edit_celular"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="edit_email">Email </label>
                                    <input type="email" class="form-control" id="edit_email" name="edit_email"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="edit_paginaWeb">Pagina Web </label>
                                    <input type="text" class="form-control" id="edit_paginaWeb" name="edit_paginaWeb"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="edit_potencial">Potencial </label>
                                    <input type="number" min="0"  class="form-control" id="edit_potencial" name="edit_potencial"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="edit_comision">% Comision</label>
                                    <input type="number" min="0" class="form-control" id="edit_comision" name="edit_comision"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="edit_aplicaCredito">Aplica Credito?</label>
                                    <select id="edit_aplicaCredito" name="edit_aplicaCredito" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                        <option value="true">SI</option>
                                        <option value="false">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                               
                            </div>
                            <div id="edit_card_credito" class="row" style="display:none;">
                                <div class="form-group col-md-4">
                                    <label for="edit_montoCredito">Monto Credito</label>
                                    <input type="number" min="0" class="form-control" id="edit_montoCredito" name="edit_montoCredito">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="edit_diasCredito">Dias Credito</label>
                                    <input type="number" min="0" class="form-control" id="edit_diasCredito" name="edit_diasCredito">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="edit_diasCorte">Dias Corte</label>
                                    <input type="number" min="0" class="form-control" id="edit_diasCorte" name="edit_diasCorte">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="edit_tarifa">Tarifa<span style="color:red">*</span></label>
                                    <select id="edit_tarifa" name="edit_tarifa" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edit_forma_pago">Forma de Pago<span style="color:red">*</span></label>
                                    <select id="edit_forma_pago" name="edit_forma_pago" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
                                <a href="{{ route('agencias.index') }}"> 
                                <button type="button" class="btn btn-light mb-0">Volver</button>
                                </a>
                            </form>
                        </div>
                    </div>

                </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/datos/agencias/edit.js') }}"></script>
    <script>
         window.addEventListener("load", function() {
            cargarTarifa();
            cargarFormaPago();
            cargarDatosEstablecidos();
    }, false);
 
    $("#edit_aplicaCredito").change(function(){
        let decision=$(this).val();
        if (decision==="true") {
            $("#edit_card_credito").show();
        }else{
            $("#edit_card_credito").hide();
            $("#edit_montoCredito").val("");
            $("#edit_diasCredito").val("");
            $("#edit_diasCorte").val("");
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
        addOptionsConcat("edit_tarifa", regimenes);
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
        addOptions("edit_forma_pago", formaPago);
        }
    }

    function cargarDatosEstablecidos(){
        let nit=@json($data->nit);
        $("#edit_nit").val(nit);
        let digito=@json($data->digitoVerificacion);
        $("#edit_digitoVerificacion").val(digito);
        let nombre=@json($data->nombre);
        $("#edit_nombre").val(nombre);
        let direccion=@json($data->direccion);
        $("#edit_direccion").val(direccion);
        let telefono=@json($data->telefono);
        $("#edit_telefono").val(telefono);
        let celular=@json($data->celular);
        $("#edit_celular").val(celular);
        let email=@json($data->email);
        $("#edit_email").val(email);
        let paginaWeb=@json($data->paginaWeb);
        $("#edit_paginaWeb").val(paginaWeb);
        let potencial=@json($data->potencial);
        $("#edit_potencial").val(potencial);
        let comision=@json($data->comision);
        $("#edit_comision").val(comision);
        let aplicaCredito=@json($data->aplicaCredito);
        $("#edit_aplicaCredito").val(aplicaCredito);
        let montoCredito=@json($data->montoCredito);
        $("#edit_montoCredito").val(montoCredito);

        
        let decision=@json($data->aplicaCredito);
        
        if (decision===1) {
            $("#edit_aplicaCredito").val("true");
            $("#edit_card_credito").show();
        }else{
            $("#edit_aplicaCredito").val("false");
            $("#edit_card_credito").hide();
        }

        let diasCredito=@json($data->diasCredito);
        $("#edit_diasCredito").val(diasCredito);
        let diasCorte=@json($data->diasCorte);
        $("#edit_diasCorte").val(diasCorte);
     //
        let tarifa=@json($data->tarifa);
        $("#edit_tarifa").val(tarifa);
        // ciudad expedicion
        let forma=@json($data->forma_pago);
        $("#edit_forma_pago").val(forma);
    }
    
    </script>
@endpush
