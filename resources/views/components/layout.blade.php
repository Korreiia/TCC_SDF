<?php
    use Illuminate\Support\Facades\Session;

    $usuario = Session::get('login_usuario');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/css/sytle_layout.css">
    <title>Recicla ETEC</title>
</head>

<body>
    <div class="layout">
    <header>
        <img class="logo" src="/img/logoR.png" alt="logo"></img>

        <nav>
            <div class="icon"><a href="/home"> <img class="icon" src="/img/icone_home.png" alt=""> Home </a></div>

            @if(!empty($usuario) && $usuario->id_tipo == 1)
            <div class="icon"><a href="/inventario"> <img class="icon" src="/img/icon_inven.png" alt="">Inventário</a></div>
            @endif

            <!-- <div class="icon"><a href=""> <img class="icon" src="/img/icon_hist.png" alt="">Histórico</a></div> -->

            @if(!empty($usuario) && $usuario->id_tipo == 2)
            <div class="icon"><a href="/solicitacao"> <img class="icon" src="/img/icon_solicit.png" alt="">Solicitação</a></div>
            @endif

            @if(!empty($usuario) && $usuario->id_tipo == 1)
            <div class="icon"><a href="/solicitacaoADM"> <img class="icon" src="/img/icon_solicit.png" alt="">Solicitação</a></div>
            @endif

            <!-- <div class="icon"><a href=""> <img class="icon" src="/img/icon_calen.png" alt="">Calendário</a></div> -->

            @if($usuario != null)

            <div class="icon"><a href="{{ route('configView', ['id'=>$usuario->id]) }}"> <img class="icon" src="/img/icon_conf.png" alt="">Configurações</a></div>
            @endif

            <div class="right"> <!-- lado do botão de login/logout e 'bem-vindo' -->

                <div class="bem_vindo">
                    @if(!empty($usuario))
                        <th>Bem Vindo: {{ $usuario ->nome}}</th>
                    @endif
                </div>

                <div class="logins">
                    
                    @if($usuario == null)
                    <form action="/login">
                        <input class="bnt_login" type="submit" value="Login">
                    </form>
                    @endif

                    @if($usuario != null)
                    <form action="{{ route('fazer_logout') }}" method="post">
                        @csrf
                        <input class="bnt_login" type="submit" value="Logout">
                    </form>
                    @endif

                </div>

            </div>

        </nav>

    </header>
    </div>
    <div>
        {{ $slot }}
    </div>

    <footer>

    </footer>
</body>

</html>