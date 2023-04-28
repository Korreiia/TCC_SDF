<?php
namespace App\Tools;

use Illuminate\Support\Facades\Session;

class Access {
    public static function restringirAcesso() {
        $usuarioLogado = Session::get("login_usuario");
        if($usuarioLogado) // usuario está logado
        if($usuarioLogado->id_tipo == 1); // usuário logado é admin
        if($usuarioLogado->id_tipo == 2); // usuário logado é comum
    }
}