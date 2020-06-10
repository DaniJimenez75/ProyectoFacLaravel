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
Route::post('/inicio','loginController@login');
Route::get('/cliente','loginController@paginaCliente');
Route::get('/trabajador','loginController@paginaTrabajador');

//-------------------------PAGINA TRABAJADOR--------------------------------------
Route::get('/homeTrabajadores','trabajadoresController@apartadoHome');
Route::get('/clientesTrabajadores','trabajadoresController@apartadoClientes');
Route::get('/facturasTrabajadores','trabajadoresController@apartadoFacturas');
Route::get('/albaranesTrabajadores','trabajadoresController@apartadoAlbaranes');
Route::get('/pedidosTrabajadores','trabajadoresController@apartadoPedidos');


//CLIENTES
Route::get('/trabajador/formAgregarCliente','trabajadoresController@formAgregarCliente');
Route::post('/trabajador/agregarCliente','trabajadoresController@agregarCliente');

Route::get('/trabajador/formEditarCliente/{id}','trabajadoresController@formEditarCliente');
Route::post('/trabajador/editarCliente/{id}','trabajadoresController@editarCliente');

Route::get('/trabajador/eliminarCliente/{id}','trabajadoresController@eliminarCliente');

//FACTURAS
Route::get('/facturas/formAgregarFactura','trabajadoresController@formAgregarFactura');
Route::post('/facturas/agregarFactura','trabajadoresController@agregarFactura');

Route::get('/facturas/formEditarFactura/{id}','trabajadoresController@formEditarFactura');
Route::post('/facturas/editarFactura/{id}','trabajadoresController@editarFactura');

Route::get('/facturas/eliminarFactura/{id}','trabajadoresController@eliminarFactura');




