<x-layout>
    
<a href="/criar_inventario">Criar novo cadastro</a>

<h1>Inventario</h1>
        <table class="table">
            <thead>
            <br>
                <tr>
                    <th scope="col">Está Funcionando?</th>
                    <th scope="col">Data de Entrada</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Estado de Conservação</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Localização</th>
                    <th scope="col">Remetente</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">...</th>
                </tr>
            </thead>

            <tbody>
            @foreach($inventarios as $inventario)
                <tr>
                    <th>{{ $inventario ->estadofuncionamento }}</th>
                    <th>{{ $inventario ->dataentrada }}</th>
                    <th>{{ $inventario ->descricao }}</th>
                    <th>{{ $inventario ->estadoconservacao }}</th>
                    <th>{{ $inventario ->categoria }}</th>
                    <th>{{ $inventario ->localizacao }}</th>
                    <th>{{ $inventario ->remetente }}</th>
                    <th>{{ $inventario ->quantidade }}</th>
                    <th>
                        <a href="{{ route('editarInventario', ['id'=>$inventario->id]) }}">Editar</a>
                        <!-- // {{ route('editarInventario', ['id'=>$inventario->id]) }}  -->
                    </th>
                </tr>
            @endforeach
            </tbody>

        </table>

</x-layout>