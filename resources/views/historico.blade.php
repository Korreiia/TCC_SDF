<x-layout>

    <h1>Item Adicionados</h1>
    <ul>
        @if ($inventariosAdicionados->count() > 0)
            @foreach ($inventariosAdicionados as $inventario)
                <li>
                    <a href="{{ route('editarInventario', ['id' => $inventario->id]) }}">
                        ID do Item: {{ $inventario->id }}, Descrição: {{ $inventario->descricao }}, Criado em: {{ $inventario->created_at}}.
                    </a>
                </li>
            @endforeach
        @else
            <li>Não há atividades ainda..</li>
        @endif
            <a href="/historicoADDALL">Todos registros</a>
    </ul>

    <hr>

    <h1>Item Editados</h1>
    <ul>
        @if ($inventariosEditados->count() > 0)
            @foreach ($inventariosEditados as $inventario)
                <li>
                    <a href="{{ route('editarInventario', ['id' => $inventario->id]) }}">
                        ID do Item: {{ $inventario->id }}, Descrição: {{ $inventario->descricao }}, Alterado em: {{ $inventario->updated_at}}.
                    </a>
                </li>
            @endforeach
        @else
            <li>Não há atividades ainda..</li>
        @endif
            <a href="/historicoEDITALL">Todos registros</a>
    </ul>

    <hr>

    <h1>Item Removidos</h1>
    <ul>
        @if ($inventariosRemovidos->count() > 0)
            @foreach ($inventariosRemovidos as $inventario)
                <li>
                    <span>ID do Item: {{ $inventario->id }}, Descrição: {{ $inventario->descricao }}, Removido em: {{ $inventario->deleted_at}}.</span>
                </li>
            @endforeach
        @else
            <li>Não há atividades ainda..</li>
        @endif
            <a href="/historicoREMOVEALL">Todos registros</a>
    </ul>

    <hr>

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
            <a href="/solicitacaoREMOVEALL">Todos registros</a>
    </ul>

</x-layout>