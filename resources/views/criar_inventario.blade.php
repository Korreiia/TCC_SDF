<x-layout>

  <link rel="stylesheet" href="/css/style_edt_invnt.css">

  <h1>Adicionar Novo Item</h1>

  <div class="formulario">
    <form action="/criar_inventario" method="post">

      <table class="table"></table>

      <div class="hr">
        <h1>Está Funcionando?</h1>
        <input class="dados" type="text" name="estadofuncionamento" placeholder="Campo Obrigatório" required>
      </div>

      <div class="hr">
      <h1>Data de Entrada</h1>
      <input class="dados" type="date" name="dataentrada" required>
      </div>

      <div class="hr">
      <h1>Descrição do item</h1>
      <textarea class="dados" name="descricao" id="" cols="40" rows="5" placeholder="Campo Obrigatório" required></textarea>
      </div>

      <div class="hr">
      <h1>Estado de Conservação</h1>
      <input class="dados" type="text" name="estadoconservacao">
      </div>

      <div class="hr">
      <h1>Quantidade</h1>
      <input class="dados" type="number" name="quantidade" placeholder="Campo Obrigatório" required>
      </div>

      <button class="bottom" type="submit">Salvar</button>
      @csrf
    </form>
  </div>

</x-layout>