    <x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

    <h1>Nova Solicitação</h1>

    <div class="formulario">
        <form action="{{ route('criar_solicitacao', ['id' => $usuario->id]) }}" method="post">
          <hr>
            <input type="hidden" name="id_usuario" value="{{ $usuario->id }}">
            
            <h1>Descrição do Pedido</h1>
            <textarea class="dados" name="descpedido" id="" cols="25" rows="3" placeholder="Campo Obrigatório" required></textarea>

            <h1>Quantidade</h1>
            <input class="dados" type="number" name="quantidade">

            <div class="checkbox">
              <input type="checkbox" id="termo" required>
              <label class="textoC" for="termo">Estou ciente que só posso fazer UM pedido de Computador</label>
            </div>
            
          <hr>
            <button class="bottom" type="submit">Salvar</button>
            @csrf
        </form>
      </div>

    </x-layout>