<x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

    <div class="layout2">
        <h1>Lista de Solicitações</h1>
        <table class="table">

            <form class="search-box" action="/procurarSolicitacao" method="post">
                @csrf
                <input type="text" class="search-txt" name="pesquisar" placeholder="Pesquisar">
                <button type="submit"> <img src="/img/icons8-pesquisar-50.png" alt="Lupa" class="lupa"> </button>
            </form> 

            <thead>
             <br>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone/Celular</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    <th scope="col">Descrição do Pedido</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">...Ação...</th>
                </tr>
            </thead>

            <tbody>
                @foreach(isset($results) ? $results : $solicitacaos as $solicitacao)
                <tr>
                    <th>{{ $solicitacao ->id}}</th>
                    <th>{{ $solicitacao->usuario?->nome }}</th>
                    <th>{{ $solicitacao->usuario?->telefone }}</th>
                    <th>{{ $solicitacao->usuario?->endereco }}</th>
                    <th>{{ $solicitacao->usuario?->cpf }}</th>
                    <th>{{ $solicitacao->usuario?->email }}</th>
                    <th>{{ $solicitacao->descpedido }}</th>
                    <th>{{ $solicitacao->quantidade }}</th>
                    <th>{{ $solicitacao->created_at }}</th>
                    <th>
                        <a href="{{ route('verSolicitacao', ['id'=>$solicitacao->id]) }}">Ver mais</a>

                        <form action="{{ route('deletarSolicitacao', ['id'=>$solicitacao->id]) }}" method="post">
                         @csrf 
                          @method('delete')
                            <button type="submit">Deletar</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>    
</x-layout>