<x-layout>
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
            <li>Não há nenhuma atividade ainda...</li>
        @endif
    </ul>
</x-layout>