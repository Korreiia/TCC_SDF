<?php
    use Illuminate\Support\Facades\Session;

    $usuario = Session::get('login_usuario');
?>

<x-layout>

<link rel="stylesheet" href="/css/style_edt_sctt.css">

<h1>Detalhes da Solicitação</h1>

<div class="formulario">
        <form action="{{ route('atualizarSolicitacao', $solicitacao->id) }}" method="post">
          @method('put')
          <hr>
            <h1>Nome</h1>
            <input type="text" name="nome" value="{{ $usuarios->nome }}" required>

            <h1>CPF</h1>
            <input type="number" name="cpf" value="{{ $usuarios->cpf }}" required>

            <h1>Telefone/Celular</h1>
            <input type="number" name="telefone" value="{{ $usuarios->telefone }}" required>

            <h1>Endereço</h1>
            <input type="text" name="endereco" value="{{ $usuarios->endereco }}" required>

            <h1>E-mail</h1>
            <input type="email" name="email" value="{{ $usuarios->email }}" required>

            <h1>Descrição do Pedido</h1>
            <textarea name="descpedido" id="" cols="40" rows="5" placeholder="Campo Obrigatório" required>{{ $solicitacao->descpedido }}</textarea>

            <h1>Quantidade</h1>
            <input type="number" name="quantidade" value="{{ $solicitacao->quantidade }}">
          <hr>
            @if($usuario->id_tipo == 1)
            <button type="submit">Salvar</button>
            @endif
            @csrf
        </form>
      </div>

</x-layout>