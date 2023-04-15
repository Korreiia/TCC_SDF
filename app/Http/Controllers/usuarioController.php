<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Models\usuarioModel;
use Illuminate\Support\Facades\Redirect;

class usuarioController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function criarView()
    {
        return view('criar_conta');
    }

    public function homeView()
    {
        return view('home');
    }

    public function soliciView()
    {
        return view('solicitacao');
    }

	public function login(Request $request)
	{
		$email = $request->input('email');
		$senha = $request->input('senha');
		dd($email, $senha);
	}

    public function criarUsuario(Request $request)
    {
        $email = $request->input('email');
		$senha1 = $request->input('senha1');
        $senha2 = $request->input('senha2');

        if ($senha1 != $senha2)
        {
            exit("senhas diferentes");
        } 

		dd($email, $senha1, $senha2);
    }

    public function cadastro(Request $request): RedirectResponse
    {
        $usuarioController = new UsuarioController;

        $usuarioController->email = $request->email;

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
