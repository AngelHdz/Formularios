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

Route::get('/', [Controlador::class 'welcome']);
Route::get('/primero', function () {
    return view('primero');
});
Route::get('/dos', function () {
    return view('dos');
});
Route::get('/uno', function () {
    return view('uno');
});
Route::get('/voto', function () {
    return view('voto');
});
Route::get('/trabajo', function () {
    return view('trabajo');
});
Route::get('/escuelita', function () {
    return view('escuelita');
});
Route::get('/salario', function () {
    return view('salario');
});
Route::get('/tabla', function () {
    return view('tabla');
});
Route::get('/alumnos', function () {
    return view('alumnos');
});
Route::get('/a', function () {
    return view('a');
});
Route::get('/b', function () {
    return view('b');
});
Route::get('/c', function () {
    return view('c');
});
Route::get('/d1', function () {
    return view('d1');
});
Route::get('/d2', function () {
    return view('d2');
});
Route::get('/d3', function () {
    return view('d3');
});
Route::get('/c1', function () {
    return view('c1');
});
Route::get('/c2', function () {
    return view('c2');
});
Route::get('/c3', function () {
    return view('c3');
});