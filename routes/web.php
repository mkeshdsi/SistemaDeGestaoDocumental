<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Response;


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
    return view('auth.login');
});


Route::get('/entradaDocumentos',[App\Http\Controllers\Controller::class,'entradaDocumentos']);
Route::get('/index_documentos',[App\Http\Controllers\Controller::class,'index_documentos']);

Route::get('dashboard', [App\Http\Controllers\Controller::class, 'dashboard'])->name('dashboard');

Route::post('/upload',[App\Http\Controllers\UploadController::class,'upload'])->name('upload');
Route::post('/store',[App\Http\Controllers\UploadController::class,'store'])->name('store');
Route::get('/download-documento/{id}', [App\Http\Controllers\UploadController::class,'downloadDocumento'])->name('documento.download');
Route::get('/download-formulario/{id}', [App\Http\Controllers\UploadController::class,'downloadFormulario'])->name('formulario.download');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

