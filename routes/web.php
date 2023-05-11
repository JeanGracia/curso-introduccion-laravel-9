<?php

//Clases importadas
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/***
 * --------------------------------------------------------------------------
 * Web Routes
 * --------------------------------------------------------------------------
 *
 * Route::get()    |  Consultar
 * Route::post()   |  Guardar
 * Route::delete() |  Eliminar
 * Route::put()    |  Actualizar
 */


/*Route::get('/', function () {
    return view('welcome');
});*/
/**
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('blog', [PageController::class, 'blog'])->name('blog');
Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
 */

Route::controller(PageController::class)->group(callback: function (){
    Route::get('/',          'home')->name('home');
    Route::get('blog',       'blog')->name('blog');
    Route::get('blog/{slug}','post')->name('post');
});
