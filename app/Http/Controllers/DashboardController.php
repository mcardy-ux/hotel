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
use App\Http\Controllers\HabitacionController;
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
     $habitacions=HabitacionController::ExistenDatos();
     $comp_reg=ComponenteRegimenController::ExistenDatos();
     $regimenes=RegimenController::ExistenDatos();
     $tarifas=TarifaController::ExistenDatos();
      
     //Validaciones de datos en general
      $ExistenDatosHotel=$this->validarExistenDatosHotel();
      $ExistenDatosMercadeo=$this->validarExistenDatosMercadeo();


      //Validaciones Contabilidad
      $ExistenAgrupaciones=AgrupacionVentasController::ExistenDatos();
      $ExistenCentros=CentroController::ExistenDatos();
      $ExistenFormasPago=FormasPagoController::ExistenDatos();
      $ExistenImpuestos=ImpuestosController::ExistenDatos();
      $ExistenCodigosVenta=CodigoVentaController::ExistenDatos();
      $ExistenPlanCuentas=PlanCuentasController::ExistenDatos();

        return view('dashboard_settings',[
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
            'habitacions'=>$habitacions,
            'comp_reg'=>$comp_reg,
            'regimenes'=>$regimenes,
            'tarifas'=>$tarifas,
            'ExistenAgrupaciones'=>$ExistenAgrupaciones,
            'ExistenCentros'=>$ExistenCentros,
            'ExistenFormasPago'=>$ExistenFormasPago,
            'ExistenImpuestos'=>$ExistenImpuestos,
            'ExistenCodigosVenta'=>$ExistenCodigosVenta,
            'ExistenPlanCuentas'=>$ExistenPlanCuentas,
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
     $tarifas=TarifaController::ExistenDatos();
      if(!$tiposHab || !$SectoresHab || !$claseHab || !$comp_reg || !$regimenes || !$tarifas){
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
         $regimens=RegimenController::ExistenDatos();
         $listaMercadeo="<li><a href='".route('temporada.index')."'><i class='simple-icon-calendar'></i><span class='d-inline-block'>Temporada</span></a></li>";
      
         $tiposHab=TipoHabitacionesController::ExistenDatos();
         $SectoresHab=SectoresHabitacionesController::ExistenDatos();
         $claseHab=ClaseHabitacionesController::ExistenDatos();

         
         if (!$tiposHab || !$SectoresHab || !$claseHab) {
            $listaMercadeo= $listaMercadeo."<li><a href='".route('sectoresHab.index')."'><i class='simple-icon-directions'></i><span class='d-inline-block'>Sectores de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('tiposHab.index')."'><i class='simple-icon-list'></i><span class='d-inline-block'>Tipos de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('claseHab.index')."'><i class='simple-icon-layers'></i><span class='d-inline-block'>Clases de <br>Habitaciones</span></a></li>";
         }
         else{
            $listaMercadeo= $listaMercadeo."<li><a href='".route('sectoresHab.index')."'><i class='simple-icon-directions'></i><span class='d-inline-block'>Sectores de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('tiposHab.index')."'><i class='simple-icon-list'></i><span class='d-inline-block'>Tipos de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('claseHab.index')."'><i class='simple-icon-layers'></i><span class='d-inline-block'>Clases de <br>Habitaciones</span></a></li>".
            "<li><a href='".route('habitacions.index')."'><i class='iconsminds-project'></i><span class='d-inline-block'>Habitaciones</span></a></li>";
         }

         //Apartado Regimenes
         if(!$comp_reg){
            $listaMercadeo=$listaMercadeo."<li><a href='".route('comp_regimen.index')."'><i class='glyph-icon iconsminds-indent-first-line'></i><span class='d-inline-block'>Componentes de <br>Regimen</span></a></li>";
         }else{
            $listaMercadeo=$listaMercadeo."<li><a href='".route('comp_regimen.index')."'><i class='glyph-icon iconsminds-indent-first-line'></i><span class='d-inline-block'>Componentes de <br>Regimen</span></a></li>".
            "<li><a href='".route('regimens.index')."'><i class='simple-icon-layers'></i><span class='d-inline-block'>Regimenes</span></a></li>";
         }
         if ($tiposHab && $SectoresHab && $claseHab && $regimens) {
            $listaMercadeo=$listaMercadeo."<li><a href='".route('tarifa.index')."'><i class='glyph-icon iconsminds-coins'></i><span class='d-inline-block'>Tarifas</span></a></li>";
         }
      return $listaMercadeo;
   }

   public static function mostrarMenuContable(){

   $listaContable= "<li><a href='".route('agrupacionVentas.index')."'><i class='glyph-icon iconsminds-books'></i><span class='d-inline-block'>Agrupación de <br> Ventas</span></a></li>".
   "<li><a href='".route('centro.index')."'><i class='glyph-icon iconsminds-eci-icon'></i><span class='d-inline-block'>Centros</span></a></li>".
   "<li><a href='".route('formaPago.index')."'><i class='glyph-icon iconsminds-coins-2'></i><span class='d-inline-block'>Formas de <br>Pago</span></a></li>".
   "<li><a href='".route('impuestos.index')."'><i class='glyph-icon iconsminds-line-chart-1'></i><span class='d-inline-block'>Impuestos</span></a></li>".
   "<li><a href='".route('codigoVenta.index')."'><i class='glyph-icon iconsminds-calendar-1'></i><span class='d-inline-block'>Codigos de <br> Venta</span></a></li>".
   "<li><a href='".route('planCuentas.index')."'><i class='simple-icon-directions'></i><span class='d-inline-block'>Plan de <br>Cuentas</span></a></li>";


   return $listaContable;
}

   public static function mostrarMenuParametrosAdicion(){
      $listaParametros="<li><a href='".route('origenCliente.index')."'><i class='simple-icon-people'></i><span class='d-inline-block'>Origen de Clientes</span></a></li>".
      "<li><a href='".route('rangoEdades.index')."'><i class='glyph-icon iconsminds-link-2'></i><span class='d-inline-block'>Rango de Edades</span></a></li>".
      "<li><a href='".route('prefHuesped.index')."'><i class='glyph-icon iconsminds-target-market'></i><span class='d-inline-block'>Preferencias <br> Huespedes</span></a></li>".
      "<li><a href='".route('cupoCredito.index')."'><i class='simple-icon-credit-card'></i><span class='d-inline-block'>Cupos de <br> Credito</span></a></li>".
      "<li><a href='".route('tipoDocs.index')."'><i class='glyph-icon iconsminds-wallet'></i><span class='d-inline-block'>Tipos de <br> Documentos</span></a></li>".
      "<li><a href='".route('tipoCliente.index')."'><i class='iconsminds-affiliate'></i><span class='d-inline-block'>Tipos de <br> Cliente</span></a></li>".
      "<li><a href='".route('eventos.index')."'><i class='glyph-icon iconsminds-cocktail'></i><span class='d-inline-block'>Eventos</span></a></li>".
      "<li><a href='".route('motivoCancel.index')."'><i class='glyph-icon iconsminds-arrow-x-left'></i><span class='d-inline-block'>Motivos de <br> Cancelación</span></a></li>".
      "<li><a href='".route('motivoViaje.index')."'><i class='glyph-icon iconsminds-jeep'></i><span class='d-inline-block'>Motivos de <br> Viaje</span></a></li>".
      "<li><a href='".route('voucher.index')."'><i class='glyph-icon iconsminds-testimonal'></i><span class='d-inline-block'>Vouchers</span></a></li>";



   return $listaParametros;
   }


   public static function mostrarDatosGenrales(){
      $listaDatosGenerales="<li><a href='".route('huespedes.index')."'><i class='simple-icon-people'></i><span class='d-inline-block'>Huespedes</span></a></li>".
      "<li><a href='".route('compania.index')."'><i class='iconsminds-power-station'></i><span class='d-inline-block'>Compañias</span></a></li>";

      return $listaDatosGenerales;
   }
   
   
   



}
