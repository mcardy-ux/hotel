<?php

namespace App\Http\Controllers;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\BillingResolutionController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\DataHotelController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(){
      $listaHotel=$this->mostrarMenuHotel();
      $listaMercadeo=$this->mostrarMenuMercadeo();
      $ExistenDatosHotel=$this->validarExistenDatosHotel();
        return view('dashboard',[
           'listaHotel' => $listaHotel,
           'listaMercadeo'=>$listaMercadeo,
           'ExistenDatosHotel'=> $ExistenDatosHotel
         ]);
   }

   public function validarExistenDatosHotel(){
      $isNew=OrganizationController::ExistenDatos();
      $hasBilling=BillingResolutionController::ExistenDatos();
      $hasAccount=BankAccountController::ExistenDatos();
      $hasHotel=DataHotelController::ExistenDatos();
      $hasDpto=DepartamentController::ExistenDatos();
      $hasUsers=UserController::ExistenDatos();
      if($isNew==0 || $hasBilling==0 || $hasAccount==0 || !$hasHotel || !$hasDpto|| !$hasUsers){
         return false;
      }else{
         return true;
      }

   }


   public function mostrarMenuHotel(){
      $isNew=OrganizationController::ExistenDatos();
      $hasBilling=BillingResolutionController::ExistenDatos();
      $hasAccount=BankAccountController::ExistenDatos();
      $hasHotel=DataHotelController::ExistenDatos();
      $hasDpto=DepartamentController::ExistenDatos();
      $hasUsers=UserController::ExistenDatos();
      
         $listaHotel="";
      if($isNew==0){
         $listaHotel=" <li><a href'".route('organization.create')."'><i class='simple-icon-globe'></i> 
         <span class='d-inline-block'>Organización</span></a> </li>";
      }elseif($hasBilling==0 || $hasAccount==0){
         $listaHotel="<li><a href='".route('organization.index')."'><i class='simple-icon-globe'></i> <span class='d-inline-block'>Organización</span> </a> </li>".
         " <li><a href='".route('billing.index')."'><i class='simple-icon-doc'></i> <span class='d-inline-block'>Resoluciones de <br>Facturación</span></a></li>".
         "<li><a href='".route('bank_account.index')."'><i class='iconsminds-bank'></i> <span class='d-inline-block'>Cuentas Bancarias</span></a></li>";
         
      }elseif($hasHotel==0 && $hasBilling==1 && $hasAccount==1 && $isNew==1){
         $listaHotel=" <li><a href='".route('organization.index')."'><i class='simple-icon-globe'></i> <span class='d-inline-block'>Organización</span> </a> </li>".
         " <li><a href='".route('billing.index')."'><i class='simple-icon-doc'></i> <span class='d-inline-block'>Resoluciones de <br>Facturación</span></a></li>".
         "<li><a href='".route('bank_account.index')."'><i class='iconsminds-bank'></i> <span class='d-inline-block'>Cuentas Bancarias</span></a></li>".
         " <li><a href='".route('data_hotel.index')."'><i class='iconsminds-hotel'></i> <span class='d-inline-block'>Hotel</span></a></li>";
      }elseif($hasDpto==0 && $hasHotel==1 && $hasBilling==1 && $hasAccount==1 && $isNew==1){
         $listaHotel=" <li><a href='".route('organization.index')."'><i class='simple-icon-globe'></i> <span class='d-inline-block'>Organización</span> </a> </li>".
         " <li><a href='".route('billing.index')."'><i class='simple-icon-doc'></i> <span class='d-inline-block'>Resoluciones de <br>Facturación</span></a></li>".
         "<li><a href='".route('bank_account.index')."'><i class='iconsminds-bank'></i> <span class='d-inline-block'>Cuentas Bancarias</span></a></li>".
         " <li><a href='".route('data_hotel.index')."'><i class='iconsminds-hotel'></i> <span class='d-inline-block'>Hotel</span></a></li>".
         " <li><a href='".route('departament.index')."'><i class='iconsminds-server-2'></i> <span class='d-inline-block'>Departamentos</span></a></li>";
      }elseif ($hasUsers==0 && $hasDpto==1 && $hasHotel==1 && $hasBilling==1 && $hasAccount==1 && $isNew==1) {
         $listaHotel=" <li><a href='".route('organization.index')."'><i class='simple-icon-globe'></i> <span class='d-inline-block'>Organización</span> </a> </li>".
         " <li><a href='".route('billing.index')."'><i class='simple-icon-doc'></i> <span class='d-inline-block'>Resoluciones de <br>Facturación</span></a></li>".
         "<li><a href='".route('bank_account.index')."'><i class='iconsminds-bank'></i> <span class='d-inline-block'>Cuentas Bancarias</span></a></li>".
         " <li><a href='".route('data_hotel.index')."'><i class='iconsminds-hotel'></i> <span class='d-inline-block'>Hotel</span></a></li>".
         " <li><a href='".route('departament.index')."'><i class='iconsminds-server-2'></i> <span class='d-inline-block'>Departamentos</span></a></li>".
         "<li><a href='".route('user.index')."'><i class='simple-icon-people'></i> <span class='d-inline-block'>Usuarios</span> </a></li>";
      }elseif ($hasUsers==1 && $hasDpto==1 && $hasHotel==1 && $hasBilling==1 && $hasAccount==1 && $isNew==1) {
         $listaHotel=" <li><a href='".route('organization.index')."'><i class='simple-icon-globe'></i> <span class='d-inline-block'>Organización</span> </a> </li>".
         " <li><a href='".route('billing.index')."'><i class='simple-icon-doc'></i> <span class='d-inline-block'>Resoluciones de <br>Facturación</span></a></li>".
         "<li><a href='".route('bank_account.index')."'><i class='iconsminds-bank'></i> <span class='d-inline-block'>Cuentas Bancarias</span></a></li>".
         " <li><a href='".route('data_hotel.index')."'><i class='iconsminds-hotel'></i> <span class='d-inline-block'>Hotel</span></a></li>".
         " <li><a href='".route('departament.index')."'><i class='iconsminds-server-2'></i> <span class='d-inline-block'>Departamentos</span></a></li>".
         "<li><a href='".route('user.index')."'><i class='simple-icon-people'></i> <span class='d-inline-block'>Usuarios</span> </a></li>";
      }
      
      return $listaHotel;
   }
   public function mostrarMenuMercadeo(){
         $listaMercadeo="";
      
         $listaMercadeo="<li><a href='".route('sectoresHab.index')."'><i class='simple-icon-organization'></i><span class='d-inline-block'>Sectores de <br>Habitaciones</span></a></li>".
         "<li><a href='".route('tiposHab.index')."'><i class='simple-icon-organization'></i><span class='d-inline-block'>Tipos de <br>Habitaciones</span></a></li>";
         
      
      return $listaMercadeo;
   }
}
