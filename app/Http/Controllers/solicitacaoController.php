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

    public function editarSolicitacao($id)
    {
        $solicitacaos = solicitacao::where('id', $id)->first();

        if(!empty($solicitacaos))
        {
            return view('editar_solicitacao', ['solicitacaos'=>$solicitacaos]);
        }

        return redirect('solicitacao');
    }

    public function atualizarSolicitacao(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'telefone1' => $request->telefone1,
            'telefone2' => $request->telefone2,
            'endereco' => $request->endereco,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'curso' => $request->curso,
            'rm' => $request->rm,
            'descpedido' => $request->descpedido,
        ];

        solicitacao::where('id',$id)->update($data);

        return redirect('solicitacao');
    }

    public function deletarSolicitacao($id)
    {
        solicitacao::where('id',$id)->delete();

        return redirect('solicitacao');
    }

}
