
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
                                <a href="{{route('compania.index')}}">Listado</a>
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
                            <h5 class="mb-4">Ingresa la información necesaria de la compañia.</h5>
                            
                            <br>
                            <form role="form" id="add_compania" name="add_compania" >
                            <input type="hidden" id="_url" value="{{ url('compania') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                <input type="hidden" id="id_registro" name="id_registro" >

                              
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
                                <div class="form-group col-md-5">
                                   <label for="razonSocial">Razon Social<span style="color:red">*</span>
                                   </label>
                                   <input type="text" class="form-control" id="razonSocial" name="razonSocial"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                               <div class="form-group col-md-5">
                                   <label for="direccion">Dirección </label>
                                   <input type="text" class="form-control" id="direccion" name="direccion"
                                       aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                               </div>
                               <div class="form-group col-md-2">
                                <label for="tipoRegimen">Tipo de Regimen <span style="color:red">*</span></label>
                                <select id="tipoRegimen" name="tipoRegimen" class="form-control">
                                    <option value="">SELECCIONAR</option>
                                    <option value="GRAN CONTRIBUYENTE">GRAN CONTRIBUYENTE</option>
                                    <option value="REGIMEN COMUN">REGIMEN COMUN</option>
                                    <option value="REGIMEN SIMPLE">REGIMEN SIMPLE</option>
                                </select>
                                </div>
                           </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="tipo_ciiu">Categoria CIIU:</label>
                                    <select id="tipo_ciiu" name="tipo_ciiu" class="form-control">
                                        <option value="" selected="" >Seleccionar</option>
                                        <option value="1">Categoria 100 - 500</option>
                                        <option value="2">Categoria 500 - 1000</option>
                                        <option value="3">Categoria 1001 - 2000</option>
                                        <option value="4">Categoria 2001 - 3000</option>
                                        <option value="5">Categoria 3001 - 4000</option>
                                        <option value="6">Categoria 4001 - 5000</option>
                                        <option value="7">Categoria 5001 - 6000</option>
                                        <option value="8">Categoria 6001 - 7000</option>
                                        <option value="9">Categoria 7001 - 8000</option>
                                        <option value="10">Categoria 8001 - 10000</option>
                                    </select>
                                </div>
                    
                        
                                <div class="form-group col-md-8">
                                    <label for="ciiuActividad">CIIU Actividad Economica:</label>
                                    <select id="ciiuActividad" name="ciiuActividad" class="form-control">
                                        
                                    </select>
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
                                    <input type="text" class="form-control" id="email" name="email"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="paginaWeb">Pagina Web </label>
                                    <input type="text" class="form-control" id="paginaWeb" name="paginaWeb"
                                        aria-describedby="razonHelp" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pais">Pais</label>
                                    <select id="pais" name="pais" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ciudad">Ciudad de Expedición:</label>
                                    <select id="ciudad" name="ciudad" class="form-control">
                                        <option value="">SELECCIONAR</option>
                                    </select>
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
                                <a href="{{ route('compania.index') }}"> 
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
    <script src="{{ asset('js/datos/compania/create.js') }}"></script>
    <script>
         window.addEventListener("load", function() {
            cargarTarifa();
            cargarFormaPago();
            cargarPaises();
    }, false);
 
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
    function cargarPaises() {
        //Inicializamos el array.
        var paises = @json($paises);
        //Ordena el array alfabeticamente.
        if(paises.length==0)
        {
            alert("No estan configurados los paises");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions("pais", paises);
        }
    }
    function cargarCiudades(data,options) {
        if(data.length==0)
        {
            alert("No estan configurados los paises");
        }else{
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptions(options, data);
        }
    }
    $("#pais").change(function(){
        let num=$(this).val();
        RemoveOptions("ciudad");
        $.ajax({
            url: $('#add_compania #_url').val()+"/request/citiesEstado/"+num,
            headers: {'X-CSRF-TOKEN': $('#add_compania #_token').val()},
            type: 'GET',
            cache: false,
            success: function (response) {
                cargarCiudades(response,"ciudad");
            }
        });
    });
    
    </script>
@endpush
