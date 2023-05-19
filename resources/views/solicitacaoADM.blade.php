<x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

    <a class="versolicitacao" href="solicitacaovertodosADM">Ver todas Solicitações</a>

        <h1>Lista de Solicitações</h1>

        <form class="buscar-box" action="/procurarSolicitacao" method="post">
            @csrf
            <input type="text" class="buscar-txt" name="pesquisar" placeholder="Pesquisar">
            <button type="submit"> <img src="/img/icons8-pesquisar-50.png" alt="Lupa" class="lupa"> </button>
        </form> 

        <table class="table">

            <thead>
             <br>
                <tr>
                    <th class="th" scope="col">ID</th>
                    <th class="th" scope="col">Nome / CPF</th>
                    {{-- <th scope="col">Telefone / E-mail</th> --}}
                    {{-- <th scope="col">Endereço</th> --}}
                    <th class="th" scope="col">Descrição do Pedido</th>
                    {{-- <th scope="col">Quantidade</th> --}}
                    <th class="th" scope="col">Data de Criação</th>
                    <th class="th" scope="col">...Ação...</th>
                </tr>
            </thead>

            <tbody>
                @foreach(isset($results) ? $results : $solicitacaos as $solicitacao)
                <tr>
                    <th class="th">{{ $solicitacao ->id}}</th>
                    <th class="th">{{ $solicitacao->usuario?->nome }} <br> {{ $solicitacao->usuario?->cpf }}</th>
                    {{-- <td>{{ $solicitacao->usuario?->telefone }} <br> {{ $solicitacao->usuario?->email }}</td>
                    <td>{{ $solicitacao->usuario?->endereco }}</td> --}}
                    <th class="th">{{ $solicitacao->descpedido }}</th>
                    {{-- <td>{{ $solicitacao->quantidade }}</td> --}}
                    <th class="th">{{ $solicitacao->created_at }}</th>
                    <th class="th">
                        <a href="{{ route('termo_de_doacaoADM', ['id_solicitacao' => $solicitacao->id]) }}" target="_blank"><img class="termoicon" src="/img/termo.png">Termo</a>
                        <a href="{{ route('verSolicitacao', ['id'=>$solicitacao->id]) }}"><img class="eyeicon" src="/img/eye.png">Ver</a>

                        <form action="{{ route('deletarSolicitacao', ['id'=>$solicitacao->id]) }}" method="post">
                         @csrf 
                          @method('delete')
                            <button type="submit"><img class="lixoicon" src="/img/lixo.png">Deletar</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>

        </table>
</x-layout>