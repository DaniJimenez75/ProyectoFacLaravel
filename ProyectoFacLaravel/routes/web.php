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
Route::get('/clientesTrabajadores','trabajadoresController@apartadoClientes');
Route::get('/trabajador/formAgregarCliente','trabajadoresController@formAgregarCliente');
Route::post('/trabajador/agregarCliente','trabajadoresController@AgregarCliente');
Route::get('/trabajador/formAgregarCliente','trabajadoresController@formAgregarCliente');

Route::get('/trabajador/formEditarCliente/{id}','trabajadoresController@formEditarCliente');
Route::post('/trabajador/editarCliente/{id}','trabajadoresController@editarCliente');








