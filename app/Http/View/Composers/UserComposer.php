<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class UserComposer
{
    public function compose(View $view)
    {
        $usuario = null;
        if (Session::has("login_usuario"))
        {
            $usuario = Session::get("login_usuario");
        }

        $view->with('usuario', $usuario);
    }
}