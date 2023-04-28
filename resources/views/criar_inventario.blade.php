<x-layout>

<link rel="stylesheet" href="/css/style_edt_invnt.css">

<h1>Adicionar Novo Item</h1>

<div class="formulario">
        <form action="/criar_inventario" method="post">
          <div class="hr">
            <hr>
              <h1>Está Funcionando?</h1>
              <input type="text" name="estadofuncionamento" placeholder="Campo Obrigatório" required>

              <h1>Data de Entrada</h1>
              <input type="date" name="dataentrada" required>

              <h1>Descrição do item</h1>
              <textarea name="descricao" id="" cols="40" rows="5" placeholder="Campo Obrigatório" required></textarea>

              <h1>Estado de Conservação</h1>
              <input type="text" name="estadoconservacao">

              <h1>Categoria</h1>
              <input type="text" name="categoria">

              <h1>Localização</h1>
              <input type="text" name="localizacao" placeholder="Campo Obrigatório" required>

              <h1>Remetente</h1>
              <input type="text" name="remetente" placeholder="Campo Obrigatório" required>

              <h1>Quantidade</h1>
              <input type="number" name="quantidade" placeholder="Campo Obrigatório" required>
            <hr>
          </div>
            <button type="submit">Salvar</button>
            @csrf
        </form>
      </div>

</x-layout>