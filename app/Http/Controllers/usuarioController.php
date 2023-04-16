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

    public function login(Request $request)
	{
		$usuarios = usuario::all();
		
        return redirect('home');
	}


    public function criarView()
    {
        return view('criar_conta');
    }

    public function criarUsuario(Request $request)
    {
        $usuarios = usuario::all();
        usuario::created($request->all);

        return redirect('login');
    }


    public function homeView()
    {
        return view('home');
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
