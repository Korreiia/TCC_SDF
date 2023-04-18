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
        $usuarios = usuario::all();

        if (Auth::attempt(['email' => $request ->email, 'password' => $request -> password]))
        {
            return redirect('home');
        }

        else
        {
            return redirect('login');
        }


    }


    public function criarView()
    {
        $usuarios = usuario::all();
        return view('criar_conta', ['usuarios' => $usuarios]);
    }

    public function criarUsuario(Request $request)
    {
        usuario::create($request->all());

        return redirect('login');
    }


    public function homeView()
    {
        return view('home');
    }

}
