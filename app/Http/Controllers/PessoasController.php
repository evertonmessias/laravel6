<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;

class PessoasController extends Controller
{
    public function lista (){
        $pessoas = Pessoas::all ();
        return view ('pessoas.lista',compact ('pessoas'));
        //(pasta.arquivo , variavel)
        }
}
