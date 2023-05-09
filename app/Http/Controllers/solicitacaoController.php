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
        // if ($this->restringirnullAcesso()) {
        //     return redirect('/');
        // }

        // if ($this->restringiradmAcesso()) {
        //     return redirect('/');
        // }

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
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $solicitacaos = Solicitacao::with('usuario')->get();

        return view('solicitacaoADM', ['solicitacaos' => $solicitacaos]);
    }

    public function criar_soliciView()
    {
        // if ($this->restringirnullAcesso()) {
        //     return redirect('/');
        // }

        // if ($this->restringiradmAcesso()) {
        //     return redirect('/');
        // }

        $usuario = Session::get("login_usuario");
    
        if(!$usuario)
        {
           return redirect('/');
        }

        if($usuario->id_tipo == 1)
        {
            return redirect('/');
        }

        //a variavel $usuario é utilizada para pegar o id da sessão atual para fazer a solicitacao

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

        // qualquer usuario consegue ver as demais solicitaçoes, só trocando o id da url
        
        $solicitacao = Solicitacao::with('usuario')->findOrFail($id);
        
        return view('ver_solicitacao', ['solicitacao' => $solicitacao]);
    }

    public function deletarSolicitacao($id)
    {
        solicitacao::where('id',$id)->delete();

        return redirect('solicitacaoADM');
    }

}
