<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

/*

Route::get('/', function () { return view('welcome'); }); */


//Route::name('base')->get('base', function(){return view('base');});
//Route::name('base')->get('/',[UsuariosController::class, 'base']);

/*************************************************************************************************************/
/********************************** Rutas: Usuarios ******************************************************/
Route::name('lista_usuarios')->get('/',[UsuariosController::class, 'usuarios']);

/***************************************** Rutas: Nuevo ***************************************************/
Route::name('alta')->get('alta',[UsuariosController::class, 'alta']);
Route::name('registrar')->post('registrar',[UsuariosController::class, 'registrar']);

/******************************************* Rutas: Detalle **********************************************/
Route::name('detalle')->get('detalle/{id}',[UsuariosController::class, 'detalle']);

/********************************************** Rutas: Editar *******************************************/
Route::name('editar')->get('editar/{id}',[UsuariosController::class, 'editar']);
Route::name('salvar')->put('salvar/{id}',[UsuariosController::class, 'salvar']);

/************************************************ Rutas: Borrar ********************************************/
//Route::name('borrar')->delete('borrar/{id}',[UsuariosController::class, 'borrar']);
Route::name('borrar')->get('borrar/{id}',[UsuariosController::class, 'borrar']);


