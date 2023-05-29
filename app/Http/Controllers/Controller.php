<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Documento;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function entradaDocumentos(){
        return view('Documentos.create');
    }

    public function index_documentos(){
        $documentos = Documento::all();
    
        return view('documentos.index', compact('documentos'));
    }
}
