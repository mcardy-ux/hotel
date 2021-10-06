
@extends('layouts.app')

@section('content')
   
        @if(!$ExistenDatosHotel || !$ExistenDatosMercadeo)
        
        @include('layouts.master.init_parameters');
     
        @else
        
        @endif

    
@endsection
