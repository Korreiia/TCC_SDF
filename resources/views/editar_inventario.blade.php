<x-layout>

<h1>Editar Inventario</h1>

<div class="formulario">
        <form action="{{ route('atualizarInventario',['id'=>$inventarios->id]) }}" method="post">
          @method('put')
            <input type="text" name="estadofuncionamento" value="{{ $inventarios->estadofuncionamento }}" placeholder="Está Funcionando?" required>
            <input type="date" name="dataentrada" value="{{ $inventarios->dataentrada }}" placeholder="Data de Entrada" required>
            <input type="text" name="descricao" value="{{ $inventarios->descricao }}" placeholder="Descricao" required>
            <input type="text" name="estadoconservacao" value="{{ $inventarios->estadoconservacao }}" placeholder="Estado de Conservação">
            <input type="text" name="categoria" value="{{ $inventarios->categoria }}" placeholder="Categoria" >
            <input type="text" name="localizacao" value="{{ $inventarios->localizacao }}" placeholder="Localização" required>
            <input type="text" name="remetente" value="{{ $inventarios->remetente }}" placeholder="Remetente" required>
            <input type="number" name="quantidade" value="{{ $inventarios->quantidade }}" placeholder="Quantidade" required>
            <button type="submit">Atualizar</button>
            @csrf
        </form>
      </div>

</x-layout>