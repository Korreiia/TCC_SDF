<x-layout>

<link rel="stylesheet" href="/css/style_inventario.css">
    <div class="layout2">
        <a class="criar_cadastro" href="/criar_inventario">Criar novo cadastro</a>
        
        <div class="search-box">
            <input type="text" class="search-txt" placeholder="Pesquisar">
            <a href="#" class="search-btn"> <img src="/img/icons8-pesquisar-50.png" alt="Lupa" class="lupa"> </a>
        </div> 

        <h1>Inventario</h1>
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
                    @foreach($inventarios as $inventario)
                        <tr class="tr">
                            <th>{{ $inventario ->id }}</th>
                            <th>{{ $inventario ->estadofuncionamento }}</th>
                            <th>{{ $inventario ->dataentrada }}</th>
                            <th>{{ $inventario ->descricao }}</th>
                            <th>{{ $inventario ->estadoconservacao }}</th>
                            <th>{{ $inventario ->quantidade }}</th>
                            <th>
                                <a href="{{ route('editarInventario', ['id'=>$inventario->id]) }}">Editar</a>

                                <form action="{{ route('deletarInventario', ['id'=>$inventario->id]) }}" method="post">

                                @csrf 
                                @method('delete')
                                <button type="submit">Deletar</button>

                                </form>

                            </th>
                        </tr>
    </div>
               @endforeach
            </tbody>

        </table>

</x-layout>