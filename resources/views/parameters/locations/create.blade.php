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
                            <li class="breadcrumb-item">
                                <a href="{{route('locations.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Creación</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>


                </div>
            </div>
            <!-- Seccion para agregar nuevo departamento -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">En esta seccion podras crear nuevos departamentos del pais.</h5>
                            <form>
                                <div class="form-group">
                                    <label for="razon_social">Nombre del nuevo departamento:
                                    </label>
                                    <input type="text" class="form-control" id="razon_social"
                                        aria-describedby="razonHelp" >
                                </div>
                                <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            
            <!-- Seccion para agregar nueva ciudad -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">En esta seccion podras crear nueva ciudad/territorio del pais.</h5>
                            <form>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="telefono">Municipio:</label>
                                        <select id="ciiu" class="form-control">
                                            <option selected="">Seleccionar</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="telefono_alt">Nombre de la ciudad / territorio:</label>
                                        <input type="number" class="form-control" id="telefono_alt" >
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
