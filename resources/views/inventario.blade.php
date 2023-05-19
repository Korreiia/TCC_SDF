<x-layout>
    <link rel="stylesheet" href="/css/style_inventario.css">

        <a class="criar_cadastro" href="/criar_inventario">Criar novo cadastro</a>
        
        <form class="search-box" action="/procurarInventario" method="post">
            @csrf
            <input type="text" class="search-txt" name="pesquisar" placeholder="Pesquisar">
            <button type="submit"> <img src="/img/icons8-pesquisar-50.png" alt="Lupa" class="lupa"> </button>
        </form> 

        <h1>Inventario / Produto</h1>
                <table class="table">
                    
                <thead>
                    <br>
                        <tr class="tr">
                            <th class="th" scope="col">ID</th>
                            <th class="th" scope="col">Está Funcionando?</th>
                            <th class="th" scope="col">Data de Entrada</th>
                            <th class="th" scope="col">Descrição</th>
                            <th class="th" scope="col">Estado de Conservação</th>
                            <th class="th" scope="col">Quantidade</th>
                            <th class="th" scope="col">...Ação...</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach(isset($results) ? $results : $inventarios as $inventario)
                        <tr class="tr">
                            <th class="th">{{ $inventario ->id }}</th>
                            <th class="th">{{ $inventario ->estadofuncionamento }}</th>
                            <th class="th">{{ $inventario ->dataentrada }}</th>
                            <th class="th">{{ $inventario ->descricao }}</th>
                            <th class="th">{{ $inventario ->estadoconservacao }}</th>
                            <th class="th">{{ $inventario ->quantidade }}</th>
                            <th class="th">
                                <a href="{{ route('editarInventario', ['id'=>$inventario->id]) }}"><img class="penicon" src="/img/pen.png" alt="">Editar</a>

                                <form action="{{ route('deletarInventario', ['id'=>$inventario->id]) }}" method="post">

                                @csrf 
                                @method('delete')
                                <button type="submit"><img class="lixoicon" src="/img/lixo.png" alt="">Deletar</button>

                                </form>

                            </th>
                        </tr>
                    @endforeach
            </tbody>

        </table>

</x-layout>