<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
       
        $fileDocumentoIdentidade = $request->file('documentoIdentidade');
     
        if ($fileDocumentoIdentidade) {
            $this->storeDocumento($request);
            return 'Documento enviado com sucesso.';
        } else {
            return 'Nenhum documento foi selecionado.';
        }
    }

    public function storeDocumento(Request $request)
    {
        $directory = 'C:\Documentos_Sistema_Gestao_Documental'; 
        $this->createDirectoryIfNotExists($directory);
        $fileName = $request->file('documentoIdentidade')->getClientOriginalName();
        $request->file('documentoIdentidade')->move($directory, $fileName);
    }

    private function createDirectoryIfNotExists($directory)
    {
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777, true);
        }
    }
}
