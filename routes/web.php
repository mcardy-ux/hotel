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
Route::resource('claseHab', App\Http\Controllers\ClaseHabitacionesController::class)->middleware(['auth']);
Route::resource('habitacions', App\Http\Controllers\HabitacionController::class)->middleware(['auth']);

Route::resource('comp_regimen', App\Http\Controllers\ComponenteRegimenController::class)->middleware(['auth']);
Route::resource('regimens', App\Http\Controllers\RegimenController::class)->middleware(['auth']);
Route::get('temporada', [App\Http\Controllers\TemporadaController::class, 'index'] )->name('temporada.index')->middleware(['auth']);
Route::resource('tarifa', App\Http\Controllers\TarifaController::class)->middleware(['auth']);
//Recursos para otros parametros
Route::resource('origenCliente', App\Http\Controllers\OrigenClienteController::class)->middleware(['auth']);
Route::resource('rangoEdades', App\Http\Controllers\RangoEdadesController::class)->middleware(['auth']);
Route::resource('prefHuesped', App\Http\Controllers\PreferenciaHuespedController::class)->middleware(['auth']);
Route::resource('cupoCredito', App\Http\Controllers\CupoCreditoController::class)->middleware(['auth']);
Route::resource('tipoDocs', App\Http\Controllers\TipoDocumentoController::class)->middleware(['auth']);
Route::resource('tipoCliente', App\Http\Controllers\TipoClienteController::class)->middleware(['auth']);
Route::resource('eventos', App\Http\Controllers\EventosController::class)->middleware(['auth']);
Route::resource('motivoCancel', App\Http\Controllers\MotivoCancelacionController::class)->middleware(['auth']);
Route::resource('motivoViaje', App\Http\Controllers\MotivoViajeController::class)->middleware(['auth']);
Route::resource('voucher', App\Http\Controllers\VoucherController::class)->middleware(['auth']);

//Recursos para contabilidad
Route::resource('planCuentas', App\Http\Controllers\PlanCuentasController::class)->middleware(['auth']);



//Ajax para listar las tablas del index de los parametros de configuración
Route::get('ajax/request/cities', [App\Http\Controllers\LocationController::class, 'ajaxRequestCities'])->name('ajax.request.cities')->middleware(['auth']);
Route::get('ajax/request/billing', [App\Http\Controllers\BillingResolutionController::class, 'ajaxRequestBilling'])->name('ajax.request.billing')->middleware(['auth']);
Route::get('ajax/request/bank', [App\Http\Controllers\BankAccountController::class, 'ajaxRequestBank'])->name('ajax.request.bank_account')->middleware(['auth']);
Route::get('ajax/request/user', [App\Http\Controllers\UserController::class, 'ajaxRequestUser'])->name('ajax.request.user')->middleware(['auth']);
Route::get('ajax/request/depto', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDepto'])->name('ajax.request.depto')->middleware(['auth']);
Route::get('ajax/request/sectores', [App\Http\Controllers\SectoresHabitacionesController::class, 'ajaxRequestSectores'])->name('ajax.request.sectores')->middleware(['auth']);
Route::get('ajax/request/tiposHab', [App\Http\Controllers\TipoHabitacionesController::class, 'ajaxRequestTiposHab'])->name('ajax.request.tiposHab')->middleware(['auth']);
Route::get('ajax/request/claseHab', [App\Http\Controllers\ClaseHabitacionesController::class, 'ajaxRequestClasesHab'])->name('ajax.request.claseHab')->middleware(['auth']);
Route::get('ajax/request/comp_regimen', [App\Http\Controllers\ComponenteRegimenController::class, 'ajaxRequestComp_regimen'])->name('ajax.request.comp_regimen')->middleware(['auth']);
Route::get('ajax/request/origenes', [App\Http\Controllers\OrigenClienteController::class, 'ajaxRequestOrigenes'])->name('ajax.request.origenes')->middleware(['auth']);
Route::get('ajax/request/rangoEdades', [App\Http\Controllers\RangoEdadesController::class, 'ajaxRequestrangoEdades'])->name('ajax.request.rangoEdades')->middleware(['auth']);
Route::get('ajax/request/preferences', [App\Http\Controllers\PreferenciaHuespedController::class, 'ajaxRequestPefrences'])->name('ajax.request.preferences')->middleware(['auth']);
Route::get('ajax/request/cupos', [App\Http\Controllers\CupoCreditoController::class, 'ajaxRequestCupos'])->name('ajax.request.cupos')->middleware(['auth']);
Route::get('ajax/request/tipoDocs', [App\Http\Controllers\TipoDocumentoController::class, 'ajaxRequestTipoDocs'])->name('ajax.request.tipoDocs')->middleware(['auth']);
Route::get('ajax/request/tipoCliente', [App\Http\Controllers\TipoClienteController::class, 'ajaxRequestTipoCliente'])->name('ajax.request.tipoCliente')->middleware(['auth']);
Route::get('ajax/request/eventos', [App\Http\Controllers\EventosController::class, 'ajaxRequestEventos'])->name('ajax.request.eventos')->middleware(['auth']);
Route::get('ajax/request/motivoCancel', [App\Http\Controllers\MotivoCancelacionController::class, 'ajaxRequestmotivoCancel'])->name('ajax.request.motivoCancel')->middleware(['auth']);
Route::get('ajax/request/motivoViaje', [App\Http\Controllers\MotivoViajeController::class, 'ajaxRequestmotivoViaje'])->name('ajax.request.motivoViaje')->middleware(['auth']);
Route::get('ajax/request/voucher', [App\Http\Controllers\VoucherController::class, 'ajaxRequestvoucher'])->name('ajax.request.voucher')->middleware(['auth']);
Route::get('ajax/request/planCuentas', [App\Http\Controllers\PlanCuentasController::class, 'ajaxRequestplanCuentas'])->name('ajax.request.planCuentas')->middleware(['auth']);


Route::get('ajax/request/integrantes/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestIntegrantes'])->name('ajax.request.integrantes')->middleware(['auth']);
Route::get('ajax/request/components_regimen/{id}', [App\Http\Controllers\RegimenController::class, 'ajaxRequestComponents'])->name('ajax.request.components')->middleware(['auth']);

//Ajax para listar los depratamentos y ciudades
Route::get('data_hotel/request/departaments/{id}', [App\Http\Controllers\LocationController::class, 'ajaxRequestDepartaments'])->name('ajax.request.departaments')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('data_hotel/request/ciiu/{id}', [App\Http\Controllers\DataHotelController::class, 'ajaxRequestCiiu'])->name('ajax.request.ciiu')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('departament/request/depto_hotel/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDptos'])->name('ajax.request.dptos')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('user/request/depto_hotel/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDptosByHotel'])->name('ajax.request.dptosbyhotel')->middleware(['auth']);

//Ajax para agregar temporadas
Route::post('add_temporada', [App\Http\Controllers\TemporadaController::class,'store'])->middleware(['auth']);




Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
