<?php

use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get | Consultamos cositas 
 * Route::post | Creamos/guardamos cositas
 * Route::delete | Eliminamos cositas
 * Route::put | Actualizamos cositas
 */

Route::controller(BlogController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
})

?>