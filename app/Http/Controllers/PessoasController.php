<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoas;

class PessoasController extends Controller
{
    public function lista()
    {
        $pessoas = Pessoas::all();
        return view('pessoas.lista', compact('pessoas'));
        //(pasta.arquivo , variavel)
    }

    public function criar()
    {
        return view('pessoas.criar');
    }

    public function contato()
    {
        return view('pessoas.contato');
    }

    public function show(Pessoas $pessoas)
    {
        return view('pessoas.show', compact('pessoas'));
    }

    public function store(Request $request)
    {
        //$pessoas = new Pessoas();
        //$pessoas->nome = $request['nome'];
        //$pessoas->telefone = $request['telefone'];
        //$pessoas->save();
        //return back();
        if ($request['nome'] && $request['telefone']) {
            $nome = $request['nome'];
            $telefone = $request['telefone'];
            DB::table('pessoass')->insert(['nome' => $nome, 'telefone' => $telefone]);
            return redirect('lista');
        } else {
            return view('pessoas.criar');
        }
    }

    public function edit(Pessoas $pessoas)
    {
        return view('pessoas.edit', compact('pessoas'));
    }


    public function del(Pessoas $pessoas)
    {
        return view('pessoas.del', compact('pessoas'));
    }

    public function update(Request $request, Pessoas $pessoas)
    {
        if ($request['nome'] && $request['telefone']) {
            $nome = $request['nome'];
            $telefone = $request['telefone'];
            DB::table('pessoass')
                ->where('id', $pessoas->id)
                ->update(['nome' => $nome, 'telefone' => $telefone]);
            return redirect('lista');
        } else {
            echo "<script>window.location.href='/';</script>";
        }
    }

    public function destroy(Pessoas $pessoas)
    {
        //$pessoas->delete();
        DB::table('pessoass')->where('id', $pessoas->id)->delete();
        // CUIDADO APAGA TUDO ===> DB::table('pessoass')->truncate();
        return redirect('lista');
    }
}
