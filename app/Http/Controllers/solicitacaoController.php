<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitacao;
use App\Models\usuario;
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

        $solicitacaos = solicitacao::with('usuario')->orderBy('created_at', 'desc')->take(10)->get();

        return view('solicitacaoADM', compact('solicitacaos'), ['solicitacaos' => $solicitacaos]);
    }

    public function soliciadmtodosView()
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $solicitacaos = solicitacao::with('usuario')->orderBy('created_at', 'desc')->get();

        return view('solicitacaovertodosADM', compact('solicitacaos'), ['solicitacaos' => $solicitacaos]);
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
            
            $solicitacao->visto = now();
            $solicitacao->save();
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

    public function termo_de_doacao($id_solicitacao)
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        $solicitacao = solicitacao::find($id_solicitacao);
        $usuario = usuario::find($solicitacao->id_usuario);
        $usuario = Session::get("login_usuario")->id;

        if($solicitacao->id_usuario != $usuario)
        {
            return redirect('/');
        }

        return view('termo_doacao', ['solicitacao' => $solicitacao, 'usuario' => $usuario]);
    }
}
