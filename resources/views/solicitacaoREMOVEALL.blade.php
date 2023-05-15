<x-layout>
    <h1>Solicitações Removidas</h1>
    <ul>
        @if ($solicitacoesRemovidos->count() > 0)
            @foreach ($solicitacoesRemovidos as $solicitacao)
                <li>
                    <span>ID do Pedido: {{ $solicitacao->id }}, Descrição do Pedido: {{ $solicitacao->descpedido}}, Removido em: {{ $solicitacao->deleted_at}}.</span>
                </li>
            @endforeach
        @else
            <li>Não há nenhuma atividade ainda...</li>
        @endif
    </ul>
</x-layout>