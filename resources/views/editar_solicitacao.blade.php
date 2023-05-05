<?php
    use Illuminate\Support\Facades\Session;

    $usuario = Session::get('login_usuario');
?>

<x-layout>

<link rel="stylesheet" href="/css/style_edt_sctt.css">

<h1>Editar Solicitação</h1>

<div class="formulario">
        <form action="{{ route('atualizarSolicitacao',['id'=>$solicitacaos->id]) }}" method="post">
          @method('put')
          <hr>
            <h1>Descrição do Pedido</h1>
            <!-- <input type="text" name="descpedido" value="{{ $solicitacaos->descpedido }}" placeholder="Descrição do Pedido" required> -->
            <textarea name="descpedido" id="" cols="40" rows="5" placeholder="Campo Obrigatório" required></textarea>

            <h1>Quantidade</h1>
            <input type="number" name="quantidade" value="{{ $solicitacaos->quantidade }}">
          <hr>
            @if($usuario->id_tipo == 1)
            <button type="submit">Salvar</button>
            @endif
            @csrf
        </form>
      </div>

</x-layout>