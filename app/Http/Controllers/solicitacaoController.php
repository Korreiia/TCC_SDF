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

    public function criar_soliciView()
    {
        return view('criar_solicitacao');
    }

    public function criarSolicitacao(Request $request)
    {
        solicitacao::create($request->all());

        $this->validate($request, [
        'descpedido' => 'required',
        'quantidade' => 'required'
    ]);

    $solicitacao = auth()->user()->solicitacaos()->create([
        'descpedido' => $request->get('descpedido'),
        'quantidade' => $request->get('quantidade'),
    ]);

    return redirect('solicitacao');
    }

    public function editarSolicitacao($id)
    {
        $solicitacao = solicitacao::where('id', $id)->first();
        $usuario = usuario::find($solicitacao->id_usuario);
        dd($solicitacao->id_usuario);
        if($this->verificarPermissao() && $usuario)
        {
            return view('editar_solicitacao', ['solicitacao' => $solicitacao, 'usuario' => $usuario]);
        }
        
        // return redirect('solicitacao');
    }

    public function verificarPermissao()
    {
        $user = Auth::user();

        if ($user && $user->id_tipo == 1) { // Verifica se o usuário está autenticado e se é um administrador (id_tipo == 1)
            return true;
        } else {
            return false;
        }
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
