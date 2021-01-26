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
    return 'Las rutas son: "/crear", "/listar", "/*id*/editar"';
});

Route::get('/crear', function () {
    return 'Aqui creas las notas';
});

Route::get('/listar', function () {
    return 'Aqui ves todas las notas';
});

Route::get('/{id}/editar', function ($id) {
    return 'Aqui se editan notas con esta id: ' .$id;
});
