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
//inicio
Route::get("/","ControladorInicio@index")->name("inicio");
Route::post("/añadirProyecto","ControladorInicio@store")->name("anadirProyecto");

Route::get("borrarTodo","ControladorInicio@destroy")->name("borrarTodo");

Route::get("detalles/{id}","ControladorInicio@show")->name("detalleProyecto");

//proyectos

Route::get("detalles/actualizarProyecto/{id}","ControladorProyectos@update")->name("actualizar");
Route::get("detalles/borrarProyecto/{id}","ControladorProyectos@destroy")->name("borrarProyecto");
