    <x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

    <div class="formulario">
        <form action="/criar_solicitacao" method="post">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="number" name="telefone1" placeholder="Telefone" required>
            <input type="number" name="telefone2" placeholder="Telefone de Recado">
            <input type="text" name="endereco" placeholder="Endereço" required>
            <input type="number" name="cpf" placeholder="CPF" required>
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="curso" placeholder="Curso">
            <input type="number" name="rm" placeholder="RM">
            <button type="submit">Salvar</button>
            @csrf
        </form>
      </div>

    </x-layout>