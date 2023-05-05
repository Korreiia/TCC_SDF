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
        // Session::get('login_usuario');
        $request->session()->forget('login_usuario');
        return redirect('home');
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
        $usuarios = usuario::where('id', $id)->first();

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
}
