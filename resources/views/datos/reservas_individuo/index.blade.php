@extends('layouts.app')

@section('content')
   
       
        <main>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
    
                        <h1>Dashboard Reserva Individual</h1>
                        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb pt-0">
                                <li class="breadcrumb-item">
                                    <a href="{{route('dashboard')}}">Inicio</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('reserva.index')}}">Reservas</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Reserva Individual</li>
                            </ol>
                        </nav>
                        <div class="separator mb-5"></div>
    
    
                    </div>
                    <div class="col-lg-12 col-xl-6">
    
                        <div class="icon-cards-row">
                            <div class="glide dashboard-numbers glide--ltr glide--slider glide--swipeable">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides" style="transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s; width: 701px; transform: translate3d(0px, 0px, 0px);">
                                        <li class="glide__slide glide__slide--active" style="width: 168.25px; margin-right: 3.5px;">
                                            <a href="{{route("reserva_individuo.create")}}" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-clock"></i>
                                                    <p class="lead text-center">Nuevo Registro</p>

                                                </div>
                                            </a>
                                        </li>
                                        <li class="glide__slide" style="width: 168.25px; margin-left: 3.5px; margin-right: 3.5px;">
                                            <a href="#" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-basket-coins"></i>
                                                    <p class="lead text-center">Consultas</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="glide__slide" style="width: 168.25px; margin-left: 3.5px; margin-right: 3.5px;">
                                            <a href="#" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-arrow-refresh"></i>
                                                    <p class="lead text-center">Disponibles</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="glide__slide" style="width: 168.25px; margin-left: 3.5px;">
                                            <a href="#" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-mail-read"></i>
                                                    <p class="lead text-center">Historico</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="card">
                                    <div class="position-absolute card-top-buttons">
                                        <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="simple-icon-refresh"></i>
                                        </button>
    
                                        <div class="dropdown-menu dropdown-menu-right mt-3">
                                            <a class="dropdown-item" href="#">Sales</a>
                                            <a class="dropdown-item" href="#">Orders</a>
                                            <a class="dropdown-item" href="#">Refunds</a>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xl-6 col-lg-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Top Viewed Posts</h5>
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row view-filter"><div class="col-sm-12"><div class="float-left"></div><div class="float-right"></div><div class="clearfix"></div></div></div><table class="data-table data-table-standard responsive nowrap dataTable no-footer dtr-inline" data-order="[[ 1, &quot;desc&quot; ]]" id="DataTables_Table_0" role="grid" style="width: 622px;">
                                    <thead>
                                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 479px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 81px;" aria-sort="descending" aria-label="Views: activate to sort column ascending">Views</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                    <tr role="row" class="odd">
                                            <td tabindex="0">
                                                <p class="list-item-heading">Wedding Cake with Flowers Macarons</p>
                                            </td>
                                            <td class="sorting_1">
                                                <p class="text-muted">1452</p>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0">
                                                <p class="list-item-heading">Cheesecake with Chocolate Cookies</p>
                                            </td>
                                            <td class="sorting_1">
                                                <p class="text-muted">1420</p>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0">
                                                <p class="list-item-heading">Homemade Cheesecake with Fresh Berries</p>
                                            </td>
                                            <td class="sorting_1">
                                                <p class="text-muted">1360</p>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0">
                                                <p class="list-item-heading">Cheesecake with Fresh Berries</p>
                                            </td>
                                            <td class="sorting_1">
                                                <p class="text-muted">1310</p>
                                            </td>
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0">
                                                <p class="list-item-heading">Tea Loaf with Fresh Oranges</p>
                                            </td>
                                            <td class="sorting_1">
                                                <p class="text-muted">1245</p>
                                            </td>
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0">
                                                <p class="list-item-heading">Cheesecake with Chocolate Cookies</p>
                                            </td>
                                            <td class="sorting_1">
                                                <p class="text-muted">1100</p>
                                            </td>
                                        </tr></tbody>
                                </table><div class="row view-pager"><div class="col-sm-12"><div class="text-center"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination pagination-sm"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link prev"><i class="simple-icon-arrow-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link next"><i class="simple-icon-arrow-right"></i></a></li></ul></div></div></div></div></div>
                            </div>
                        </div>
    
    
    
                    </div>
                </div>
            </div>
        </main>

    
@endsection
