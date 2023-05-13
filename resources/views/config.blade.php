<x-layout>
    <link rel="stylesheet" href="/css/style_config.css">
    <div class="layout2">
        <h1>Meu Perfil</h1>
        <hr>
        <br>

        <h1>Dados Pessoais</h1>
        <form action="{{ route('atualizarUsuario3',['id'=>$usuarios->id]) }}" method="post">
        @method('put')
            <input class="dados" type="text" name="nome" value="{{ $usuarios->nome }}" placeholder="Nome" required>
            <input class="dados" type="number" name="cpf" value="{{ $usuarios->cpf }}" placeholder="CPF" required>
            <input class="dados" type="number" name="telefone" value="{{ $usuarios->telefone }}" placeholder="Telefone/Celular" required>
            <input class="dados" type="text" name="endereco" value="{{ $usuarios->endereco }}" placeholder="Endereço" required>
        <br>
            <button class="dados" type="submit">Atualizar Dados</button>
            @csrf
        <hr>    
        </form>

        <br>

        <h1>Atualizar E-email</h1>
        <form action="{{ route('atualizarUsuario1',['id'=>$usuarios->id]) }}" method="post">
        @method('put')
            <input class="dados" type="email" name="email" placeholder="E-mail" required>
        <br>
            <button class="dados" type="submit">Atualizar E-mail</button>
            @csrf
        <hr>
        </form>

        <br>

        <h1>Atualizar Senha</h1>
        <form action="{{ route('atualizarUsuario2',['id'=>$usuarios->id]) }}" method="post">
        @method('put')
            <input class="dados" type="password" name="senha" placeholder="Senha" required>
            <input class="dados" type="password" name="senha1" placeholder="Repita a senha" required>
        <br>
            <button class="dados" type="submit">Atualizar Senha</button>
            @csrf
        <hr>    
        </form>

        <br>

        <h1>Deletar Conta</h1>
        <form action="{{ route('deletarUsuario', ['id'=>$usuarios->id]) }}" method="post">           
            @csrf 
            @method('delete')
            <button class="dados" type="submit">Deletar</button>
        </form>
    </div>
</x-layout>