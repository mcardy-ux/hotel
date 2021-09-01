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
    $isNew=OrganizationController::ExistenDatos();
    $hasBilling=BillingResolutionController::ExistenDatos();
    $hasAccount=BankAccountController::ExistenDatos();
    $hasHotel=DataHotelController::ExistenDatos();
    $hasDpto=DepartamentController::ExistenDatos();
    $hasUsers=UserController::ExistenDatos();
        return view('dashboard',['isNew' => $isNew,'hasBilling'=>$hasBilling,
        'hasAccount'=>$hasAccount,'hasHotel'=>$hasHotel,'hasDpto'=>$hasDpto,
        'hasUsers'=>$hasUsers]);
   }
}
