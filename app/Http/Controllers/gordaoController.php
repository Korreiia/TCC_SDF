<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gordaoController extends Controller
{
    public function loginView()
    {
        return view('login');
		return view('home');
		return view('solicitacao');
    }

	public function login(Request $request)
	{
		$from = $request->all();
		dd($from);
	}

    public function listar()
	{
	
	}

	public function criar()
	{
	
	}

	public function alterar()
	{
	
	}

	public function excluir()
	{
	
	}
}
