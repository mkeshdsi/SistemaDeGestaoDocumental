<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class UploadController extends Controller
{
    private $directory;
    private $directoryDocumentoIdentificacao;
    private $directoryFormulario;
    private $fileDocumentoName;
    private $fileFormularioName;

    public function __construct()
    {
        $this->directory = 'C:\Documentos_Sistema_Gestao_Documental';
        $this->directoryDocumentoIdentificacao = $this->directory . "\Documentos_Identificacao";
        $this->directoryFormulario = $this->directory . "\Formulario";
    }
    
  

    public function upload(Request $request)
    {
        $fileDocumentoIdentidade = $request->file('documentoIdentidade');
        $fileFormulario = $request->file('formulario');

        if ($fileFormulario && $fileDocumentoIdentidade) {
          
            $this->store($request);
            Session::flash('success', 'Operação realizada com sucesso!');
            return redirect()->back();
        } else {
            Session::flash('error', 'Ocorreu um erro ao realizar a operação.');
            return redirect()->back();
        }
    }

    

    private function createDirectoryIfNotExists($directory)
    {
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777, true);
        }
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome_cliente' => 'required',
            'contacto' => 'required',
            'descricao' => 'required',
            'documentoIdentidade' => 'required|file',
            'formulario' => 'required|file',
        ]);


        $this->createDirectoryIfNotExists($this->directoryFormulario);

        $currentTime = date('Y-m-d_H-i-s') .'_'. $request->nome_cliente ;
        $fileFormularioName = $currentTime . '_' . $request->file('formulario')->getClientOriginalName();
        $request->file('formulario')->move($this->directoryFormulario, $fileFormularioName);

        $this->createDirectoryIfNotExists($this->directoryDocumentoIdentificacao);

        $currentTime = date('Y-m-d_H-i-s');
        $fileDocumentoName = $currentTime . '_' . $request->file('documentoIdentidade')->getClientOriginalName();
        $request->file('documentoIdentidade')->move($this->directoryDocumentoIdentificacao, $fileDocumentoName);

        $documento = new Documento();
        $documento->nome_cliente = $request->nome_cliente;
        $documento->contacto = $request->contacto;
        $documento->descricao = $request->descricao;
        $documento->documento_path =$this->directoryDocumentoIdentificacao  . '\\' . $fileDocumentoName;
        $documento->formulario_path =$this->directoryFormulario  . '\\' . $fileFormularioName;


        $documento->save();

       // Session::flash('success', 'Operação realizada com sucesso!');
       // return redirect()->back();
    }
}
