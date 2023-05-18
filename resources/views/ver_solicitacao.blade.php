<x-layout>
  <link rel="stylesheet" href="/css/style_ver_sctt.css">

      <h1>Detalhes da Solicitação</h1>

      <hr>
        <h1>Nome</h1>
        <input class="dados" type="text" name="nome" value="{{ $solicitacao->usuario->nome }}" required>

        <h1>CPF</h1>
        <input class="dados" type="number" name="cpf" value="{{ $solicitacao->usuario->cpf }}" required>

        <h1>Telefone/Celular</h1>
        <input class="dados" type="number" name="telefone" value="{{ $solicitacao->usuario->telefone }}" required>

        <h1>Endereço</h1>
        <input class="dados" type="text" name="endereco" value="{{ $solicitacao->usuario->endereco }}" required>

        <h1>E-mail</h1>
        <input class="dados" type="email" name="email" value="{{ $solicitacao->usuario->email }}" required>

        <h1>Descrição do Pedido</h1>
        <textarea class="dados" name="descpedido" id="" cols="25" rows="3" placeholder="Campo Obrigatório" required>{{ $solicitacao->descpedido }}</textarea>

        <h1>Quantidade</h1>
        <input class="dados" type="number" name="quantidade" value="{{ $solicitacao->quantidade }}">
</x-layout>