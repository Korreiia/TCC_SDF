<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use App\Models\solicitacao;
use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class usuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function fazerLogin(Request $request)
    {
            $email = $request->input('email');
            $senha = $request->input('senha');

            $usuario =usuario::where('email', '=', $email)
                            ->where('senha', '=', $senha)
                            ->first();

        if($usuario == null)
        {
            return redirect()->back()->with('danger', 'E-mail ou senha invalida');
        }

        Session::put('login_usuario', $usuario);
        
        return redirect('home');
    }

    public function fazer_logout(Request $request)
    {
        $request->session()->forget('login_usuario');
        return redirect('login');
    }

    public function criarView()
    {
        $usuarios = usuario::all();
        return view('criar_conta', ['usuarios' => $usuarios]);
    }

    public function criarUsuario(Request $request)
    {
        $senha = $request->input('senha');
        $senha1 = $request->input('senha1');

        if ($senha != $senha1)
        {
            return redirect()->back()->with('danger', 'Senhas Diferentes');
        }

        usuario::create($request->all());

        return redirect('login');
    }

    public function homeView()
    {
        return view('home');
    }

    public function configView($id)
    {
        $usuario = Session::get("login_usuario");
        $usuarios = usuario::find($id);
         
        if(!$usuario || $usuario->id != $id) 
        {
            return redirect('/');
        }

        return view('config', ['usuarios'=>$usuarios]);
    }

    public function atualizarUsuario1(Request $request, $id)
    {
        $data = [
            'email' => $request->email,
        ];

        usuario::where('id',$id)->update($data);

        return redirect('home');
    }

    public function atualizarUsuario2(Request $request, $id)
    {
        $data = [
            'senha' => $request->senha,
            'senha1' => $request->senha1,
        ];

        usuario::where('id',$id)->update($data);

        return redirect('home');
    }

    public function atualizarUsuario3(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
        ];

        usuario::where('id',$id)->update($data);

        return redirect('home');
    }

    public function deletarUsuario(Request $request,$id)
    {
        usuario::where('id',$id)->delete();

        $request->session()->forget('login_usuario');

        return redirect('home');
    }

    public function saibamaisView()
    {
        return view('saibamais');
    }

    public function procurarInventario(Request $request)
    {
        $pesquisar = $request->input('pesquisar');
        $results = [];

        if (is_numeric($pesquisar))
        {
            $results = inventario::where('id', $pesquisar)
                ->orWhere('quantidade', 'like', '%'.$pesquisar.'%')
                ->get();
        }

        else
        {
            $results = inventario::where('estadofuncionamento', 'like', '%'.$pesquisar.'%')
                ->orWhere('dataentrada', 'like', '%'.$pesquisar.'%')
                ->orWhere('descricao', 'like', '%'.$pesquisar.'%')
                ->orWhere('estadoconservacao', 'like', '%'.$pesquisar.'%')
                ->get();
        }

        return view('inventario', compact('results'));
    }

    public function procurarSolicitacao(Request $request)
    {
        $pesquisar = $request->input('pesquisar');
        $results = [];

        if (is_numeric($pesquisar))
        {
            $results = solicitacao::where('id', $pesquisar)
                ->orWhere('quantidade', 'like', '%'.$pesquisar.'%')
                ->orWhereHas('usuario', function ($query) use ($pesquisar) {
                    $query->where('telefone', 'like', '%'.$pesquisar.'%')
                        ->orWhere('cpf', 'like', '%'.$pesquisar.'%');
                })
                ->get();
        }

        else
    {
        $results = solicitacao::whereHas('usuario', function ($query) use ($pesquisar) 
        {
            $query->where('nome', 'like', '%'.$pesquisar.'%')
                ->orWhere('endereco', 'like', '%'.$pesquisar.'%')
                ->orWhere('email', 'like', '%'.$pesquisar.'%');
        })
            ->orWhere('descpedido', 'like', '%'.$pesquisar.'%')
            ->orWhere('created_at', 'like', '%'.$pesquisar.'%')
            ->get();
    }

        return view('solicitacaoADM', compact('results'));
    }

    public function notificacao()
    {
        return view('notificacao');
    }
}