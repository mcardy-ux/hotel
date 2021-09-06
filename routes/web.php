<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', App\Http\Controllers\UserController::class)->middleware(['auth']);
Route::resource('organization', App\Http\Controllers\OrganizationController::class)->middleware(['auth']);
Route::resource('data_hotel', App\Http\Controllers\DataHotelController::class)->middleware(['auth']);
Route::resource('locations', App\Http\Controllers\LocationController::class)->middleware(['auth']);
Route::resource('billing', App\Http\Controllers\BillingResolutionController::class)->middleware(['auth']);
Route::resource('bank_account', App\Http\Controllers\BankAccountController::class)->middleware(['auth']);
Route::resource('departament', App\Http\Controllers\DepartamentController::class)->middleware(['auth']);
Route::resource('sectoresHab', App\Http\Controllers\SectoresHabitacionesController::class)->middleware(['auth']);
Route::resource('tiposHab', App\Http\Controllers\TipoHabitacionesController::class)->middleware(['auth']);

//Ajax para listar las tablas del index de los parametros de configuración
Route::get('ajax/request/cities', [App\Http\Controllers\LocationController::class, 'ajaxRequestCities'])->name('ajax.request.cities')->middleware(['auth']);
Route::get('ajax/request/billing', [App\Http\Controllers\BillingResolutionController::class, 'ajaxRequestBilling'])->name('ajax.request.billing')->middleware(['auth']);
Route::get('ajax/request/bank', [App\Http\Controllers\BankAccountController::class, 'ajaxRequestBank'])->name('ajax.request.bank_account')->middleware(['auth']);
Route::get('ajax/request/user', [App\Http\Controllers\UserController::class, 'ajaxRequestUser'])->name('ajax.request.user')->middleware(['auth']);
Route::get('ajax/request/depto', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDepto'])->name('ajax.request.depto')->middleware(['auth']);
Route::get('ajax/request/sectores', [App\Http\Controllers\SectoresHabitacionesController::class, 'ajaxRequestSectores'])->name('ajax.request.sectores')->middleware(['auth']);
Route::get('ajax/request/tiposHab', [App\Http\Controllers\TipoHabitacionesController::class, 'ajaxRequestTiposHab'])->name('ajax.request.tiposHab')->middleware(['auth']);




Route::get('ajax/request/integrantes/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestIntegrantes'])->name('ajax.request.integrantes')->middleware(['auth']);


//Ajax para listar los depratamentos y ciudades
Route::get('data_hotel/request/departaments/{id}', [App\Http\Controllers\LocationController::class, 'ajaxRequestDepartaments'])->name('ajax.request.departaments')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('data_hotel/request/ciiu/{id}', [App\Http\Controllers\DataHotelController::class, 'ajaxRequestCiiu'])->name('ajax.request.ciiu')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('departament/request/depto_hotel/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDptos'])->name('ajax.request.dptos')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('user/request/depto_hotel/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDptosByHotel'])->name('ajax.request.dptosbyhotel')->middleware(['auth']);


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
