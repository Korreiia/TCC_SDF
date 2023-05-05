<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\solicitacao;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;
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
        $solicitacaos = solicitacao::all();
        $usuarios = usuario::all();
        
        return view('solicitacao', ['solicitacaos' => $solicitacaos, 'usuarios' => $usuarios]);
    }

    public function criar_soliciView($id)
    {
        $usuario = usuario::find($id);

        if(!$usuario)
        {
            return redirect()->route('solicitacao');
        }

        return view('criar_solicitacao', compact('usuario'));
    }

    public function criarSolicitacao(Request $request, $id)
    {
        // $request->validate([
        //     'descpedido' => 'required',
        //     'quantidade' => 'numeric'
        // ]);

        // solicitacao::create($request->all());

        // return redirect('solicitacao');

        $usuario = Usuario::find($id);

        if (!$usuario) {
            return redirect()->route('solicitacao');
        }
    
        $request->validate([
            'descpedido' => 'required',
            'quantidade' => 'numeric'
        ]);
    
        $solicitacao = new Solicitacao();
        $solicitacao->id_usuario = $usuario->id;
        $solicitacao->descpedido = $request->input('descpedido');
        $solicitacao->quantidade = $request->input('quantidade');
        $solicitacao->save();
    
        return redirect()->route('criar_solicitacao', ['id' => $usuario->id]);
    }

    public function editarSolicitacao($id)
    {
        $solicitacao = solicitacao::where('id', $id)->first();
        $usuario = usuario::where('id', $id)->first();

        dd($solicitacao->id_usuario);

        if($this->verificarPermissao() && $usuario)
        {
            return view('editar_solicitacao', ['solicitacao' => $solicitacao, 'usuario' => $usuario]);
        }
        
        // return redirect('solicitacao');
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
