@extends('layouts.appe')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Hoteles</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('data_hotel.index')}}">Listado</a>
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
                            <form>
                                <div class="form-group">
                                    <label for="razon_social">Razón Social:
                                    </label>
                                    <input type="text" class="form-control" id="razon_social"
                                        aria-describedby="razonHelp" >
                                </div>
                               
                                <div class="form-row">
                                    <div class="form-group col-md-7">
                                        <label for="razon_comercial">Razón Comercial:</label>
                                        <input type="text" class="form-control" id="razon_comercial"
                                            aria-describedby="razonHelp" >
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="nit">Nit:</label>
                                        <input type="number" class="form-control" id="nit">
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                        <label for="digito_nit">Digito:</label>
                                        <input type="number" max="10" min="1" class="form-control" id="digito_nit" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="direccion">Dirección:
                                    </label>
                                    <input type="text" class="form-control" id="direccion"
                                        aria-describedby="razonHelp" >
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="telefono">Telefono:</label>
                                        <input type="number" class="form-control" id="telefono">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="telefono_alt">Telefono Alterno:</label>
                                        <input type="number" class="form-control" id="telefono_alt" >
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="pais">Pais:</label>
                                        <select id="pais" class="form-control">
                                            <option selected="">Seleccionar</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="municipio">Municipio:</label>
                                        <select id="municipio" class="form-control">
                                            <option selected="">Seleccionar</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ciudad">Ciudad:</label>
                                        <select id="ciudad" class="form-control">
                                            <option selected="">Seleccionar</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="resolucion_facturacion">Resolución Facturación:</label>
                                        <select id="resolucion_facturacion" class="form-control">
                                            <option selected="">Seleccionar</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="ciiu">CIIU Actividad Economica:</label>
                                        <select id="ciiu" class="form-control">
                                            <option selected="">Seleccionar</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="cuenta_bancaria">Cuenta Bancaria:</label>
                                        <select id="cuenta_bancaria" class="form-control">
                                            <option selected="">Seleccionar</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="logo">Logo:</label>
                                        <input type="file" class="form-control" id="logo" >
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    @endsection
