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

        <hr>

        <form action="{{ route('atualizarUsuario2',['id'=>$usuarios->id]) }}" method="post">
        @method('put')
            <h1>Atualizar Senha</h1>
            <input type="password" name="senha1" placeholder="Senha" required>
            <input type="password" name="senha2" placeholder="Repita a senha" required>
        <hr>
            <button type="submit">Atualizar Senha</button>
            @csrf
        </form>

</x-layout>