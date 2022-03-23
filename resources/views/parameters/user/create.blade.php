@extends('layouts.appEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Usuarios</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('user.index')}}">Listado</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Creación</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <!-- Seccion para agregar nuevo usuario -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Debe ingresar la informacón correspondiente.</h5>
                            <form role="form" id="add_user" name="add_user" >
                                <input type="hidden" id="_url" value="{{ url('user') }}">
                                <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre Completo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        <small id="name_alert" name="name_alert" class="form-text text-muted" ></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email">
                                        <small id="email_alert" name="email_alert" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password">
                                        <small id="password_alert" name="password_alert" class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Acceso de Usuario</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="acceso" id="RadioActivo" value="1" checked="">
                                                <label class="form-check-label" for="RadioActivo">
                                                    Activo
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="acceso" id="RadioInactivo" value="0">
                                                <label class="form-check-label" for="RadioInactivo">
                                                    Inactivo
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <label for="deptos" class="col-sm-2 col-form-label">Departamentos</label>
                                    <div class="col-sm-10">
                                        <select  class="form-control" id="deptos" name="deptos" multiple="multiple">
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary mb-0">Agregar</button>
                                        <a href="{{ route('user.index') }}"> 
                                        <button type="button" class="btn btn-light mb-0">Volver</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    @endsection
    @push('scripts')
    <script src="{{ asset('js/parameters/user/create.js') }}"></script>
    <script>
        window.addEventListener("load", function() {
            cargarDeptos(event);
            // cargarUsuarios(event);
    }, false);
 
    //Funcion para cargar los departamentos al campo "select".
    function cargarDeptos() {
        //Inicializamos el array.
        var array = @json($deptos);
        //Ordena el array alfabeticamente.
        array.sort();
        //Pasamos a la funcion addOptions(el ID del select, las provincias cargadas en el array).
        addOptionsConcat("deptos", array);
    }
 
   </script>
    @endpush

