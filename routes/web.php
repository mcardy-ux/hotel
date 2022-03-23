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
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//****** */
//PARAMETRO DE CONFIGURACION
//**** */

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
Route::get('temporada', [App\Http\Controllers\TemporadaController::class, 'index'])->name('temporada.index')->middleware(['auth']);
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
Route::resource('formaPago', App\Http\Controllers\FormasPagoController::class)->middleware(['auth']);
Route::resource('impuestos', App\Http\Controllers\ImpuestosController::class)->middleware(['auth']);
Route::resource('agrupacionVentas', App\Http\Controllers\AgrupacionVentasController::class)->middleware(['auth']);
Route::resource('centro', App\Http\Controllers\CentroController::class)->middleware(['auth']);
Route::resource('codigoVenta', App\Http\Controllers\CodigoVentaController::class)->middleware(['auth']);

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

//Ajax de listado para modulos de contabilidad
Route::get('ajax/request/planCuentas', [App\Http\Controllers\PlanCuentasController::class, 'ajaxRequestplanCuentas'])->name('ajax.request.planCuentas')->middleware(['auth']);
Route::get('ajax/request/formaPago', [App\Http\Controllers\FormasPagoController::class, 'ajaxRequestformaPago'])->name('ajax.request.formaPago')->middleware(['auth']);
Route::get('ajax/request/impuestos', [App\Http\Controllers\ImpuestosController::class, 'ajaxRequestimpuestos'])->name('ajax.request.impuestos')->middleware(['auth']);
Route::get('ajax/request/agrupacionVentas', [App\Http\Controllers\AgrupacionVentasController::class, 'ajaxRequestagrupacionVentas'])->name('ajax.request.agrupacionVentas')->middleware(['auth']);
Route::get('ajax/request/centro', [App\Http\Controllers\CentroController::class, 'ajaxRequestCentro'])->name('ajax.request.centro')->middleware(['auth']);
Route::get('ajax/request/codigoVenta', [App\Http\Controllers\CodigoVentaController::class, 'ajaxRequestcodigoVenta'])->name('ajax.request.codigoVenta')->middleware(['auth']);


Route::get('ajax/request/integrantes/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestIntegrantes'])->name('ajax.request.integrantes')->middleware(['auth']);
Route::get('ajax/request/components_regimen/{id}', [App\Http\Controllers\RegimenController::class, 'ajaxRequestComponents'])->name('ajax.request.components')->middleware(['auth']);
Route::get('ajax/request/getCentros/{id}', [App\Http\Controllers\PlanCuentasController::class, 'getCentros'])->name('ajax.request.getCentros')->middleware(['auth']);

//Ajax para listar los depratamentos y ciudades
Route::get('data_hotel/request/departaments/{id}', [App\Http\Controllers\LocationController::class, 'ajaxRequestDepartaments'])->name('ajax.request.departaments')->middleware(['auth']);

//Ajax para listar los codigos ciiu
Route::get('data_hotel/request/ciiu/{id}', [App\Http\Controllers\DataHotelController::class, 'ajaxRequestCiiu'])->name('ajax.request.ciiu')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('departament/request/depto_hotel/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDptos'])->name('ajax.request.dptos')->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('user/request/depto_hotel/{id}', [App\Http\Controllers\DepartamentController::class, 'ajaxRequestDptosByHotel'])->name('ajax.request.dptosbyhotel')->middleware(['auth']);

//Ajax para agregar temporadas
Route::post('add_temporada', [App\Http\Controllers\TemporadaController::class, 'store'])->middleware(['auth']);
//Ajax para mostrar el listado de huespedes a buscar

Route::get('ajax/request/showGuests/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'getDataManyGuests'])->name('ajax.request.showGuests')->middleware(['auth']);
Route::get('ajax/request/showGuests', function () {
    return false;
})->name('ajax.ruta.showGuests')->middleware(['auth']);
Route::get('reserva_individuo/findGuest/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'findGuest'])->name('ajax.ruta.findGuest')->middleware(['auth']);
Route::get('reserva_individuo/findFullDataGuest/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'findFullDataGuest'])->name('ajax.ruta.findFullDataGuest')->middleware(['auth']);
//Agencia
Route::get('ajax/request/showAgencia/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'getDataManyAgencias'])->name('ajax.request.showGuests')->middleware(['auth']);
Route::get('ajax/request/showAgencia', function () {
    return false;
})->name('ajax.ruta.showAgencia')->middleware(['auth']);
Route::get('reserva_individuo/findAgencia/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'findAgencia'])->name('ajax.ruta.findAgencia')->middleware(['auth']);
//Plan
Route::get('ajax/request/showPlan/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'getDataManyPlans'])->name('ajax.request.showPlan')->middleware(['auth']);
Route::get('ajax/request/showPlan', function () {
    return false;
})->name('ajax.ruta.showPlan')->middleware(['auth']);
Route::get('reserva_individuo/findPlan/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'findPlan'])->name('ajax.ruta.findAgencia')->middleware(['auth']);
Route::get('reserva_individuo/calculateValue/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'calculateValue'])->name('ajax.ruta.calculateValue')->middleware(['auth']);

//Habitaciones
Route::get('ajax/request/showHabs/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'getDataManyHabs'])->name('ajax.request.showPlan')->middleware(['auth']);
Route::get('ajax/request/showHabs', function () {
    return false;
})->name('ajax.ruta.showHabs')->middleware(['auth']);
Route::get('reserva_individuo/findHabitacion/{data}', [App\Http\Controllers\ReservaIndividuoController::class, 'findHabitacion'])->name('ajax.ruta.findHabitacion')->middleware(['auth']);


Route::get('/dash_settings', [App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth'])->name('dash_settings');
//****** */
// FIN DE PARAMETROS DE CONFIGURACION
//**** */


//****** */
//PARAMETRO DE DATOS GENERALES
//**** */

Route::resource('compania', App\Http\Controllers\CompaniaController::class)->middleware(['auth']);
Route::resource('huespedes', App\Http\Controllers\HuespedController::class)->middleware(['auth']);
Route::resource('agencias', App\Http\Controllers\AgenciasController::class)->middleware(['auth']);
Route::resource('reserva', App\Http\Controllers\ReservaController::class)->middleware(['auth']);
Route::resource('reserva_individuo', App\Http\Controllers\ReservaIndividuoController::class)->middleware(['auth']);

Route::get('huespedes/request/citiesEstado/{id}', [App\Http\Controllers\LocationController::class, 'ajaxRequestCitiesByEstado'])->name('ajax.request.citiesByEstado')->middleware(['auth']);
// Ajax para listar los huespedes
Route::get('ajax/request/huespedes/{id}', [App\Http\Controllers\HuespedController::class, 'ajaxRequestHuespedes'])->name('ajax.request.huespedes')->middleware(['auth']);
Route::get('ajax/request/huespedes', function () {
    return false;
})->name('ajax.ruta.huespedes')->middleware(['auth']);
// Ajax para listar las compañias
Route::get('ajax/request/companias', [App\Http\Controllers\CompaniaController::class, 'ajaxRequestCompanias'])->name('ajax.request.companias')->middleware(['auth']);
Route::get('ajax/request/agencias', [App\Http\Controllers\AgenciasController::class, 'ajaxRequestAgencias'])->name('ajax.request.agencias')->middleware(['auth']);

Route::get('compania/request/citiesEstado/{id}', [App\Http\Controllers\LocationController::class, 'ajaxRequestCitiesByEstado'])->middleware(['auth']);
//Ajax para listar los codigos ciiu
Route::get('compania/request/ciiu/{id}', [App\Http\Controllers\DataHotelController::class, 'ajaxRequestCiiu'])->middleware(['auth']);
Route::get('reserva_individuo/request/citiesEstado/{id}', [App\Http\Controllers\LocationController::class, 'ajaxRequestCitiesByEstado'])->name('ajax.request.citiesByReserva')->middleware(['auth']);





//****** */
//FIN DE PARAMETROS DE DATOS GENERALES
//**** */


require __DIR__ . '/auth.php';
