<x-layout>

  <link rel="stylesheet" href="/css/style_edt_invnt.css">

      <h1>Adicionar Novo Item</h1>

      <div class="formulario">
        <form action="/criar_inventario" method="post">

        <br>
          <hr>
              <h2>Está Funcionando?</h2>
              <input class="dados" type="text" name="estadofuncionamento" placeholder="Campo Obrigatório" required>
          
        <br>
            <h2>Data de Entrada</h2>
            <input class="dados" type="date" name="dataentrada" required>
          
        <br>
            <h2>Descrição do item</h2>
            <textarea class="dados" name="descricao" id="" cols="25" rows="3" placeholder="Campo Obrigatório" required></textarea>
          
        <br>
            <h2>Estado de Conservação</h2>
            <input class="dados" type="text" name="estadoconservacao">
          
        <br>
            <h2>Quantidade</h2>
            <input class="dados" type="number" name="quantidade" placeholder="Campo Obrigatório" required>
          
        <br>
          <button type="submit">Salvar</button>
          @csrf
        </form>
      </div>

</x-layout>