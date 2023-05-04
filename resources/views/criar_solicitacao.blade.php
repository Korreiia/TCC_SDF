    <x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

    <h1>Nova Solicitação</h1>

    <div class="formulario">
        <form action="/criar_solicitacao" method="post">
          <hr>
            <h1>Nome</h1>
            <input class="dados" type="text" name="nome" placeholder="Campo Obrigatório" required>

            <h1>Telefone</h1>
            <input class="dados" type="number" name="telefone1" placeholder="Campo Obrigatório" required>

            <h1>Telefone de Recado</h1>
            <input class="dados" type="number" name="telefone2">

            <h1>Endereço</h1>
            <input class="dados" type="text" name="endereco">

            <h1>CPF</h1>
            <input class="dados" type="number" name="cpf" placeholder="Campo Obrigatório" required>

            <h1>E-mail</h1>
            <input class="dados" type="text" name="email">

            <h1>Curso</h1>
            <input class="dados" type="text" name="curso">

            <h1>RM</h1>
            <input class="dados" type="number" name="rm">

            <h1>Descrição do Pedido</h1>
            <textarea class="dados" name="descpedido" id="" cols="40" rows="5" placeholder="Campo Obrigatório" required></textarea>
          <hr>
            <button class="bottom" type="submit">Salvar</button>
            @csrf
        </form>
      </div>

    </x-layout>