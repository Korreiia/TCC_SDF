<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitacao;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
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
        $solicitacaos = $usuario->solicitacao;
        // $usuario->solicitacaos;
        
        if(!$usuario)
        {
            return redirect('/');
        }

        return view('solicitacao', ['solicitacaos' => $solicitacaos]);
    }

    public function criar_soliciView()
    {
        $usuario = Session::get("login_usuario");

        if(!$usuario)
        {
            return redirect('/');
        }

        return view('criar_solicitacao', ['usuario' => $usuario]);
    }

    public function criarSolicitacao(Request $request)
    {
        solicitacao::create($request->all());
        $usuario = Session::get("login_usuario");
        $solicitacaos = $usuario->solicitacao;

        return redirect('solicitacao')->with('solicitacaos', $solicitacaos);
    }

    public function editarSolicitacao($id)
    {
        $usuario = Session::get("login_usuario");
        $usuarios = usuario::where('id', $id)->first();
        $solicitacao = solicitacao::where('id', $id)->first();
        
        // dd($solicitacao->id_usuario);

        if(!$usuario)
        {
            return redirect('/');
        }
        
        return view('editar_solicitacao', ['solicitacao' => $solicitacao, 'usuarios' => $usuarios]);
    }

    public function atualizarSolicitacao(Request $request, $id)
    {
        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $data = [
            'descpedido' => $request->descpedido,
            'quantidade' => $request->quantidade,
        ];

        solicitacao::where('id',$id)->update($data);

        return redirect('solicitacao');
    }

    public function deletarSolicitacao($id)
    {
        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        solicitacao::where('id',$id)->delete();

        return redirect('solicitacao');
    }

}
