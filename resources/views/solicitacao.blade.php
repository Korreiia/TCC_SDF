    <x-layout>
    <link rel="stylesheet" href="/css/style_solicitacao.css">

        <a href="/criar_solicitacao">Criar Solicitação</a>

        <h1>Lista de Solicitações</h1>
        <table class="table">
            <thead>
            <br>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Telefone de Recado</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                    <th scope="col">RM</th>
                </tr>
            </thead>

            <tbody>
            @foreach($solicitacaos as $solicitacao)
                <tr>
                    <th>{{ $solicitacao ->id }}</th>
                    <th>{{ $solicitacao ->nome}}</th>
                    <th>{{ $solicitacao ->telefone1 }}</th>
                    <th>{{ $solicitacao ->telefone2 }}</th>
                    <th>{{ $solicitacao ->endereco }}</th>
                    <th>{{ $solicitacao ->cpf }}</th>
                    <th>{{ $solicitacao ->email }}</th>
                    <th>{{ $solicitacao ->curso }}</th>
                    <th>{{ $solicitacao ->rm }}</th>
                </tr>
            @endforeach
            </tbody>

        </table>
        
    </x-layout>