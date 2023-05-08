<x-layout>
<link rel="stylesheet" href="/css/style_solicitacao.css">
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
    
</x-layout>