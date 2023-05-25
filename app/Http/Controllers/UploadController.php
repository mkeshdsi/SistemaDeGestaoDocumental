<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        
        $fileDocumentoIdentidade = $request->file('documentoIdentidade');
        $fileFormulario = $request->file('formulario');
     

        if ($fileFormulario && $fileDocumentoIdentidade) {
            $this->storeFormulario($request);
            $this->storeDocumento($request);
            Session::flash('success', 'Operação realizada com sucesso!');
            return redirect()->back();
        } else {
            Session::flash('error', 'Ocorreu um erro ao realizar a operação.');
            return redirect()->back();
        }

    }

    public function storeDocumento(Request $request)
    {
        $directory = 'C:\Documentos_Sistema_Gestao_Documental'; 
        $this->createDirectoryIfNotExists($directory);

        $directoryDocumentoIdentificacao = $directory."\Documentos_Identificacao";
        $this->createDirectoryIfNotExists($directoryDocumentoIdentificacao);

        $currentTime = date('Y-m-d_H-i-s');
        $fileName = $currentTime.'_'.$request->file('documentoIdentidade')->getClientOriginalName();
        $request->file('documentoIdentidade')->move($directoryDocumentoIdentificacao, $fileName);
    }

    public function storeFormulario(Request $request)
    {
        $directory = 'C:\Documentos_Sistema_Gestao_Documental'; 
        $this->createDirectoryIfNotExists($directory);

        $directoryFormulario = $directory."\Formulario";
        $this->createDirectoryIfNotExists($directoryFormulario);

        $currentTime = date('Y-m-d_H-i-s');
        $fileName = $currentTime.'_'.$request->file('formulario')->getClientOriginalName();
        $request->file('formulario')->move($directoryFormulario, $fileName);
    }

    private function createDirectoryIfNotExists($directory)
    {
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777, true);
        }
    }
}
