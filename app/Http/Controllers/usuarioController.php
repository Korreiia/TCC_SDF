<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Redirect;

class usuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login()
	{
        return redirect('home');
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
