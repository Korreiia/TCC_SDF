<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;
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
            $senha1 = $request->input('senha1');

            $usuario =usuario::where('email', '=', $email)
                            ->where('senha1', '=', $senha1)
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
        Auth::logout();
        return redirect('login');
    }

    public function criarView()
    {
        $usuarios = usuario::all();
        return view('criar_conta', ['usuarios' => $usuarios]);
    }

    public function criarUsuario(Request $request)
    {
        $senha1 = $request->input('senha1');
        $senha2 = $request->input('senha2');

        if ($senha1 != $senha2)
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
}
