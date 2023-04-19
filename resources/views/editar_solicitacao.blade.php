<x-layout>

<h1>Editar Solicitação</h1>

<div class="formulario">
        <form action="{{ route('atualizarSolicitacao',['id'=>$solicitacaos->id]) }}" method="post">
          @method('put')
            <input type="text" name="nome" value="{{ $solicitacaos->nome }}" placeholder="Nome" required>
            <input type="number" name="telefone1" value="{{ $solicitacaos->telefone1 }}" placeholder="Telefone" required>
            <input type="number" name="telefone2" value="{{ $solicitacaos->telefone2 }}" placeholder="Telefone de Recado">
            <input type="text" name="endereco" value="{{ $solicitacaos->endereco }}" placeholder="Endereço">
            <input type="number" name="cpf" value="{{ $solicitacaos->cpf }}" placeholder="CPF" required>
            <input type="text" name="email" value="{{ $solicitacaos->email }}" placeholder="Email">
            <input type="text" name="curso" value="{{ $solicitacaos->curso }}" placeholder="Curso">
            <input type="number" name="rm" value="{{ $solicitacaos->rm }}" placeholder="RM">
            <input type="number" name="rm" value="{{ $solicitacaos->rm }}" placeholder="RM">
            <input type="text" name="descpedido" value="{{ $solicitacaos->descpedido }}" placeholder="Descrição do Pedido" required>
            <button type="submit">Atualizar</button>
            @csrf
        </form>
      </div>

</x-layout>