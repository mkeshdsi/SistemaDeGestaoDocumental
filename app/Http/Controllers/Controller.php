<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

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

    public function dashboard(){
            $totalUsers = 0;
            $totalUserAdmin = 0;
            $totalUserCorporativos = 0;
            $totalUserIndividual = 0;
           
            return view ('dashboard') 
                ->with('totalUsers',$totalUsers)
                ->with('totalUserAdmin',$totalUserAdmin)
                ->with('totalUserCorporativos',$totalUserCorporativos)
                ->with('totalUserIndividual',$totalUserIndividual);

        return view('dashboard');

      /* if (auth()->check() && (auth()->user()->can('is_admin') || auth()->user()->can('is_corporate'))){
            $totalUsers = User::count();
            $totalUserAdmin = User::where('profile',"Admnistrador")->count();
            $totalUserCorporativos = User::where('profile','Corporativo')->count();
            $totalUserIndividual = User::where('profile','Individual')->count();
           
            return view ('dashboard') 
                ->with('totalUsers',$totalUsers)
                ->with('totalUserAdmin',$totalUserAdmin)
                ->with('totalUserCorporativos',$totalUserCorporativos)
                ->with('totalUserIndividual',$totalUserIndividual);
        }else{
            return redirect()->route('home',['users' => $users]);
        } */
    }
}
