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
        return ($usuarioLogado->id_tipo == 2);
    }

    public static function restringiradmAcesso() {
        $usuarioLogado = Session::get("login_usuario");
        return ($usuarioLogado->id_tipo == 1);
    }

    public static function restringirnullAcesso() {
        $usuarioLogado = Session::get("login_usuario");
        return (!$usuarioLogado);
    }

    public function soliciView()
    {
        $usuario = Session::get("login_usuario");
        
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringiradmAcesso()) {
            return redirect('/');
        }
        
        $solicitacaos = solicitacao::where('id_usuario', $usuario->id)->get();

        return view('solicitacao', ['solicitacaos' => $solicitacaos]);
    }

    public function soliciadmView()
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $solicitacaos = Solicitacao::with('usuario')->get();

        return view('solicitacaoADM', compact('solicitacaos'), ['solicitacaos' => $solicitacaos]);
    }

    public function criar_soliciView()
    {
        $usuario = Session::get("login_usuario");

        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringiradmAcesso()) {
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
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        $usuario = Session::get("login_usuario");

        if($usuario->id_tipo == 2)
        {
            $solicitacao = solicitacao::where('id_usuario', $usuario->id)->where('id', $id)->first();
        }

        if($usuario->id_tipo == 1)
        {
            $solicitacao = solicitacao::where('id', $id)->first();
        }

        if($solicitacao == null)
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
