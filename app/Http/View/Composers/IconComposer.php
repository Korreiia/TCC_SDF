<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\solicitacao;

class IconComposer
{
    public function compose(View $view)
    {
        $solicitacoes_nao_lidas = solicitacao::whereNull('visto')->count();

        $tem_notificacoes = $solicitacoes_nao_lidas > 0;

        $icon = $tem_notificacoes ? '/img/bellnotificacao.png' : '/img/bell.png';

        $view->with('icon', $icon);
    }
}
