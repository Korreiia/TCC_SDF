<x-layout>

    <h1>Notificações</h1>
    <ul>
        @if ($solicitacoes->count() > 0)
            @foreach ($solicitacoes as $solicitacao)
                <li>
                    <a href="{{ route('verSolicitacao', ['id' => $solicitacao->id]) }}">
                        Nova solicitação, ID do Pedido: {{ $solicitacao->id }}, Descrição do Pedido: {{ $solicitacao->descpedido}}, Criado em: {{ $solicitacao->created_at}}.
                    </a>
                </li>
            @endforeach
        @else
            <li>Não há Solicitações novas, Atualize a pagina para ver se tem notificações novas.</li>
        @endif
    </ul>

</x-layout>