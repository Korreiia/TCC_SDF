<x-layout>

<link rel="stylesheet" href="/css/style_edt_invnt.css">

  <div class="layout2">  

    <h1>Editar Inventario</h1>

        <div class="formulario">
          <form action="{{ route('atualizarInventario',['id'=>$inventarios->id]) }}" method="post">
            @method('put')
            <hr id="hr">
              <h1>Está Funcionando?</h1>
              <input type="text" name="estadofuncionamento" value="{{ $inventarios->estadofuncionamento }}" placeholder="Campo Obrigatório" required>

              <h1>Data de Entrada</h1>
              <input type="date" name="dataentrada" value="{{ $inventarios->dataentrada }}" required>

              <h1>Descrição</h1>
              <textarea name="descricao" cols="40" rows="5" placeholder="Campo Obrigatório" required>{{ $inventarios->descricao }}</textarea>

              <h1>Estado de Conservação</h1>
              <input type="text" name="estadoconservacao" value="{{ $inventarios->estadoconservacao }}">

              <h1>Quantidade</h1>
              <input type="number" name="quantidade" value="{{ $inventarios->quantidade }}" placeholder="Campo Obrigatório" required>
            <hr>
              <button type="submit">Salvar</button>
              @csrf
          </form>
        </div>
  </div>
</x-layout>