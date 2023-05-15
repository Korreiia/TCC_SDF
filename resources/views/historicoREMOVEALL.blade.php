<x-layout>
    <h1>Item Removidos</h1>
    <ul>
        @if ($inventariosRemovidos->count() > 0)
            @foreach ($inventariosRemovidos as $inventario)
                <li>
                    <span>ID do Item: {{ $inventario->id }}, Descrição: {{ $inventario->descricao }}, Removido em: {{ $inventario->deleted_at}}.</span>
                </li>
            @endforeach
        @else
            <li>Não há nenhuma atividade ainda...</li>
        @endif
    </ul>
</x-layout>