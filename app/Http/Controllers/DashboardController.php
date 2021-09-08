<?php

namespace App\Http\Controllers;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\BillingResolutionController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\DataHotelController;
use App\Http\Controllers\DepartamentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TipoHabitacionesController;
use App\Http\Controllers\SectoresHabitacionesController;
use App\Http\Controllers\ClaseHabitacionesController;
use App\Http\Controllers\RegimenController;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
   public function index(){
      $isNew=OrganizationController::ExistenDatos();
      $hasBilling=BillingResolutionController::ExistenDatos();
      $hasAccount=BankAccountController::ExistenDatos();
      $hasHotel=DataHotelController::ExistenDatos();
      $hasDpto=DepartamentController::ExistenDatos();
      $hasUsers=UserController::ExistenDatos();
      
     //Mercadeo
     $tiposHab=TipoHabitacionesController::ExistenDatos();
     $SectoresHab=SectoresHabitacionesController::ExistenDatos();
     $claseHab=ClaseHabitacionesController::ExistenDatos();
     $comp_reg=ComponenteRegimenController::ExistenDatos();
     $regimenes=RegimenController::ExistenDatos();
      
     //Validaciones de datos en general
      $ExistenDatosHotel=$this->validarExistenDatosHotel();
      $ExistenDatosMercadeo=$this->validarExistenDatosMercadeo();
        return view('dashboard',[
           'ExistenDatosHotel'=> $ExistenDatosHotel,
           'ExistenDatosMercadeo'=>$ExistenDatosMercadeo,
            'isNew'=>$isNew,
            'hasBilling'=>$hasBilling,
            'hasAccount'=>$hasAccount,
            'hasHotel'=>$hasHotel,
            'hasDpto'=>$hasDpto,
            'hasUsers'=>$hasUsers,
            'tiposHab'=>$tiposHab,
            'SectoresHab'=>$SectoresHab,
            'claseHab'=>$claseHab,
            'comp_reg'=>$comp_reg,
            'regimenes'=>$regimenes,
         ]);
   }

   public static function validarExistenDatosHotel(){
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
   public static function validarExistenDatosMercadeo(){
      //Mercadeo
     $tiposHab=TipoHabitacionesController::ExistenDatos();
     $SectoresHab=SectoresHabitacionesController::ExistenDatos();
     $claseHab=ClaseHabitacionesController::ExistenDatos();
     $comp_reg=ComponenteRegimenController::ExistenDatos();
     $regimenes=RegimenController::ExistenDatos();
      if(!$tiposHab || !$SectoresHab || !$claseHab || !$comp_reg || !$regimenes){
         return false;
      }else{
         return true;
      }

   }


   public static function mostrarMenuHotel(){
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
   public static function mostrarMenuMercadeo(){
         $comp_reg=ComponenteRegimenController::ExistenDatos();
         $listaMercadeo="";
      
        
         if(!$comp_reg){
            $listaMercadeo="<li><a href='".route('comp_regimen.index')."'><i class='glyph-icon iconsminds-indent-first-line'></i><span class='d-inline-block'>Componentes de <br>Regimen</span></a></li>".
            "<li><a href='".route('sectoresHab.index')."'><i class='simple-icon-directions'></i><span class='d-inline-block'>Sectores de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('tiposHab.index')."'><i class='simple-icon-list'></i><span class='d-inline-block'>Tipos de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('claseHab.index')."'><i class='simple-icon-layers'></i><span class='d-inline-block'>Clases de <br>Habitaciones</span></a></li>";
         }else{
            $listaMercadeo="<li><a href='".route('comp_regimen.index')."'><i class='glyph-icon iconsminds-indent-first-line'></i><span class='d-inline-block'>Componentes de <br>Regimen</span></a></li>".
            "<li><a href='".route('regimens.index')."'><i class='simple-icon-layers'></i><span class='d-inline-block'>Regimenes</span></a></li>".
            "<li><a href='".route('sectoresHab.index')."'><i class='simple-icon-directions'></i><span class='d-inline-block'>Sectores de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('tiposHab.index')."'><i class='simple-icon-list'></i><span class='d-inline-block'>Tipos de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('claseHab.index')."'><i class='simple-icon-layers'></i><span class='d-inline-block'>Clases de <br>Habitaciones</span></a></li>";
         }
      
      return $listaMercadeo;
   }
}
