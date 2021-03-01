<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Notas;
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
    $notas = Notas::all();     //DB::table('notas')->get();

    return view('notas', ['notas' => $notas]);
});

Route::get('/agregar', function () {
    return view('agregar');
});

Route::get('/notas/{id}/editar', function ($id) {
    $notas = Notas::find($id)->where('id', $id)->get();


    /*DB::table('notas')
    ->where('id', $id)
    >get();*/

    return view('agregar', ['notas' => $notas]);
})->name('notas.edit');

