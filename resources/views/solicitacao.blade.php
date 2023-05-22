<x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

        <a class="criar_solicitacao" href="/criar_solicitacao">Criar Solicitação</a>
    
        <h1>Lista de Solicitações</h1>
        <table class="table">
            <thead>
            <br>
                <tr>
                    <th class="th" scope="col">Numero do pedido</th>
                    <th class="th" scope="col">Descrição do Pedido</th>
                    <th class="th" scope="col">Quantidade</th>
                    <th class="th" scope="col">Data de Criação</th>
                    <th class="th" scope="col">...Ação...</th>
                </tr>
            </thead>
            <tbody>
                @if(!empty($solicitacaos))
                 @foreach($solicitacaos as $solicitacao)
                <tr>
                    <th class="th">{{ $solicitacao ->id}}</th>
                    <th class="th">{{ $solicitacao->descpedido }}</th>
                    <th class="th">{{ $solicitacao->quantidade }}</th>
                    <th class="th">{{ $solicitacao->created_at }}</th>
                    <th class="th">
                        <a href="{{ route('verSolicitacao', ['id'=>$solicitacao->id]) }}"><img class="eyeicon" src="/img/eye.png" alt="Ver Mais"></a>
                    </th>
                </tr>
                 @endforeach
                @endif
            </tbody>
        </table>
</x-layout>