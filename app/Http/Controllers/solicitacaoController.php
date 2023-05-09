<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitacao;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class solicitacaoController extends Controller
{
    public static function restringirAcesso() {
        $usuarioLogado = Session::get("login_usuario");
        return ($usuarioLogado->id_tipo != 1);
    }

    public function soliciView()
    {
        $usuario = Session::get("login_usuario");
        $solicitacaos = solicitacao::where('id_usuario', $usuario->id)->get();
        
        if(!$usuario)
        {
            return redirect('/');
        }

        return view('solicitacao', ['solicitacaos' => $solicitacaos]);
    }

    public function soliciadmView()
    {
        $solicitacaos = Solicitacao::with('usuario')->get();
        $usuario = Session::get("login_usuario");

        if(!$usuario)
        {
            return redirect('/');
        }

        return view('solicitacaoADM', ['solicitacaos' => $solicitacaos]);
    }

    public function criar_soliciView()
    {
        $usuario = Session::get("login_usuario");
    
        if(!$usuario)
        {
           return redirect('/');
        }

        if($usuario->id_tipo == 1)
        {
            return redirect('/');
        }

        return view('criar_solicitacao', ['usuario' => $usuario]);
    }

    public function criarSolicitacao(Request $request)
    {
        solicitacao::create($request->all());
        
        return redirect('solicitacao');
    }

    public function verSolicitacao($id)
    {
        $usuario = Session::get("login_usuario");
        $solicitacao = Solicitacao::with('usuario')->findOrFail($id);
        
        if(!$usuario)
        {
            return redirect('/');
        }
        
        return view('ver_solicitacao', ['solicitacao' => $solicitacao]);
    }

    public function deletarSolicitacao($id)
    {
        solicitacao::where('id',$id)->delete();

        return redirect('solicitacaoADM');
    }

}
