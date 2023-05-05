<?php
    use Illuminate\Support\Facades\Session;

    $usuario = Session::get('login_usuario');
?>
    <x-layout>

    <link rel="stylesheet" href="/css/style_solicitacao.css">

        <a class="criar_solicitacao" href="/criar_solicitacao">Criar Solicitação</a>

        <h1>Lista de Solicitações</h1>
        <table class="table">
            <thead>
            <br>
                <tr>
                    <th scope="col">Numero do pedido</th>
                    @if($usuario->id_tipo == 1)
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone/Celular</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    @endif
                    <th scope="col">Descrição do Pedido</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Data de Criação</th>
                    <th scope="col">...Ação...</th>
                </tr>
            </thead>

            <tbody>
            @foreach($solicitacaos as $solicitacao)
                <tr>
                    <th>{{ $solicitacao ->id}}</th>
                    <!-- @if($usuario->id_tipo == 1)
                    @endif -->
                    <th>{{ $solicitacao->descpedido }}</th>
                    <th>{{ $solicitacao->quantidade }}</th>
                    <th>{{ $solicitacao->created_at }}</th>

                    <th>

                        @if($usuario->id_tipo == 1)
                        <a href="{{ route('editarSolicitacao', ['id'=>$solicitacao->id]) }}">Editar</a>
                        @endif

                        @if($usuario->id_tipo == 2)
                        <a href="{{ route('editarSolicitacao', ['id'=>$solicitacao->id]) }}">Ver mais</a>
                        @endif

                        <form action="{{ route('deletarSolicitacao', ['id'=>$solicitacao->id]) }}" method="post">
                        
                        @csrf 
                        @method('delete')
                        @if($usuario->id_tipo == 1)
                        <button type="submit">Deletar</button>
                        @endif
                        </form>

                    </th>
                </tr>
            @endforeach
            </tbody>

        </table>
        
    </x-layout>