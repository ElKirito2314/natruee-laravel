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

// Rota da página principal
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])
    ->name('site.index'); 

// Rota da página de contato
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])
    ->name('site.contato');

// Rota da página de podcast
Route::get('/podcast', [\App\Http\Controllers\PodcastController::class, 'podcast'])
    ->name('site.podcast');

// Rota da página de artigos
Route::get('/artigos', [\App\Http\Controllers\ArtigoController::class, 'artigo'])
    ->name('site.artigo');

// Rota da página de termos
Route::get('/termos', [\App\Http\Controllers\TermoController::class, 'termo'])
    ->name('site.termo');