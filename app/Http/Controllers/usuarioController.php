<?php

namespace App\Http\Controllers;

use App\Models\inventario;
use App\Models\solicitacao;
use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class usuarioController extends Controller
{
    public static function restringirAcesso() {
        $usuarioLogado = Session::get("login_usuario");
        return ($usuarioLogado->id_tipo == 2);
    }

    public static function restringirnullAcesso() {
        $usuarioLogado = Session::get("login_usuario");
        return (!$usuarioLogado);
    }

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
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $solicitacoes_nao_lidas = solicitacao::whereNull('visto')->count();

        $solicitacoes = solicitacao::whereNull('visto')->get();

        $tem_notificacoes = $solicitacoes_nao_lidas > 0;

        // $solicitacoes = solicitacao::whereHas('usuario', function ($query) {
        //     $query->where('id_tipo', '=', 1);
        // })->whereNull('visto')->take(20)->get();
        if ($tem_notificacoes) {
            $icon = "/img/bellnotificacao.png";
        } 
        
        else {
            $icon = "/img/bell.png";
        }
    
        return view('notificacao', ['solicitacoes_nao_lidas' => $solicitacoes_nao_lidas,'solicitacoes' => $solicitacoes,'tem_notificacoes' => $tem_notificacoes,'icon' => $icon]);
    }

    public function historico()
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $inventariosAdicionados = inventario::orderBy('created_at', 'desc')->take(10)->get();
        $inventariosEditados = inventario::whereNotNull('updated_at')->where('updated_at', '>', DB::raw('created_at'))->orderBy('updated_at', 'desc')->take(10)->get();;
        $inventariosRemovidos = inventario::onlyTrashed()->orderBy('deleted_at', 'desc')->take(10)->get();
        $solicitacoesRemovidos = solicitacao::onlyTrashed()->orderBy('deleted_at', 'desc')->take(10)->get();

        return view('historico', ['inventariosAdicionados' => $inventariosAdicionados,'inventariosEditados' => $inventariosEditados,'inventariosRemovidos' => $inventariosRemovidos,'solicitacoesRemovidos' => $solicitacoesRemovidos]);
    }

    public function historicoADDALL()
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $inventariosAdicionados = inventario::orderBy('created_at', 'desc')->get();
        return view('historicoADDALL', ['inventariosAdicionados' => $inventariosAdicionados]);
    }

    public function historicoEDITALL()
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $inventariosEditados = inventario::whereNotNull('updated_at')->where('updated_at', '>', DB::raw('created_at'))->orderBy('updated_at', 'desc')->get();;
        return view('historicoEDITALL', ['inventariosEditados' => $inventariosEditados]);
    }
    
    public function historicoREMOVEALL()
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $inventariosRemovidos = inventario::onlyTrashed()->orderBy('deleted_at', 'desc')->get();
        return view('historicoREMOVEALL', ['inventariosRemovidos' => $inventariosRemovidos]);
    }

    public function solicitacaoREMOVEALL()
    {
        if ($this->restringirnullAcesso()) {
            return redirect('/');
        }

        if ($this->restringirAcesso()) {
            return redirect('/');
        }

        $solicitacoesRemovidos = solicitacao::onlyTrashed()->orderBy('deleted_at', 'desc')->get();
        return view('solicitacaoREMOVEALL', ['solicitacoesRemovidos' => $solicitacoesRemovidos]);
    }
}