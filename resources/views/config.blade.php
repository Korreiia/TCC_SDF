<x-layout>
    <link rel="stylesheet" href="/css/style_config.css">

        <h1>Meu Perfil</h1>
        <hr>
        <br>

        <h2>Dados Pessoais</h2>
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

        <h2>Atualizar E-email</h2>
        <form action="{{ route('atualizarUsuario1',['id'=>$usuarios->id]) }}" method="post">
        @method('put')
            <input class="dados" type="email" name="email" placeholder="E-mail" required>
        <br>
            <button class="dados" type="submit">Atualizar E-mail</button>
            @csrf
        <hr>
        </form>

        <br>

        <h2>Atualizar Senha</h2>
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

        <h2>Deletar Conta</h2>
        <form action="{{ route('deletarUsuario', ['id'=>$usuarios->id]) }}" method="post">           
            @csrf 
            @method('delete')
            <button class="del" type="submit">Deletar</button>
        </form>
</x-layout>