<x-layout>
    <link rel="stylesheet" href="/css/style_historico.css">
    <h1>Solicitações Removidas</h1>
    <ul>
        @if ($solicitacoesRemovidos->count() > 0)
            @foreach ($solicitacoesRemovidos as $solicitacao)
                <li>
                    <span>ID do Pedido: {{ $solicitacao->id }}, Descrição do Pedido: {{ $solicitacao->descpedido}}, Removido em: {{ $solicitacao->deleted_at}}.</span>
                </li>
            @endforeach
        @else
            <li>Não há atividades ainda..</li>
        @endif
    </ul>
</x-layout>