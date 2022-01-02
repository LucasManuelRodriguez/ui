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
    // return view('welcome');
    return 'Bienvenido';
});

Route::get('cursos', function(){
    return 'página de cursos';
});

Route::get('cursos/create', function(){
    return 'En esta página podrás crear un curso';
});

Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria=null){
    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }
    else{ return "Bienvenido al curso $curso";}
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
