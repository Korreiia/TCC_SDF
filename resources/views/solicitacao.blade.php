<x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

<<<<<<< HEAD
    <div class="layout2">
        <a class="criar_solicitacao" href="/criar_solicitacao">Criar Solicitação</a>
    
        <h1>Lista de Solicitações</h1>
        <table class="table">
            <thead>
            <br>
                <tr>
                    <th scope="col">Numero do pedido</th>
                    <th scope="col">Descrição do Pedido</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">...Ação...</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($solicitacaos))
                 @foreach($solicitacaos as $solicitacao)
                <tr>
                    <th>{{ $solicitacao ->id}}</th>
                    <th>{{ $solicitacao->descpedido }}</th>
                    <th>{{ $solicitacao->quantidade }}</th>
                    <th>{{ $solicitacao->created_at }}</th>
                    <th>
                        <a href="{{ route('verSolicitacao', ['id'=>$solicitacao->id]) }}">Ver mais</a>
                    </th>
                </tr>
                 @endforeach
                @endif
            </tbody>
        </table>
    </div>

=======
    <a class="criar_solicitacao" href="/criar_solicitacao">Criar Solicitação</a>

    <h1>Lista de Solicitações</h1>
    <table class="table">
        <thead>
        <br>
            <tr>
                <th scope="col">Numero do pedido</th>
                <th scope="col">Descrição do Pedido</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data de Criação</th>
                <th scope="col">...Ação...</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($solicitacaos))
             @foreach($solicitacaos as $solicitacao)
            <tr>
                <th>{{ $solicitacao ->id}}</th>
                <th>{{ $solicitacao->descpedido }}</th>
                <th>{{ $solicitacao->quantidade }}</th>
                <th>{{ $solicitacao->created_at }}</th>
                <th>
                    <a href="{{ route('termo_de_doacao', ['id_solicitacao' => $solicitacao->id]) }}" target="_blank">Termo de Doação</a>
                    <a href="{{ route('verSolicitacao', ['id'=>$solicitacao->id]) }}">Ver mais</a>
                </th>
            </tr>
             @endforeach
            @endif
        </tbody>
    </table>
>>>>>>> 40d16c5c72307c976f74ae768ad4e9506c7c3fc5
</x-layout>