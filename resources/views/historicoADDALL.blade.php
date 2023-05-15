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
            <li>Não há nenhuma atividade ainda...</li>
        @endif
    </ul>
</x-layout>