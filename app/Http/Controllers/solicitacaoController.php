<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitacao;
use Illuminate\Support\Facades\Redirect;

class solicitacaoController extends Controller
{
    public function soliciView()
    {
        $solicitacaos = solicitacao::all();
        
        return view('solicitacao', ['solicitacaos' => $solicitacaos]);
    }

    public function criar_soliciView()
    {
        return view('criar_solicitacao');
    }

    public function criarSolicitacao(Request $request)
    {
        solicitacao::create($request->all());

        return redirect('solicitacao');
    }
}
