<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventario;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class inventarioController extends Controller
{
    public static function restringirAcesso() {
        $usuarioLogado = Session::get("login_usuario");
        return ($usuarioLogado->id_tipo != 1);
    }

    public function inventarioView()
    {
        $usuario = Session::get("login_usuario");
        
        if($usuario == "1")
        {
            return redirect('/');
        }

        $inventarios = inventario::all();
        
        return view('inventario', ['inventarios' => $inventarios]);
    }

    public function criarinventarioView()
    {
        $usuario = Session::get("login_usuario");
        
        if($usuario == "2")
        {
            return redirect('/');
        }
        

        return view('criar_inventario');
    }

    public function criarInventario(Request $request)
    {
        $usuario = Session::get("login_usuario");
        
        if(!$usuario)
        {
            return redirect('/');
        }
        
        inventario::create($request->all());

        return redirect('inventario');
    }

    public function editarInventario($id)
    {
        $usuario = Session::get("login_usuario");
        
        if(!$usuario)
        {
            return redirect('/');
        }
        

        $inventarios = inventario::where('id', $id)->first();

        if(!empty($inventarios))
        {
            return view('editar_inventario', ['inventarios'=>$inventarios]);
        }

        return redirect('inventario');
    }

    public function atualizarInventario(Request $request, $id)
    {
        $usuario = Session::get("login_usuario");
        
        if(!$usuario)
        {
            return redirect('/');
        }
        

        $data = [
            'estadofuncionamento' => $request->estadofuncionamento,
            'dataentrada' => $request->dataentrada,
            'descricao' => $request->descricao,
            'estadoconservacao' => $request->estadoconservacao,
            'quantidade' => $request->quantidade,
        ];

        inventario::where('id',$id)->update($data);

        return redirect('inventario');
    }

    public function deletarInventario($id)
    {
        $usuario = Session::get("login_usuario");

        if(!$usuario)
        {
            return redirect('/');
        }
        

        inventario::where('id',$id)->delete();

        return redirect('inventario');
    }
}
