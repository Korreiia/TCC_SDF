<x-layout>

    <h1>Meu Perfil</h1>
        <hr>
        <h1>Atualizar E-email</h1>
        <form action="{{ route('atualizarUsuario1',['id'=>$usuarios->id]) }}" method="post">
        @method('put')
            <input type="email" name="email" placeholder="E-mail" required>
        <hr>
            <button type="submit">Atualizar E-mail</button>
            @csrf
        </form>

        <br>

        <form action="{{ route('atualizarUsuario2',['id'=>$usuarios->id]) }}" method="post">
        @method('put')
            <h1>Atualizar Senha</h1>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="password" name="senha1" placeholder="Repita a senha" required>
        <hr>
            <button type="submit">Atualizar Senha</button>
            @csrf
        </form>

        <br>

        <h1>Deletar Conta</h1>
        <form action="{{ route('deletarUsuario', ['id'=>$usuarios->id]) }}" method="post">           
            @csrf 
            @method('delete')
            <button type="submit">Deletar</button>
        </form>

</x-layout>