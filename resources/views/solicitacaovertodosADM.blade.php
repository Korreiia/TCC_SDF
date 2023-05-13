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
                    <th scope="col">Nome / CPF</th>
                    <th scope="col">Telefone / E-mail</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Descrição do Pedido</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">...Ação...</th>
                </tr>
            </thead>

            <tbody>
                @foreach(isset($results) ? $results : $solicitacaos as $solicitacao)
                <tr>
                    <td>{{ $solicitacao ->id}}</td>
                    <td>{{ $solicitacao->usuario?->nome }} <br> {{ $solicitacao->usuario?->cpf }}</td>
                    <td>{{ $solicitacao->usuario?->telefone }} <br> {{ $solicitacao->usuario?->email }}</td>
                    <td>{{ $solicitacao->usuario?->endereco }}</td>
                    <td>{{ $solicitacao->descpedido }}</td>
                    <td>{{ $solicitacao->quantidade }}</td>
                    <td>{{ $solicitacao->created_at }}</td>
                    <td>
                        <a href="{{ route('termo_de_doacao', ['id_solicitacao' => $solicitacao->id]) }}" target="_blank">Termo de Doação</a>
                        <a href="{{ route('verSolicitacao', ['id'=>$solicitacao->id]) }}">Ver mais</a>

                        <form action="{{ route('deletarSolicitacao', ['id'=>$solicitacao->id]) }}" method="post">
                         @csrf 
                          @method('delete')
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>    
</x-layout>