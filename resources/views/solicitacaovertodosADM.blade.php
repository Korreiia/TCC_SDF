<x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

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
                    {{-- <th class="th" scope="col">Telefone / E-mail</th>
                    <th class="th" scope="col">Endereço</th> --}}
                    <th class="th" scope="col">Descrição do Pedido</th>
                    {{-- <th class="th" scope="col">Quantidade</th> --}}
                    <th class="th" scope="col">Data de Criação</th>
                    <th class="th" scope="col">...Ação...</th>
                </tr>
            </thead>

            <tbody>
                @foreach(isset($results) ? $results : $solicitacaos as $solicitacao)
                <tr>
                    <th class="th">{{ $solicitacao ->id}}</th>
                    <th class="th">{{ $solicitacao->usuario?->nome }} <br> {{ $solicitacao->usuario?->cpf }}</td>
                    {{-- <th class="th">{{ $solicitacao->usuario?->telefone }} <br> {{ $solicitacao->usuario?->email }}</td> --}}
                    {{-- <th class="th">{{ $solicitacao->usuario?->endereco }}</td> --}}
                    <th class="th">{{ $solicitacao->descpedido }}</th>
                    {{-- <th class="th">{{ $solicitacao->quantidade }}</th> --}}
                    <th class="th">{{ $solicitacao->created_at }}</th>
                    <th class="th">
                        <a href="{{ route('termo_de_doacao', ['id_solicitacao' => $solicitacao->id]) }}" target="_blank"><img class="termoicon" src="/img/termo.png" alt="Termo"></a>
                        <a href="{{ route('verSolicitacao', ['id'=>$solicitacao->id]) }}"><img class="eyeicon" src="/img/eye.png" alt="Ver Mais"></a>

                        <form action="{{ route('deletarSolicitacao', ['id'=>$solicitacao->id]) }}" method="post">
                         @csrf 
                          @method('delete')
                            <button type="submit"><img class="lixoicon" src="/img/lixo.png" alt="Deletar"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>    
</x-layout>