@extends('layouts.appIniEdit')

@section('content')
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Agrupación de ventas</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{route('agrupacionVentas.index')}}">Listado</a>
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
                            <h5 class="mb-4">Edite la información necesaria.</h5>
                            <form role="form" id="edit_data_agrupacionVentas" name="edit_data_agrupacionVentas" >
                            <input type="hidden" id="_url"  value="{{ url('agrupacionVentas', [$data->encode_id])}}">
                            <input type="hidden" id="_token" name="_token"  value="{{ csrf_token() }}">
                            <input type="hidden" id="id_user_modify" name="id_user_modify" value="{{ Auth::user()->id }}">
                                <div class="form-row">
                                
                                    
                                    <div class="form-group col-md-12">
                                        <label for="edit_descripcion">Descripción:</label>
                                        <input type="text" class="form-control"  id="edit_descripcion" name="edit_descripcion" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$data->descripcion}}">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary mb-0">Editar</button>
                                <a href="{{ route('agrupacionVentas.index') }}"> 
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
    <script src="{{ asset('js/parameters/agrupacionVentas/edit.js') }}"></script>
    @endpush
