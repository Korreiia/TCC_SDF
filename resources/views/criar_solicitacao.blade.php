    <x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

    <h1>Nova Solicitação</h1>

    <div class="formulario">
        <form action="/criar_solicitacao" method="post">
          <hr>
            <h1>Descrição do Pedido</h1>
            <textarea class="dados" name="descpedido" id="" cols="40" rows="5" placeholder="Campo Obrigatório" required></textarea>

            <h1>Quantidade</h1>
            <input class="dados" type="number" name="quantidade">
          <hr>
            <button class="bottom" type="submit">Salvar</button>
            @csrf
        </form>
      </div>

    </x-layout>