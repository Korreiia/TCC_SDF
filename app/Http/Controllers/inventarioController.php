<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventario;
use Illuminate\Support\Facades\Redirect;

class inventarioController extends Controller
{
    public function inventarioView()
    {
        $inventarios = inventario::all();
        
        return view('inventario', ['inventarios' => $inventarios]);
    }

    public function criarinventarioView()
    {
        return view('criar_inventario');
    }

    public function criarInventario(Request $request)
    {
        inventario::create($request->all());

        return redirect('inventario');
    }
}
