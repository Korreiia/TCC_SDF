<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class usuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function fazerLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'senha1' => 'required'
        ],[
            'email.required' => 'E-mail é obrigatório',
            'senha1.required' => 'Senha é obrigatório'
        ]);

        if(Auth::attempt(['email' => $request->email, 'senha1' => $request->senha1]))
        {
            return redirect('home');
        }

        else
        {
            return redirect()->back()->with('danger', 'E-mail ou senha invalida');
        }
    }

    public function criarView()
    {
        $usuarios = usuario::all();
        return view('criar_conta', ['usuarios' => $usuarios]);
    }

    public function criarUsuario(Request $request)
    {
        if ('senha1' != 'senha2')
        {
            return redirect()->back()->with('danger', 'Senhas Diferentes');
        }

        else
        {
        usuario::create($request->all());

        return redirect('login');
        }
    }

    public function homeView()
    {
        return view('home');
    }
}
