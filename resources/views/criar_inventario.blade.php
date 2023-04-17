<x-layout>

<h1>Adicionar Novo Item</h1>

<div class="formulario">
        <form action="/criar_inventario" method="post">
            <input type="text" name="estadofuncionamento" placeholder="Está Funcionando?" required>
            <input type="number" name="dataentrada" placeholder="Data de Entrada" required>
            <input type="text" name="descricao" placeholder="Descricao">
            <input type="text" name="estadoconservacao" placeholder="Estado de Conservação" required>
            <input type="text" name="categoria" placeholder="Categoria" >
            <input type="text" name="localizacao" placeholder="Localização" required>
            <input type="text" name="remetente" placeholder="Remetente">
            <input type="number" name="quantidade" placeholder="Quantidade" required>
            <button type="submit">Salvar</button>
            @csrf
        </form>
      </div>

</x-layout>