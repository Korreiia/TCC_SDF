<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
		return view('home');
		return view('solicitacao');
    }

	public function login(Request $request)
	{
		$email = $request->input('email');
		$senha = $request->input('senha');
		dd($email, $senha);
	}

    public function verSolicitacao()
	{
	
	}

	public function criarSolicitacao()
	{
	
	}

	public function excluirSolicitacao()
	{
	
	}
}
