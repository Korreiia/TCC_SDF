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
            <h1>Nome</h1>
            <input type="text" name="nome" value="{{ $solicitacaos->nome }}" placeholder="Campo Obrigatório" required>

            <h1>Telefone</h1>
            <input type="number" name="telefone1" value="{{ $solicitacaos->telefone1 }}" placeholder="Campo Obrigatório" required>

            <h1>Telefone de Recado</h1>
            <input type="number" name="telefone2" value="{{ $solicitacaos->telefone2 }}">

            <h1>Endereço</h1>
            <input type="text" name="endereco" value="{{ $solicitacaos->endereco }}">

            <h1>CPF</h1>
            <input type="number" name="cpf" value="{{ $solicitacaos->cpf }}" placeholder="Campo Obrigatório" required>

            <h1>E-mail</h1>
            <input type="text" name="email" value="{{ $solicitacaos->email }}">

            <h1>Curso</h1>
            <input type="text" name="curso" value="{{ $solicitacaos->curso }}">

            <h1>RM</h1>
            <input type="number" name="rm" value="{{ $solicitacaos->rm }}">

            <h1>Descrição do Pedido</h1>
            <!-- <input type="text" name="descpedido" value="{{ $solicitacaos->descpedido }}" placeholder="Descrição do Pedido" required> -->
            <textarea name="descpedido" id="" cols="40" rows="5" placeholder="Campo Obrigatório" required></textarea>
          <hr>
            @if($usuario->id_tipo == 1)
            <button type="submit">Salvar</button>
            @endif
            @csrf
        </form>
      </div>

</x-layout>