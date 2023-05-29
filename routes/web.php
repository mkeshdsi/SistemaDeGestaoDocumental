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
    return view('welcome');
});

Route::get('/entradaDocumentos',[App\Http\Controllers\Controller::class,'entradaDocumentos']);
Route::get('/index_documentos',[App\Http\Controllers\Controller::class,'index_documentos']);

Route::post('/upload',[App\Http\Controllers\UploadController::class,'upload'])->name('upload');
Route::post('/store',[App\Http\Controllers\UploadController::class,'store'])->name('store');
//Route::post('/download-arquivos/{id}', 'UploadController@downloadArquivos')->name('download.arquivos');
//Route::post('/download-arquivos/{id}',[App\Http\Controllers\UploadController::class,'downloadArquivos'])->name('download.arquivos');

Route::get('/download-documento/{id}', [App\Http\Controllers\UploadController::class,'downloadDocumento'])->name('documento.download');
Route::get('/download-formulario/{id}', [App\Http\Controllers\UploadController::class,'downloadFormulario'])->name('formulario.download');

Route::get('/teste', function(){
    $filePath = 'C:\Documentos_Sistema_Gestao_Documental\Formulario\teste.txt';
    $fileName = 'teste.txt';

    return Response::download($filePath, $fileName);
});




