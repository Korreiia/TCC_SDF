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
        

        <nav>
        <div class="left">
            <img class="logo" src="/img/reciclaetecNs.png" alt="logo">

            <a href="/home"> <img class="icon" src="/img/icone_home.png" alt=""> Home </a>

            @if(!empty($usuario) && $usuario->id_tipo == 1)
            <a href="/inventario"> <img class="icon" src="/img/icon_inven.png" alt="">Inventário</a>
            @endif

            @if(!empty($usuario) && $usuario->id_tipo == 1)
            <a href="/historico"> <img class="icon" src="/img/icon_hist.png" alt="">Histórico</a>
            @endif

            @if(!empty($usuario) && $usuario->id_tipo == 2)
            <a href="/solicitacao"> <img class="icon" src="/img/icon_solicit.png" alt="">Solicitação</a>
            @endif

            @if(!empty($usuario) && $usuario->id_tipo == 1)
            <a href="/solicitacaoADM"> <img class="icon" src="/img/icon_solicit.png" alt="">Solicitação</a>
            @endif

            @if(!empty($usuario) && $usuario->id_tipo == 1)
            <a href="/notificacao"> <img class="icon" src="{{ $icon }}" alt="">Notificação</a>
            @endif

            @if($usuario != null)
            <a href="{{ route('configView', ['id'=>$usuario->id]) }}"> <img class="icon" src="/img/icon_conf.png" alt="">Configurações</a>
            @endif
        </div>
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
                        <input class="bnt_logout" type="submit" value="Logout">
                    </form>
                    @endif

                </div>

            </div>

        </nav>

    </header>

    <div class="conteudo">
        {{ $slot }}
    </div>

    <footer>

    </footer>
    </div>
    



<!-- Corno é assim mesmo, fica xeretando codigo do site BY:Korrêia-->



























































































































<!-- Video do Carlinhos engolindo mijo
...'''''''''''''''''''''''''''..........''..............''''',,,;;;;:::cccclllllllllllllllllllllloooooolllllccccccc:;,,,:ccccc::;,;:::;,,,,,'''''''''''''''''''''''''''''............................',;
..'''''''''''''''''''''''''''''''''''''''''''...........''''',,,,;;;:::cccllllloooooooooooloooooooooooooolllllcccccc;,,;cccccc::;,,:::;,,,,'''''''''''''''''''''''''''''''..........................'',;
..'''''''''''''''''''''''''''''''''''...''''''''........'''''',,,;;;:::ccclllloooooooooooooooooodddddddoooollllllllc:,,:ccccc::;;,;::;,,,,,'''''''''''''''''''''''''''''''''......................''',,,
..''''''''''''''''''''''''''''''''...........'''''.....'''''''',,,;;;::cccccccclllllccccccllooodddddddddooooollllllc:;;:cccc::;;;;;:;;,,,,''''''''''''''''''''''''''''''''''''...............''.''',,''.
'''''''''''''''''''''''''''''''''''...........'''''''''''''''''',,,;;;:::::ccclllllllllc:::cloodddddddddddoooooollllc::cccc::::::::;;,,,,''''''''''''''''''''''''''''''''''''''.............'''''',,'...
',,;;,,,,,,,,,,,,,',,,'''''''''''''''''''.....''''''''''''''''''',,,;;;;::cllooooddddddoolc::clodddddddddddooooooooolllllllcccc::;;;,,,,,,'''''''''''''''''''''''''''''''''''''''...''''''''''',;;,,,'''
',;:::;;:;;;;;,,,,,,,,,,,,,,,,,,,''''''''''''''''''''''''''''''''',,,;;;:cccllooodddddddddool::cloddddddddddooooooooooooolllcc::;;;;,,,,,,,,,,'''''''''''''''''''''''''''''''''''''''''',,,,,;;;;:::,',;
'',:::::::::::;;;;;:::::;;;;;;;;,,,,,,,,,,,,'''''''',,''''''''''''',,,;;::cccllloodddddddddddol::coddddddddddddooooooooolllccc::;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,'''',,,,,,,,,,,'''',,,'',;::;;::::::;'',:
,,,;:::::::::::;;;;:::::::::::::::::::::;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,;;::ccclllooddddddddddddoc:cooddddddddddddddooooolllccc::;;;;;,,,,,,,,,,,,,;;,,;;;;;;;;;;;;;;;;:::;:::;,'',;:,,,;::::::ccc:;,',;:
;,,,;:::::::::::;,;::::::::::ccccc::::::::;,,;::;,;:::;::;:;;;;;;;;;;;;;;;:cccllloodddddddddddddolcclodddddddddddddoooollllcccc::::;;;:;;;;::;::::::;;::::::::::::c:::cc:;::;,''',:;,,;::::::cccc:,'',::
,,,,;;:::::::::::;,;:::::::::ccccccc::::::;,,;;::;;:c::::::c:;;:::::c:c::;:cccllloodddddddddddddddlcclooddddddddddooooolllcccccccc::::::;;:cc:ccccc:;;:c::ccccc::cc::ccc;;;:;''',;:,,;:cc::::::::;,'',;;
,,'',,,;;;;;;;:::;,,;:::::::::cccccccccc:::;,,;:c::ccccccccc:;;::::ccccc:;:ccclllooddddddddddddddddolllloooddddddooooollllccccccc::;::::;::cccccccc:;;:cccccccc::ccc:ccc;;:;,,',,:;,,;:;;;;;;;;,,,''''''
;;;;,,,,,,,,,,,,,,,,;;::::::::::::::::::::::;;:ccllllcccccccc:;:cccccccc:::ccclllooddddddddddddddddooolllooooooooooooolllllccccccc::::::::ccccccc::;;;:::cc:::::::::::::;;;;,,,,,,,',,,,,,,,'''''''.....
lllllccccc::::;;;;;;::::::;;;;;;;;;;;;;;;;;;;;::clllccccccccc:::cccccccc:::ccclllooodddxddddddddddddddollllllllloooooollllllcccccc:::::::::::::::;;;;;;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,;;;;;;;;,'.......
lllolllloooolc:;;;;;;:cccccccccc::::::::::::::::ccccccccccccc::::::::::::::::ccllooddxxkkxdooooddddooll:;:loooodddddoooolllllccccc:::::;;;;;;;;;,,,,,,,,,''',,,,,,,,,,,;;;;;;;;::::cccccclllccc:;'......
llllllllloooolc;,,,,,,:looooooooooooolllllllllllooooolllllllcc::::::::::;;:::cclooddxkOOxl,..',,;,,'''...'cxOOOOOkkkxxdddooollcc::::::;;;,,,,,,,,,,,,,''''',;;:::cccccccccllllllllllllllllllllcc;,......
cccllllllooooolc;,,,,,;cooooooooooooooooooooddddddxxxddoollllllcc:cccc::cccccloodxxkkOOkc......',,'.......'lkOOOOOOkkkkkkkxxddolllccc::;;;;;;;,,,,,,,''''',:ccllllllllllllllllllllllllllllllllcc:,.....'
,,,,;;;;::cooool:,,,,,;:llooooooooooddddddddddddxxxxxxoollllllllllooooooooodddddxxkkOOOx;...,:lxOkdlcc:,'.,lkOOOOOOkkkkkkkkkkxddooollcc::;;;;;,,,,,,''''',:cllllllllllllllllllllllcccccccccccccc;'.....'
''''''''',;loool:;,,,,,;;:::::ccccclloodddooododdddxxxdoooooooooddxxxxxxxxxxxxdoodxxkO0Od:;coxOKKKKKKK0kdooxOOOOOOkxkkOkkkkkkxdddooollllccc::;;;;,,,,,,,,:cllllccccccccc::::::;;;;;;,,,,,;:cccc:,.....',
'''''''''';clollc;,,,,,,,,,,,,,,,,;;:coddolcccccllllooddddddddddxxkkkkkkkxxdxddocloodxkxdlcc:codkkkkxdlodkOkxkkxxxddxkkkkkkkkxxddooolllllllccc::::;;;;;;;cllllc:;,,,,,,,,,,''''''''''''',;ccccc;'.....';
,,'''''''',:lllll:,,,''''''',',,'',,;:loooc:;;::::cccllodxxxxxxxkkkkkkkkkkkxdollccccclllcc:,',;;col:;,,,cdkdoddoooooddxkkkxxxxxddoooollllllllcccccc::;;;:cllll:,,,'''''''''''''''''''''',:cccc:,'....',:
:::::::::::clllllc;,''''''''''''''',,:loool:;;;;;::ccllodxkkkkkkkOkkkkkOO000Oxdllcccccccc::;;;;:cdxolc::loolllloooodxxkkkkxxxxdddoooolllllllllllllllcc::clolll:,,,,,,,,,,,,,,,,,,;;;:;;;:cllcc:'.....';:
cccccccclllllllllc;,'''''''''''''''',;loool:;;;;;;::cloddkOOOOOOOOOOOOO000K00Okxxddoc:;;;;:ccc:;;codddddool:;:clodxxkkkkkkxxxxdddoooooolllllllllllllllllloooolc:::::::::ccccclllllooollllllllc;'....',::
ccccccccclllllllll:,,'''''''''''''',,;coool:;;;;;:::cloddxkOOOOOOOOOOO00KKKKK00OOkxl;''..';cllc;,;lxkkOkxo:,''',;cloddxkkkkkkkxdoolllooollllllllllllllllodddooooooooooooooooddddddddoooolllll:,'....';::
,,,;;;;;:::cccllllc;,''''''''''''''',;cloolc;;;:::cclloooddxxkkkkOOOOO00KK0Oxdolcc:;,,,,,,,;;;;:cldddol:::;;;;;;;:::cccoddxk0KKOkkkxddooollllllllllllllloddddddddooodddddddooooooooollllllllc;'.....,;::
......'''',,,:clllc;,,'''''''''''''',,:loool:::ccccllllooooddddddoooxkO0KK0dc:;;;;;;;;;;;;;;:;;oKNNXXOl;;::::::ccccccccccclod0XXNNNNX00OOkxdoolllllllllldxxxxxdollllolllcccc::::::;;::cllllcc,.....';:::
..........''';cllll:,,'''''''''''''',,:looolccccclllllllooooollllodxOKXX0xl:;;;;;;;::::::;;::::oKXXXXKd::clc:::cccllcccccccccoxOKKKKKXNNNXXK00Oxddoolclodxxxddlc:;;;;;,,,,,,,''',,,;;;:clllc:,.....';:::
............',:llolc;,'''''''''''''',,:loooolcccccllloollllodxk0KXXXXNNKd:,,;;;cloollcc::;::cccdKNNNNXkc:lllc::ldxxxxxxddoollcccccclodxxkOKXNNXXKK0Oxdooddxdol:;;;;,,,'''''''''',,;;;;:cclcc;'.....,::::
............',:llllc;,''''''''''',',,,:lodddolcccclllllldk0KXXNNNNXK0kxl:::cccldkOOkxdl::;::lllo0NXXXKkcclllc::lx0KKKKKKKK00Okdl:;;;;;;;;:ldxkOKXNNNXK0Ododdoc;;;;;,,,,'''''''',,;;,,,:cccc:,.....',::::
............'';clllc;,''''''''''',,,,,:lddddolllcccloxOOKNNNNXKOkxolcc:coddxxdodkOOkdlc:;;::lolo0NNNNXOoclllc::clx0KKKKKXXNNNNX0kxdoolllc:::::clodx0XNWN0kdolc;;;;;;;,,,,,'',,,;;;,,',:cccc;'.....,;::::
............'';cllll:,''''''''''',,,,;:ldxddolllodxOKNWNNXKOxdolcclloolllooolcloxkxdl:;;;;::loloONNNNN0oclllc::::cdk00OOOkxxkkkkkkkxxxxxxdooc:::;:cldOXNNXOdlc:;;;;;;;;;;;;;;:;;;;,'';cllll:,',,;::ccccc
............'',:llll:,''''''''''',,,;:cldxxdoldOKXNNNXK0kxdlcccldxkOko:;;;;;::cllolc:;;;;:::loloOXNXXXKdclllc:::::codxxxxdolllloxkkkkxxxxxxkxddolc::coOXNWN0xolc:::looooolloooc::;,',codddoocc::clclllcc
............'',:llllc;,''''''''',,;;::cldxdoloOXNWNKOxdollllodxkOOOOxc,,,,;cdkkkxdl:;;;;;:::coloONWWWWXxccllc::::::coO0KK0Oxoooodkkkkkkkkkkkkxxxxdlc:clkKNWNKkdoc:coddxxdoodxdl:c:;',cdddddollc;cccclllc
...........''',:llllc;,,,',,,',,,;::::clddoco0NWWX0xoolllodxkkkOkO0Oxc;:::coxOOOkdc;;;;;::::clllkXXXXX0dc:llc:::::::lxKXXKK00OOOOkkkkkkkkkkkxxdddxxocclxKNWNXkolc:coooooooddddlccc:;;lodddoc::;,;:cllllc
.........''''',:lllll:,,,,,,,,,;;::cccclooclOXNWX0xdoodxxkkkkOOOOO0OdlclllloxOOkdl:;;;;;::::clllkXXXXXKxc:ccc::::::::lkKKKK0KXNNXOkxxxxxddddddoodxdollxKNWWXOdlc::::cc:cclollc:;,,,,;cooooc;,,,,,:clllc:
........''''',,:lloolc;,,,;;;;;::ccclllllclOXNWN0xdodxkkkkkkOOOOOO0Ol::::;:coddol:;;;;;;::::cccckNNXXK0d:;:::::::::::coxkkxddxkkkxxxddddoooooooooolllxKWWWN0dlcc::::::::cllc::;,,,,,;cloolc;,,,',:clllc:
.......''''',,;:looooc:;;;:::cclllllloolccd0NNWN0kddxkkkkkkOOOOOO00x:''''''',;::;;;;;;:::::::c:;lxxxddl:,,;;::::::::::cllcccccccccodddddooooooooollokKNWWN0xolccc:::::cclllcc:;;;;,,;cloooc;,,,,,:clllc;
.......'''',,,;:looooc:;;;::clloooooooolc:cx0NWWNKkxxOOOOOOO00O000Kx;..''''',,,;;;;;;::::::;;;'............,,;;;;:::::::::cccccc::ldddddddddddollcoOXWWWWXkolllccccccclllllcc:;;;;;;;cloooc;,,,,,:clllc;
.......''',,,;;:looooc:;;;::clloooooooool::cd0XWWNX0xxxkOO00OOOO00Kx;..'''',,,,;;;;;;;:::;,'..             ..',;;;::::::::cccccc::ldxdddddxxxolccoOXWWWWXOdllcc::::::cclllc:;;;,,,,,;cloooc;,,,,,:cllcc;
.....''''',,,;;:looool:::::ccllooooooooool::cokXNWWNKkddxkOOOOOO000x;..'''',,,;;;;;;;::;;,..                 ..',;;;::::::cc::::::lddddddddxxdoodOXNNNNXOdlcc::;;;;;;:cccc:;;,,,,,,,;cooolc;,,,,,:clcc:,
'''''''',,,;;::coddddlc:::ccllooooooooodddl::coOXWWWNX0xddxOOOO0000d,...'''',,;;;;;;:;;;;'.                   ..,;;;;:::::::::::;;cddollloodxxkkO0KKKXKKkdlc::;;;;;;;:cccc;;,,,,,,,,:looolc;,,,',:cllcc;
,,,,,,,;;;:::cclodxxdolcccllloooooddddddxxdl:::lxKNWWWNKOxdxO000000d,......',,,;;;;;;;;;,.                     .',;;;::::::::::;;;lddl::cllodxxkOO0000000Okxdlc:;;;;:cclc:;;;,,,,,,;:looooc;,,,,;cllllc;
,;;;;;;;::cclllodxkxxdolllloooooodddddddxxkdc;;:cx0NNNNXK0OO000000Ox:......'',,;;;;;;;;,..                     ..';;;;::::::::;;:lddoc;;;:cloddxkkOOOOOOOOOOkxdc:;;;:cllc:;;;;;;;;;;codddoc:;;;;;cllllc;
;;;;;;:::ccclloodxkkxxdoooooooooddddddddxkkkdc;;cdOKKKKK0000000000Oko:'.....'',;;;;;;;;'.                       .',;;;::llc::;;coxkxo:,,,;;:cloodxkkkkkkkxxxxxdl::;::cllc:;;;;;;;;;;codddol:::;;:clollc:
;;;;;::::cclllooxkkkkxdoooooooodddddddddxkkkxdlodkO00000000000000Okxdo:'.....;lxxo:;;;,.                        ..,;;:lx00kl;;coxkkkxolc:;;;;;;::cloodddooooollc:;;::cllc:;;;;;;;;;;coddddl:::;;:clollc:
;;;;::::ccclloodxkkkkxddoooooooddddddddxxxxxdddxxkkOO0000000000OOkxdoooc.....:kKXKx:;,'.                         .',;lx0KKkc;clloxO0KKXKK0Okxoolcc;;;:cc::ccllcc:::ccllollc::;;;;;;;cdkkkkdl::;;:cllllc:
;;;:::::ccclloodxkkkkxddddddddddddddddxxxxdollloddxxkkkkOOOOOkxddooooxOkc....;ok00Ol;'..                         ..,;lxkkko;;c::lxOKXNNWWWWWWNNNXKko::::::ldxxxxxxxxkkkkkkkxdc:;;;;;lxOOO0Okxoc::cloolc:
::::cccllllooddxkkkkkkxxxxxxxxxxkkkkkkkkkkxl:;:cllooddddddddddxO000KKXXKkc'..';coxdl,..                           .',:looc;;lc;;lxO0XNNWWWWWWWWWWNKOkkkkkkOOOOOOOOOOOOO00000Okoc::::ldkkOOOOOOkdolooolc:
cloooddddoodxkkkOOOOOOOkkkkkxxxxxxxxkkxxkkkdl:,;;::cccc:cdkO0XNNWWWWWNNNNKkl,...,::;...                            ..'',,,cdkdlloxO0XNWWWWWWWWWWWNOddddxkOOkxddddddddxOO0000Okoc:::ccoddxxxkkOOkdoooool:
lodddddodooodxkkkOOOOkkxxxxdddddddddxxddxkkkxoc;,,,,;,,,ckKXNWWWWWWWWWWWWWN0l'.......                              .....,lkOOkddxkOKXNNWWWWWWWWWN0dlcclodkkxoc:::::coxOO00Okdc;;;::cclodddollodolloooool
llllllllllloodxxkkkkkxdddddoooooooooddodxkkkkxdoc:::::ccoOKNWWWWWWWWWWWWWWWXkc;.....                                  .:xO000xooxkO0KXXNNNWWWWWNKkolllodxkOOkdlcccoxkOOOOkxl:;,,;;;::looool::::::loddddd
cccccccllllooodxxkkkkdooooooooolloooooodxkkkkxddddddddoloOXNWWWWWWWWWWWWWWWNKOko;.                                   'lk0KK0xlcodxkO00KKXXNNNNX0kxxxddxkO0KXXK0OOO0KKK0Okxolc::;;,,;:cloooc:;;;;:codxkkk
ccccccclllooooddxkkkxdoooooooooooooddddxkOOkkxdddddddddookKXNWWWWWWWWWWWWWWNXKOxo,              ........             ;k0000koccclodxkkOO00KXXKOxdxxxxxkO00KXXXXXXXXXKK0Okxxxdddoc:;;;cloolc;;;;:coxkkOOO
ccccccccllllooodxkkkxxdoooooooooooddxxxxkOOkxddoodddddoooox0XNWWWWWWWWWWWNNNX0kxo,         ';;;:ccllllodol;.         'dOO00Oxool::llooodxkO0OkdlloxxxkkkkOOO0KKXXXXKK00OkkkkkkxxxolccloodoollodxkkOOOOOk
ccccccccllllllooxxkkxxdoooooooooooooooodxkkxxdoooooooolllclx0KXNNNNNNNNNXXX0kxxko'        .cdddooddxxk0KXKx,         .cxkO0Okxkxoodoc::cllodddlc:codxxxxddddxkO00KKKK000OOkkkkkkkxxdddxkkkOOOOOOOOOkkkxd
cccccccccclllllloooooollllllllllllllccloxxxxdollllllllllcccldkO0KKKKKK00OOxolloo:.        'lddddddxOO00KK0kc.         ,oxkOOOOKKK0kdllloddddxdoc::lddxxdllclodxkkOO000OkkkkkkkkkkkxxkkO0000000Okkxxxddol
ccccccccccccclllllccccccclllllcccccccccodxddolccccccllcc::::cloddddxxddolcc:;;;,.        .,loooooodxkkOOkxdc'         'lxxxxxk0K0OxoodxkkOOOOkxdoloxkkkxolccldxkkOOOkkxddkkOOOkxddddxxO00K00Okxolloooooo
cccccccccccccccccccccccccllllcccccccccclodoolc::ccccccc::;;;;;;;:::::::::::;;,,,.        .;lolllllllooooolc:,.        .:lolllloddddoddkO00K000000OO00000OxoccoxO00KK00OkkOO0KK0OkxdooodkO0000Okkxxkkkxxx
cccccccccccccc:::::::::cccllccccccccccclloolc::::ccccccc:::;;::::::::::::::::;;,.        .:llllccccccccccc::;'.       .'cccc::::ccccllxOO00000OOkkkOO0000OkxookO0KKKKK0kxxxO0KKKK0Oxdlldk00000000OOOOOOO
lllllccccccllccccclllccccclcccccccllllllllllc:::ccccccccc::::cccllcc::ccccc:::;,.        ':lcccccccccc:::::::;.        .;cc::::::::::lxOOOOOOOkolcloxOOOOOOOkdkO00KKK0kxdooxO0KKKKK0OdodkO0000000Okxdxxx
llllllllllllllllllllcccccccccccccccllllllllcc:::cccccccc::::::cccc::;:::::::;,,'.        ':ccccc:::::::::::::;'.       .,:::;;;;;;;;:lxOOOOOOOxl:::coxOOOOOOkxxOO00OOOxoollodk0KKKKK0kddxkOOO000OOxolllo
lllllllccccccccccccccc:::cccccc:::ccllccccc::;;::::cc:::::;;;;;;;;;,;;;;;;;;,''..       .,:ccc::::::;:;;;;;;;;,.        .,,,,,,;;;;;:ldkOOOOOOxl::;;:okOOOOOkdxOOOOOOkxolccccokO0000OkdodxkOOOOOOkxocccc
ccccccc::::::ccccc::::::::::::::::::::::::;;;;;;::::::;;;;,,,,,,,,,,;;;;;;;,'''.        .,clcc:::::;;;;;;;;;,,'.        ..',,;;;;;;;:cdkOOOOOOxl;,,,:okOOOOOxodkOOOOOOxc;;;;;cdkOOOOkxocclxkOOOOOkxolccc
;;;;;;;;;;;;;;;;;;;;;;;;;;;::::::;;,,,;;;;;;,,;;;;;;;;;,,''''''''',,;;;;;;;;,,'.        .;clcc:::::;;;;;;;,,,,'.        .,;;;;;;;;;::cokOOOOOOkl;,,,:dkOOOOOxooxOOOOOOxc,,,,,:dkOOOkkxl;,;lxkOOOOkkxolll
,,,,,,,,,,,,,,,,,,,;;;;;;;;::::::;;,,,,,,,,,,,,;;;;;;,,,'''''''''',,;;::cccc:;,.        .;ccc:;;;;;;;;;;;,,,,,,.        .,;::c::::::cloxOOOOOOko:,,;cdkkOkkkxllxkOOOOOxl;,',,:okkkkkkko:,;ldkkkOkkkkxxxx
,,,,,,,,,,,,,,,,,,;;;;;;;;::::::::;,,,,,,,,,;;;,,,,,,,,''''''''''',,:cloolc;,''.        .,ccc:;;;;;;;;;;;,,;;;'.        .,,,;::c:c:ccloxOOOOOOkxolodxkkkkkkxoclxkOOOOOkl;,''';lxkkkkkkxc;,;lxkkkkkkxlccc
,,,,,,,,,,,,,,,,,;;;;;;:::::::::cc::;;;,,,,;;;,,,,,;,,,'''''''''',;clollc:;;,,,'.       ..,ccc::::;;;;;;;;;;;,.         .,;;;::::::cccoxOOOOOOOkkkkkkkkkkkdl::lxkkkkkkxo;,''',cdxkkkkkko:,:oxkkkkkkd:,''
'''''''''''''''',,,;;;::::::::::cccccc:;;,,,;,,,,,;,,,''',,,,,,,;:clcc:cccc::;;,.        ..;ccccllllccccc:::;..         .,;:::c::::cccoxOOOOOOOkdoodkkkkkkxoc:cdkkkkkkxdc;;;,;:ldxkkkkkdc;lxxxkkkxxd:'..
...........''''',,,;;;::;;;;;;;::cclllcc:;;,,,,,,,,,,,,,;;;:::ccc::::::::cc::;;,.        ..,loooddxddddooooc'.          .;;;:;;;;:::ccoxkOOOOOkxl::coxkkkkkxdl:cdxkkkkkxdllcccldxxxxxxxxl:lxkkkkxxxdc,..
..........'''',,;;:::;;;;;;;;;;;::ccllllcc:;,,,,,,,,,;;::ccloool:;;;;;;;::::;;,,'.       ...;cc::cccllllcc;'..        .,:;,,,,,,,;;::cldkkkOkkkxl::;:coxkkkkxdlcldxkkkkxxdoooodxxxxxxxxxdllxxkxxxxxxo:'.
..........'',,;::::;;;;;;;;;;;;;;:::ccllllcc::;;,,;;;:cclooollcc::;;;;;;;;;;,,,,',,.      ..';:::ccloooolc,...        .c:,'...''',,;::codxxxxxxdocc:::codxxdxxdolloddxxxxxxxxxxxxxxxxxxxdoodxxxxxxxxdl;'
........''',;;;;;;;,;;;;;,,;;;;;;;;;::cccllllcc:::;:::::cccc::ccc::;;,,,'',,,','.;c'      ..':cclloooodddl;...        'l:'.....''',;;:ccclllllllccc:::::::::cloolllllllooddddddddooooooolllodxxxxxxxxdoc
.....''',,,;;;;,,,,,,,;;;,,,;;;;;;;;;;::cccccccc:::;;;;;;;;;;::::::;;,,''''''''..,l:.    ...'cllcccccllllc'.....     .:oc''''',,,,,;;;:::::::::::::;;;;;;,,;:clllcc:::;:::cccccc::;;;;;;;::loooolloooodd
...'',,,,,,,,,,,,,,,,,,,,,,;;;;;;;;;;;;;:::::::::::;;;;;;;;;;;;;;;;;;,,'''''''...,ll'    ...,cdxxddoooool;.......    .cxo;'',,,,,,;;;;;;;;;;;:::::::;;;;;,;:cllllcc:;;,,,,;;::::;,''''',;;:ccc:;,'',,;;:
''',,,,,,,,,,,,,,,,,,,,,,,,,,,,;;;;;;;;;;;;;;::::::::;;;;,,,,,,,;;;;;,,'''''''...;od:.  ...'';oxkkkxxxxxo;........    ;xko:,,,,,,,,,,,,,,,;;;;;::ccccccccccllllllcc:;,,,,,;::::::;,''',,;:cc::::;,,,,;;;
,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,;;:::::::;;;,,,,,,,,,,,,,,,'''''..,lxx:.  .....,lxkkkxxxxxd:........    .ckkdc,''''''''''',,;;:::::ccccllllllllllllcc:::;;:::ccccc:::;;;;:::::::::::::::;;
'''''''',,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,;;:::::::;;;,,,,,,,,,,,;,,,,',';okko'   .....;oxxxxxxxxdd:.......      .;oxdc;''''''''''',;::ccccccclllllllllllccccc:c::::::::::::::::::::::::::::::::::
''''''''''',,,,,,,,,,,,,,,,,,,,,,,,,,,,,'''',,,,,;;;:::::::;;,,,,,,,,;;;;;;,,,:lxxo,.    ...,lxxxkkxxxxxdc'...           .,lddc,'''''...''',;:::::cclllllllccc::c:;;;::,,;:;,;,,:;,';:;,,;::;;:::;;;;;;;
'''''''''''',,,,,''',,,,,,,,,,,,,,,,''''''''',,,,,,;;;::::::;;;;;;,,;;:::;;,;cdkxc.       ..;dkkkkkkkkkkxo;...             .':cll:,'......'',;;::cccccc::::::;,,::,',:;,';:,''',;;'.,:,'';;,',,,,''''',,
'''''''''''''',''''''',,,,,,,,,,,,''''''''''',,,,,,,,;;;;::::::;;;;;;;:::;;;coxd:.      ...'cdkkkkkkkkkkkdc;'.....            .':c:'.......''',:cccc::;;,,,;;;;;::,',:;'';:,'..,;;'',;,.';;;,,,,........
'''''''''''''''''''''''',,,,,,,,'''''''''''''',,,,,,,,,,;;;;;::::;;;:::;;;coxd:.      ...',;cdkkkkkkkkkkxdc;;,,,,'...             .   ......'',;;::::;;,,,',,;;;::;,,;;'',:,'..';;'',;,',;;,,,,.........
''''''''''''''''''''''''',,'',''''''''''''''',,,,,,,,,,;;;;;;;::::::::,...;lc,.     ...,,,;;cdxkkkkkkkkkxoc;;;,,,,,,....                 ...'',,,'',,,,,,,,'',;;;,,;;;;,,;:;,'',;;,,;;;,,,,,,,..........
''''''''''''''''''''''''''''''''''''''''''',,,,,,,,,,;;;;;;;;;;:::::;'.    .      ...',,,,,;coxxkkkkkkkkxoc:;;;;,,''.........      ....   ......'''''''''''''',,;;,,'',,,,;;,;;;;,,'''''',,,'...........
.''''''''''''''''''''''''''''''''''''''''',,,,,,,,,,,,,,,;;;;;;;;;;;..           ..',,,,,,;:cldxkkkkkkxxxoc:;;;,,''.............................................',,,''''',;;;;;;;,''...','..............
'..''''''''''''''',,''','''''''''''''''''',,,'',,,,,,,,,,,;;;;;;;;;..        .....''',,,,;;:cldxxxxxxxddol:;,,'''.........................',,,,'.......................',;;;;;;;;;,'....................
'''''''''''''''''','''''''''..',,'',''','',,,'',,,,,,,,,,,,;;;;;;;'.    ............''',,;;:clodddddddddooc;'''''...........................'''.........................................................
'''''''''''..'''.'''''''.......''''''''''',''''',,,,,,,,,,,,;;;;;'.  .................'',,;;:cllooooooddddl;'...........................................................................................
''''''''..........'''''.......''',,''''',,,,''',,,,,,,,,,,,,,;;;;'.''......'''''''''.....''',:loooooooooool;...........'''''''..........................................................................
'''''''...........''''........''''''''',,,,'''',,',,,,,,,,,,,;;;;,,,,,',,,;;;;,,'''''......',:loooooooooool:'.........''''''''..........................................................................
''''''............'''........'''''''''''''''''',''',,,',,,,,;;;;;;;;;;;;;;;;,,,,,,,''.......':looooooooooolc,..........'''''''..........................................................................
'''''............''''........''''''''''''''''''''',,,,',,,;;;;;;;;;;;;;::;;,,,,,;;,,''......,cllloooooooolll;..........''''''...........................................................................
-->





































































<!-- _                                    
    / \   _ __ ___   ___   __ _ _   _ ___ 
   / _ \ | '_ ` _ \ / _ \ / _` | | | / __|
  / ___ \| | | | | | (_) | (_| | |_| \__ \
 /_/   \_\_| |_| |_|\___/ \__, |\__,_|___/
                          |___/            -->



































































































































<!--
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXNNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXK0kxxxxddooooooodxkkO0KXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXK0kdoc:,'................'',:loxOKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXK0d:,'.............................,:dOXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX0xc,....................................,lkKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKx:.........................................,cd0XNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKOl'..........''''....''''.......................;o0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKx;....',;::cccccllllccccccc::::;''''...............;xKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKx,..,:clloooddddddddddddddddddddoolcc::;,'...........'l0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKd,':cllllooodddddddxxxddxxxxxxxdddddoooollc,'...........:kXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX0o;:cllllloooodddddxxxxxxxxxxxxxxxddddddooool:,'...........;xXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKd;:lcllllooooddddddxxxxxxxxxxxxxxxxxddddddoooc;,'''.........:0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX0dcccccclloooodddddddxxxxkkkkkkkkxxxxxdddddoooolc:;,'.........'oKNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX0o;:lcccclloooddddddxxxxkkkkkkkkkkxxxxxddddooooolc:,,,'''''.....;kXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXk:;ccccclloooddddddxxxxkkkkkkkkkxxxxxxdddddooooooc:;;;,,,''.....'oKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKo;:cccclloooddddxxxxxxkkxxxxxxxxxxxxxddddddoooooolc:;;;;,,,'''...:0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKo;ccccllooodddxxxxxxxkkkxxkxxxxxxxxxxxxddddoooooollc::;;,,,,''...;kXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKd:ccclllodddxxxxkkkkkkkkkkkkkkkkkxxxxxdddddoooooollllcc:;;;,,'''.,kXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXklcllllooddddxxxxkkkkkkkxxxxxdddoolcccc:codoooooooooollc:;;;,,,,.,xXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXk:,,,;;clooodddxxxxxkkxddoc:;,,,'',,;::::cccllooooooooolc:;,,,,'.'dXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKo'......';:clooddddxxxdolc:;,,,,;clodddoollcccloooooooool:;,,,''''oXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx;,;;;;;,,,;:cclooddddddolcccccccodxkkkkkxxdoollloodoooool:;,,,,,',dXNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXx::cloooolcc:::cclodxddoolcccclllclodxxddddddddooooddooooo:;,,,,,:cokKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKX0occcccc::ccc:;,;loxkkxolccc:c:;;;;;;c:;;::clloooddddddoooc;,;;;cooccdKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKXXKKXXx:,.','..'.',;,,cdxkkxdoolc;;;;:ll'....',,;:clodddddddoooc;;cclooooolkXNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKXKXx;..,:;..'';:;;:ldxxxddddxoc:cccloc::cllloooooddxxxdddooolccloooddodoxKNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKx:;::cccccllc::ldxxxddddxxddollllllloooddxxxxxxxxxxdddoooollllloxxdddd0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKdccccccccclolcloxxxxdddxxxxxxxddddddxxxkkkkkkkxxxxxxddoooolooooodxxdod0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKXXKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKK0dlooooooooolllodxxxddddddxxkkkkkxkkkkkkOOOOOkkkxxxxxddooooodddxxxxkxldKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKOoooddddddoolloddxxxdddddddxkkOOkkkkkkkkkOOOOkkkxxxdddooooloddodkkxxxokXNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKOolodddddoolclodxxxxdddddddxxkkkkOOOkkkkOOkkkkxxxxddooooooloddodxdddod0NXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKOoloodddoolllodxxkxxxxddddddxkkkkkOOkkkkOkkkkxxxxdddoooooooododxxddodOXNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKKOollooooollclodxxxxxxxxxxdddxxxkkkkkkkkkkkkkxxxddddoooooooooddxkkxddOXNXXNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKKKOocloooolc:::clloolcc:::looodxxxxxxxxkkkkkkxxxxdddoooooooloodxxxxdx0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKKK000xccllllc:;,'',;:cccllc:;:cldxkxxxxxxxxxxxxxdddddooooooooooccodxxOKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKK0000kl:ccccc:::;,',:clolccllooddxxxxxxdddxxxxxdddooooooooooooollOKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKK00000dc::ccccc:,...,::'..',:odddxxxdddddooddddooollloooooooooood0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXXXXXXXXXXKKKKKKKKKKKK00000ko:::;;;,.....','....'';:::cllllcloooloooooollooooooooooooxKNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXKKKKXXXXXXXXXXXXXXXXXXXKKKKKKKKK000000000kc,'.......,;:c:;;;::;;:;,,;;;;,';:::cldoooooooooooooooookXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXKKKKXXXXXXXXXXXXXXXXXXXKKKKKKKKK000000OOOOd;....',,;:cloolllllclllc:::::;,;;;;codoooooooooooooooooOXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXKKKKXXXXXXXXXXXXXXXXXXXKKKKKKKK000000OOOOOko;;;,,,,,;::cc::ccllllccccccclooooodddooooodooolloooood0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXKKKKXXXXXXXXXXXXXXXXXXKKKKKKKK000000OOOOOOOxl::::;;:codddddddxxdooooodddddxdddddooooooooollllloooxKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXKKKKKKKK000000OOOOOkkkxl::c::;clooooooooolllodddddddddddoooooooooolllllloooxKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXKKKKKKKK00000OOOOOkkkkkxl::::;,'',,,,,,;;cloddddddddddooooooooollllllllloood0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXXXKKKKKKK000000OOOOOkkkxxkdl::::;;,,''',;:cooddddddddddooollllllllllllllooooloOXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXXKKKKKKK000000OOOOOkkkkkkxo:::ccccccllodxxxddddxdddddollc:::ccccccccloddollllkKK0KXNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXXKKKKKKK000000OOOOOkkkkxxxdc;:cccllloooddxxxxxxdddddolc:;;;;:ccccclodddoollccclcllxKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXKKKKKKKK000000OOOOOkkkkxxxxc,,;cccc::clllodxddolcclc;;;'..';:ccclodxddolc:;:::::::ckXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXXXXXKKKKKKKK000000OOOOOkkkkxxxxd:''',,,,,,,;::ccc:;'..'''....,:cllodxxdol::;;::::;;::::o0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXXXXKXXKKKKKKKKK000000OOOOOkkkkxxxxxdc'.....'...'..............,:llooxxxoc:;;;::::;::::::::cd0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXXXKXXKKKKKKKKK000000OOOOOkkkkxxxxxxdl;'...................';clooddol:;,,;;:::;::::::::::::::oOXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXXKXXKKKKKKKKKK000000OOOOkkkkxxxxxxxddxdl;.........'';;::ccloolc:;,,,;;;::::::::::::::;,,''''ckKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKXXKKKKKKKKKK000000OOOOOkkkkxxxxxxxdxxxl:,,,;;;::ccccllllc:,'',,;;;;;;::;::::::;:;,'....''',,:odk0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOkkkkxxxxxxddxxxo:;;;::cclllllc:,''',,;;;;;;;;;::::;;::;,'......''''''',,;:okKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOOkkkkxxxxxxxxxxo:;;;:clllc:,,'.',,,;;;;;;;;;;;:::;;,'.......''''''',,,,,,,;:coxkKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOkkkkxxxxxxdxxxoc;;;,;;;,'.''',,;;;;;;;;;;;;;;;,,'....'.......''',,,,,,,,,,,;;;:cdOKKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOkkkkkxxxxxxxdocccc;,'...'',,,,;;;;;;;;;;;,,'......'....'''''',,,,,,,,,,,,,,,,,,,,;cldO0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOOkkkkxxxxxxdl:;;c:,''''',,,,,,,,,,;,,,,'.........''...'''',',,'''''','''''''''',,,,,,;cok0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOkkkkkkxxxdc;;,,,''','',,,,,,'''''''.................'''''''''''''........'''''''',''',,,:dOKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOOkkkkkxxdc'.'''',,'''''''''................'.......'''''''''.........''''''''''''''',,,,,,,cxKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0000000OOOOOkkkkkkd;.....',,'''''''..........................'''..''.........''''''''''''''''''',,,,,,',o0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000000OOOOOOkkxxxl'......','''................................''............''''''''''''''''''''''''',',ckXNXXNXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0KK0000O0OOkdoc;;,,...... ..'................................''................''''''''''''''''''''''''',,';xXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0000000kdl:,'...........................................'......................''''''''''''''''''''''''',,,'c0XXXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK00000xl,.....'','............'..''''....'''''''........''......................'''''''''''''''''''''''''',,',o0XXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK000xc'.....'',,''...'....''''''''''''''''''''................................'''''''''''''''''''''''''''''',',cOXXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK00kl,.....''''''''''''...'''''''''''''''''''''..........................'''''''''..''''''''''''''''''''''''',,,'cOXXXXXXXXXXXXXXXXXXXXXXXXX
KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0KKKOo,.....'''''''''.....'''''''''''''''''''''..............................''''''''..''''''''''''''''''''''''''',':OXXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0KK0k:....''''''..........'''''''''''''''''..................................'''''''''..'''''''''''''''''''''''''',,':OXXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK0K0d;...''''''''.......'''''''''''''''..'................................'...''.''''''''''''''''''''''''''''''''',,,';dKXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK00000d,..'''''...........'''''''''''''''........................................'''...'''''''''''''''''''''''''''''',,,';o0NXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000KKKKKKKKKKKKKKKKKKKK00000o,..''''............''''''''''..............................................''''..'''''''''''''''''''''''''''''''',',l0XXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000000000000000000000000000x,.'''..............'''''''''......................................................''''''''''''''''''''''''''''''',,''cOXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000000000000000000000000000000000000K00000k:'''''............''''''...........................................................''''''''''''''''''''''''''''''',,'':OXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000000000000000000000000Ol,''..............'''''...........................................................''''''''''''''''''''''''''''''',,,,,,cOXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000000000000000000000000x:''.............'''''............................................................'''''''.'''''''''''''''''''''''',,,,,,lOXXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000000000000000000000000kc'..............''''..............................................................''''''''''''''''''''''''''''''''',,,',l0XXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000000000000000000000000000000000000000x:'...............''...................................................................''''''''''''''''''''''''''''',,,,,;oKXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000000000000000000000d;'...............''.........................................................................''''''.....'''''''''''',,,,,,;xXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000000000000000000OOd,.............................................................................................''''......'''''''''''',,,,,,:kXXXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000000000000000000OOd,........................................................................................................'''''''''''',,,,,,l0XXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000000000000000000000000000000000OOd;.......................................................................................................'''''''''''''',,,,,;oKXXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000000000000000000000000000000000Od;.........................................................................................................'''.'''''''',,,,,,:xXXXXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000000000000OO0OOx;..........................................................................................................'''.''''''',,,,,,;lOXXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000000000000OO0k:................................................................................................................''''',,,,,,,;oKXXXXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000000000000O00Ol'............................................................................................................'..''''''',,,,,;cxKXXXXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000000000000OOOd,.............................................................................................................'''''''''''',,,;:dKXXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000000000OOOOkc.....................................................',,,;;;;;;;;;;;,,,'''.....................................'''''''''',,,,;;ckXXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000000000OOOOo,..............................................;:,..';;:::;;;;;::::::::::;;;;,''.................................''''''',,,,',,;lOXXXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000000000000000000000000OOOOxl:,............................................'lxxd:,;;;::::;;::;;;;;;;::;;;;::;;;;,''.............................'''',,,,''',:d0XXXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000000000O000OOkoc::'...........................................,ldddl;,,,,,,,,,,,,,,;;;;;::;;;:::::::::;;,''......................''''',,,,,''',;l0XXXXXXXXXXXXXXXXXXXXXXXXXXXX
00000000000000000000000000000000000OOOdc::::,..........................................;lllol;''''',,,;;,,,,,,'''',,;;;::;;;;;;::::;;;,'...................'''',,'''''',;:xKXXXXXXXXXXXXXXXXXXXXXXXXXXXX
0000000000000000000000000000000000OOxl::::::;..........................................:llodooolc:cccclolloooollcc:;,,,,,;;;::::;::;:::;;,'.............'''''',,,'''',,,;oKXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000OO00OO0koc:;::c:::........................................,:cloodxxxoc:clcllllooooddddxxxdoc:;,'',;::;;::::::::;;'...........''''',,'''''',,;cOXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000000000000000OO00OOxl:;;:::ccc:'....................................,:ccclllodddoc:ccllloooooddddddxxxxxxxxdl:;,,,,;::;::::::::;,'.....'..'''''''''''',,;:xKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
000000000000000OOOOOO0000O00OOOOxc;;;;:::cccc,..................................;cllccloodddl::cccllllooooddddddxxxxxxxxxxxxxdl:,',,;::::::::::;,'..''''''.....'''',,;:dKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
0000000OOOOOOOOOOOOOOOOOOO0OOOOd:;;;;;;:::cc:,............................... .,cccclloddxxdl::ccllllooooddddddxxxxxxxxxxxxxxxxxdl:,',;::::::::::;'.','''....''''',,,;o0XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
OOOOOOOOOOOOOOOOOOOOOOOOOOOO0Oxc,;;;;;::::::;,............................... .,c:cclloddxdl::cclllooooodddddddxxxxxxxxxxxxxxxxxxxxd:'.,::::::::::;'.',...'..'''',,;;ckXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
-->

















































































































































































































































































































<!--
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWWWWWWNNXXKXXXXNNWWNNNXK00000000KKK0KKKK0KXXXNWWWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNNWNXKKXXKK00000000OOkkkOOO0000KK0OkkkkkkkOO0OOOOOkkkOOO0KKKXXXXNNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWWNXKKK00OkOOOkkkkkkkxxxxxxxddxxxxdxxxxxkkkxdddddddxdddoooooooddoxkOOOOOkkkO0KNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWNNNXKK00OkxxddoodddddddooodxxxkxxdddddxddxxddddddddoollodoccccccllllllodxxxdddoodkkO0KXNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWWNNX0Okxxddddooddddddoolllccccccccclldxxxdoolooodddooooooooooooolllcccccccc:::ccllcccllloddxxkkO0KXNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWWNXXK00OOkxdlccccccc:::cllllccccc::;;;;;;;;;;:cclllccccccllllollollooooollcccc::::::;:::::::ccclllllododxxkk0KXNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMWWNXXKKKOxdollc::;;;;;::::::::::cc:;;;;;;;:;,,,;;;;,,,;;::::::::::clllllcccclllllc::;;;;;::;;;;;;::::::::::::::clodxkO0KNNNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMWWNK0Oxxdddoolcc:;;,,'''',,;;:::;;;,,,,,,,,,',;;;;;;;;;;,,,;;;;;;::c:::ccloddollccccllc:;,,,,;;;,;;;;;;,,,,;;;;;;;:cclodxkOOOO0KXXNNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMWNNK0Okdolcc:::::::;;;;,,''''',,,,,,,''''....'''.''',;;,,,,,;;;,,,,,;;:ccccc::codxxdolcccccc:,'''',,,,,,,,,'''',,,,,;::::clloddxxxxkkkkkO0KXNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMWWNX0Okdollcc:;;;;;;;;:::;;;;,'''''''''......................'...'''.'''',;;:::::::::cllllolcc:::;,''.''''''''''''''',,,,;;;,,;::cccllllllllooddxkk0KNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMWNX0Okxdoolcc::::;;;,;;;;;;;,,,,,''..........................................'',,,,;;:::::::::ccc:;,,'''...............'',,''.''',;;;;;;;::::cloooooodxkO0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMWWWNXK0kdlllccc::;;,;;;;;;;;::::;;,,,'''............................................'''''',,,;;;;::::c::;,'''...............'''''..'''''''',,,,,,,;;;;;::cloodkKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMWXK0Oxdolc::::;;;;,;;;;;,;,,;;:;;;;,,,''.................................................'''''.''',,;;;;;:;,,'...................................'''''',;::cldxk0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MWNX0kdollcc::;;;;;;;;;,,;;;;;;,,,'''''..'''''''...............................................'''''....'','''',,,'........................................',;;:clodk0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
WKOxolllcc::;;,,,,,,,,,,,'''..''''''..'''''''..............................................................'''...............................................'',;;:clokXWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
0xocccc:::;,,,'''''''',,'.........''''..............................................................................................    ......................',;;:ccloxk0XWMMMMMMMMMMMMMMMMMMMMMMMMMMMM
oc;,,,,''''''.....................................................................................................................    ....     .............''',,;:cclooddkOKXNWMMMMMMMMMMMMMMMMMMMMMMMM
;,'''....................................... ..            ................................................................................   .............'''',,,,;:ccclodxxkOKXNWMMMMMMMMMMMMMMMMMMMMM
'.........................................    ...  ..................................................................................  .......................''''',;:::cllodkkOO0KNWMMMMMMMMMMMMMMMMMMM
.............................................  ..  ......................................................''''''''''''''........................................''',;;:::ccllodxxkkOOKXNWMMMMMMMMMMMMMMMM
........................................       ..............................................'...'''''''','',,,,,,,,,,'''''''''''...............................'',,;::cloodddddxkkkO00KXWMMMMMMMMMMMMMM
....................................  .      .............................................''''''''''''',,,,,,,,,;;,,,,,,,;;;;;,,,,'''''''''..''............'.....',,;;;::cllodddxxkO0000KKXWWMMMMMMMMMMM
.................................................................................''''''''''''''''''''',,,,,,;;;;;;;;;;;;;;;;;;;;;;;,,,,,,''''',,,,''..''''.',,,''',,,;:ccccccclodxkkO0KKKKKKXNWMMMMMMMMM
.. ...............................................''''...............''''''.....''''''''''''''',,,,,,,,,,;;;;;;;;;;;;;;;;;;;;;:::;;;;;;,,,,,,,;;:;;,,,,;;;'..'''''',,;::clooollloodxxkOO00KKKKKXWMMMMMMM
... ............................................''''''''''''''''''''''''''''''''''''''''''''',,,,,,,,,,,;;;;;;;;;;;;;:;:::::::::::;;;;;;;;;;;;::clllcccccc:;,,''''''',;;;:cldxxdddodddxkkO0KKKK0KNMMMMMM
   ..........................................'''',,,,,,,,'''''''''''''''''''''''''''''''','',,,,,,,,,,,;;;;;;;;;;;;;;::::::::::::::::::::::::cclloxddddoooollc:;;,,,''',,,;::cldxxdooodxxkO00KKK0KNWMMMM
...........................................''',,,,,,,,,,,'''''''''''''''''''''''''''''''''''',,,,,,,,,,;;;;;;;;;;;;;;;:::::cccccc::::::cccccccloddxxkkkkxdddddolc::;,,''''',;;::coddolloddxxkOO000KNWMMM
.........................................'''',,;;;;,,,,,,'''''''''''''''''''''''''''''''''''''',,,,,,,,;;;;;;;;;;::;;::::::cccccccccccccccccclldxxxkOOOkkxxxkkkddoll:;''.''..',;;;:ldolcclooodxkOO0KNMMM
.........................................'',,;;;;;;;;;,,,,,,,,,'''''''''''''''''''''''''''''',,,,,,,,,,,;;;;;;;;;;:::::::::ccccccccccllllcccllodxkkO000OOkkkOkkxxxddoc;,''.....',,',;clllccclodxkO00XWMM
.......................................''',,;;::;;;;;;;;;,,,,,,''''''''''''''''''''''''''''''',,,,,,,,,,,,;;;;;;;;;;:::::::ccllcccccclllllllooodxkkO0000OOOOOkkkkxxxdol:;''......''''';:llccccldkO00KNMM
..............................'.......'',,,,;;::;;;;;,;;,,,,,,,'''''''''''''''''''''''''''''''',,,,,,,,,,;;;;;;;;;;;:::::::cccccccllllllllooooodxxkkOO00000OOOOOkkxxxxdoc:,,'....'',,;;;:clllloxkO000XWM
..............................'''....',,,,;;;;::;;;;,,,,,,,,,,,'''''''''''''''''''''''''''''''''',,,,,,,;;;;;;;;;;;;:::::::cccccclllllllllllooodxxkkkO00000O00000Okkkkxxdoc:;,'...''',;:cclloodxkO000KNW
............................'''''....',,;;;;;;;:;;;,,,,,,,,,,,,,''''''''''''''''''''''''''''''''''',,,,,,,,;;;;;;;;;;;::::::ccccclllllllllllloodxkkkkkO00K00KKKK00OOOOOkkxdol:,'...''',;::codxxkkO00KKXW
..........................'''''''.'''',;;;;:::::::;,,''','',,,,,,''''''''''''''''''''''''''''''''',,,,,,,,,,,;;;;;;;;;;:::::::ccllllllllooooooodxxxxkkkkO000KKKKKKKKKK000OOkkdl:,'..'',,;::looxkOO0KKKKN
...........................''''''''',,,;;;;::::::;,,',,,,,',,,,,,'''''''''''''''''''''''''''''',,,,,,,,,,,,,;;;;:::;;:::::::cccclllllllloooddddddxxxxkkkkkkOO0000KKKXXXXKKKK00kdl;,''',;::cclllodkO00KKN
...........................''''''''''',,;;::::;;;,,,,,,,,,,,,,,,,,,,'''''''''''''''''''''''''''',,,,,,,;;;;;;;;:::::::::::cccccllllllllllloddxxxxxddxkkkkkkkkkOO0KKXXXXXXXXXKKK0kdc;,,,,;:ccclloodkO0KXN
..........................'''''''''',,,,;;:;;;;;;;;,,,,,,,,,,,,,,,,,,''''''''''''''''''''''''',,,,,,,,,;;;;;;;;::::::ccccccclllllllllllllloodxkkkkxxxxxxxkOkkkkOOO0KKKKKKKKKKKXKK0xo:;,;;;::ccloddxkO0KN
...............'''''........'''''''',,,;;::;;,;;;;;;,,,,,,,,,,,,,,,,,'''''''''''''''''''''''',,,,,;;;;;;;;:::::::::ccccccllllllllloooolllloodxxkkkkkkkkkkO000OOOOOOOO000000000KKK00kdc;;;;::cclodxxkO0KN
............''''''''.........'''''',,,;;::::;,,;;;;;,,,,,,,,,,,,,,,,,''''''''''''''''''''',,,,,,,,;;;;;;;::::cc::cccccllllloooolloooooooooooodxkkOkkkkxxxkO0000OO000OOOOOOOO0000000Okdc:;;:ccllodxxk0KKN
.............'''''''''''''''''''''',,,;;;::;;,,,;;;;;;;,,,,,,,,,,,,'''''''''''''''''',,,,,,,,,,,,,;;;;;;;::::cccccclllllooooodooooddddddddoooddxxkkkkkkkxxkOO00000OOOOkO000OOOkOO00OOkdlc:cllooodxxkO0KN
.............'.......'''''''''''''',,,;;;;;;;,,,;;;;;;;;,,,,,,,,,,,''''''''''''''''',,,,,'',,,,,,,,,;;;;;;;::::ccccclllloooodxxdddddddddxxddddddxxkkkkkkkkkO0000000OOOOkOO000OOkkkOOOOkdlclloddddkOO0KNW
.................'...'''''''''''''',,,;;;;;;;;;;;;;;;;;;;,,,,,,,,,''''''''''''''''',,,,,,,,,,,,,,,,,;;;;;;;;:::::::ccccclloodxxxxxddxddxxxddoooddxxkkkkkkxxkOO000000000OOO0000OOkkkkOOOkdlloodxdxO0KXNWM
.............''''''.'''''''''''''''',,;;;;;;;;;;;;;;;;;;;,,,;;,,,,'''''''''''''''',,,,,,,,,,,,,,,;;;;;;;;;;;;:::::::::::ccllodddxxxxkxxxxxddooooodxxkxxkOOkkO00000000OOOO0000000OOOkkkOOkddooddx0NWWWMMM
..............'''''''....''''''''''',,;;;;;;;;;;;;;;,,;;;;;;,,,,,,'''''''''''''''',,,,'',,,,,,,,,;;;;;;;;;;;;::::::::::::ccclooooddxxkkkkxxxddooooddxxxxxxkkOO0OO00000OOOOOO00000OOOkkkOOkxxddx0NMMMMMMM
.............''''...''''''''''''',,,;;;;;,,,;;;;;;;;;;;,,,,,,,,,,,,,,,,,'''''''''''''''''',,,,,,,,,,,,,,;;;;;;;;;:::::;::ccccclllooodxkkkkkxddoooodddxxxkkkkkO0000KKKKKKK00OOO0000OOOkOOOOOkxk0NMMMMMMMM
............''''...'''''',,,,'',,,;;;;;;;;;;;;;,,,,,;;,,,,,,,,,,,,,,,,,,''............'''''''''''''''''''',;;,,;;;;;::;;::ccccccccloodxxkkxxdoooooodddxxxkkkkkO0K0KKKKKXXXXKK000OOOOOOOOOOOOkOXMMMMMMMMM
............''.....'''''',,,,,,;;;;;;;;;;;;;;;;,,,,,,,,,,,,,;,,,,,'''......................................',,'',;;;;;;;;:::cccccclloodddxxdolllloooodddddxxxxxkO00KK0KKKXXKKKK00OOOOOOOOkOOO0NMMMMMMMMM
...........''...........'',,,;;;;;;;;;;;;;;;;;;;;;,,,,,,,;;,,,,''''........               .... ..................',,,,;;;;;;::::::ccllooddddlcllllloooddddoodddxxkkOOOO00KKKKKK000OOOOOOkkkOOOXMMMMMMMMM
.......................''',;;::::;;;;;;;;;;;;;;;,,,,,,,,,,,''''........                            .................',,,,,,;;;;;:::ccllooooocccllllloooddooooooddxxxxxkOO0000KKKK00000OOOOkOO0NMMMMMMMMM
..................'''',,,;;;::::::::;;;;;;;;;;,,,;,,,'''''.........                          ..     ..................'''''',,,;;:::cccllllccccllllloooooolllloodddddddxkOOOOO0000000OOkkkkkO0NMMMMMMMMM
.................''',,;;::::::::::::::;;;;;;;;;;;;,,,'.........               ...  .................   ....................'',,;;:::ccccccccccccccllloooolllllooooddoooddxxkkOOOOO0OOOkkkkkkkOXMMMMMMMMM
..................',;;::::cc::::::::::;;;;;;;;;;;;,'''.......            .................................................'',,;;;::::cccc::::ccccccllooolccclllooooooooooddxxkkOO00OOOOOOOkkkkXMMMMMMMMM
.................',;;;:::::::::::::;;;;;;;;;;;;;;,,''....... ...    .............''''''''''''''''''''''''...............'''',,,,;;:::::::::::cccccclllllccccccllllllllllooddxxkOOOOOOOOOOOOkkOXMMMMMMMMM
................',;;:::ccc::::::::::;;;;;;;;;;;;,,''.............................'''''''''''',,,,,,,,,,'''''''''''''..''''',,,,,;;;::::;;;::::cccccccllc:::::cccccccc:ccllooddxxkkOOOOOkOOOOkkKWMMMMMMMM
.............'''',;:::ccccccc::::::::;;;;;;;;,,'''............................''''''',,,,,,,,,,,,,,,;;,,,,,,,''''''''''''''',,,,;;;;;;;;;;;:::ccccccccc::::::::::;;;;,,,,;::clodxxkOOOOkOOOOkkONMMMMMMMM
............'''',;::::::ccccc:::::::;;;;;;;;,,''..............................''....''''''',,,,,,,,,,,,,,;,,,,''''''''''''''',,,,,,,;;;;;;:::ccccccccc::;;;;;;;;;,,'''...'',;:cllodxkkOOOOOOkkONMMMMMMMM
..........''''',,;:::::ccccccc::::::;;;;,,,,,'''..........................................''''''''.''''''',,,,,,,,,'''..''''''''''',,;;;;::ccccllccccc:;;;,,,',,'''.........',,,;;:cloxkOOOOOkkKWMMMMMMM
..........'''',,;::::ccccccc:::::::;;;,,,,,'''''''.'''...........................   ...........''..''''''....'','''''''.....'''''',,,;;;;::ccccllcccc::;;,,'''''...................',,;codxkOOOKWMMMMMMM
........'''',,,;;::::ccccccc::::::;;;;;,,,,''''''''''''..............    .....             ..........'''........''''''''.......''',,,;;;::ccllccccccc:;,,,,'''''''.....................',;coxkOKWMMMMMMM
...........',,;::::cc::cccccc::::;;;;,,,,,''''''''''''''...........      .....            . ..',''..................'...........''',,,;;:cclllllccc::;,,,,,'''''.''.......................,,:lx0WMMMMMMM
........'',,;;;:::cc::cccc::::::;;;,,,,,'''''''...................    ........           ..  .';;;;,,,'...........................'',,;;:cloddoolcc:;,,,,,,''''''''''......................'';cxKWMMMMMM
....'''',;;;::::::cc:::ccc::::;;;;;;;,,,,,'''''................................              .,;::::;;;;,.........................''',;;clodxxxdoc:;,,'',,,,,,,,'','''''''''''...............';cdKMMMMMM
..',,',,,;;;;:ccc::c:::cccc:::;;;;;;;;,,,,'''''''......................................... ...,;;;;;;;;,,'.........................'',;:cldxkkkxoc:,,'''''''''''''',,,,,,,,,,,,,'''..........',;cxXWMMMM
'',,,,,,;;;;;::ccc::::::::c:::::;;;,,,,,,,,''''''''''''..................................'...',,,,,,,,''...........................'',;:codkOOOkdc;,''''''....''''''',,,,;;;;;;;;;,,,,,'.....',;;cxKWMMM
',,,,,;;;;;:::::cccc::::::::::::;;;,,,,,,,,,,,,,'''',,,''''...........................'''''''''''''''''''...........................',;:codkO0Okxl;''................'''',,,;;;;::;;;;;,,''..',,;ldOWMMM
',,,,,;;;;;;::::::::::::::::::::;;;;,,,,,,,,,,,,''''''''''''''...................'''''',,'''''''''''''''...........................'',;:cloxO00Oko:'.................'''''',,;;;;;:::::;;,,'',;,;lkNMMMM
'',,,,;;;;;;;:::c::::::::::::::::;;;;,,,,,,,,,''''',,,,''',,,,,'''''...............''',,,,,,,,,,'''''..............................'',,:codkO000kxl,......         .......',,;;;;;;;:c::;,'',,,;oONMMMMM
',,,,,;;;;;;:::::::::::::::::::::;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,''''..............'''''''''......................................',,;:lxkO000Oko,.....          .  .''....'',,,,,;:c::;,,;;:kNMMMMMMM
',,,,,,;;;::::::::::::::::::::::;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,'''''''''''.....''..............................................''',,;coxO00K0Oo;.....        .... .,;;,'''...'''',;::;,;:o0WMMMMMMMM
,,,,,,;;;;;;;:::::;;;;:::::::::::;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,'',,,,,,,,,''''''''''','''''''''.....'.........................'''',,;:ldkO000Oxc,'.....           .,;;;::;'......',::;;ckNMMMMMMMMMM
',,,,,,;;;;;;;;;;;;;;;::::::::::::;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,'''''''''''''''.....................''''''',,;:cldkO000kl;,''..............';:::cc:,.....',;:::lkNMMMMMMMMMMM
',,,,,,,,;;;;;;;;;;;;;;::::;;;:::;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,''',,'''''''''''''..................''''',,,,,;:coxk00K0xc,'''''''',,,,,,,,;;;;:::;,''...',:cclkNMMMMMMMMMMMM
,,,,,,,,;,,,,;;;;;;;;;;;;;;;;;;;;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,''''''''.................'''',,,,,,;;::loxO0KKOdc,'''''',,,,,,,,,;;;;;;;;;;;;,'',:llo0MMMMMMMMMMMMM
,,,,,,,,,,,,,;;;;,,;;;;;;;;;;;;;;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,;;,,,,,,,,,;;;;,,,;,,,,,,,,,''''''..............'''''',,,,,,,;;;:codxO0KKOdc,''..'',,,,,,;;;;;;:::::::c::;;cllo0MMMMMMMMMMMMM
,,,,,,,,,,,,,,,,,,,,;;,,,,;;;;;;;;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,;;;;;;;;;,;;;;;;;;;;;;;;,,,,,,,,,,''''.............''''',,,,,,,,,,,;;::codkO000Od:,,''..''',,,;;;;:::ccccllloolclloxKMMMMMMMMMMMMM
,,,,,,,,,,,,,,,,,,,,,,,,,;;;;:::;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,;,,,,,;;;;;;;;;;;;;;;;;;;;;;;;;;;;,,,,,,'''...........''''',,,,,,,,,,,,,,;;;:cldxk0000ko:;,,''''''',,,,;;;;;::cclloodolloxKMMMMMMMMMMMMM
,,,,,,,,,,,,,,,,,,,,,,,,,;;;;;::;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,;;,,,,,;;,,;;;;;;;;;;;;;;;;;;;;;;;;;,,,,,'''..........'''',,,,,,,,,,,,,,,,;;;::cldxO000Oxl::;;,,''''''''',,,,;;:ccllldxdddxKMMMMMMMMMMMMM
,,,,,,,,,,,,,,,,,,,,,,,,,,;;;;;;;;;;;;;,,,,;,,,,,,,,,,,,,,,,,,,,,,,,,,,;,,,,,,;;;;;;;;;:::;;::;;;,,,,,,''............''',,,,,,,,,,,,,,,,,;;;::ccldkO000Odlc::::;;;,,,,,,,,',,,;:cloddxkkkOXMMMMMMMMMMMMM
;,,,,,,,,,,,,,''''',,,,,;;;;;;;;;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,;;;;;;;;;;;;;;;;;::;;:::;;,,,,,,''............''',,,,,,,,,,,,;;;;;;;;;::cclodkO00Okocccc:::;:::::::::::clooddxkkkOO0KWMMMMMMMMMMMM
,,'''''''',,'''''',,,,,,;;;;;;;;;;;;;;,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,;;;;;;;;;;;;;;:::::::;;,,,,,'''.........''''',,,,,,,,,,,,,,,,;;;;;;;;::ccloxkOO0OdlccccccccccccllllooxkkOkkxkkOOO0KNMMMMMMMMMMMM
,'''''''''''''''''',,,,,;;;,,,,,,,,,,,,,'',,,,,,,,,'''''',,,',,,,,,,,,,,,,;;;;;;;;;;:::::::;;;,,,'''''.........''''',,,,,,,,,,,,,,,,,;;;;;;;;::cccloxkkOOxlcllllllllooooooodxxkOOOOOkkkOO00XWMMMMMMMMMMM
,'''''''''.''',,''''',,,,,,,,,,,,,,'',,''''',,''''''''''''''''''',,,,,,,,,,,;;;;;;;;::;;;;;;,,,,''''...........''''',,,,,,,,,,,,,,,,,;;;;;;;::::cclldxkkOkolclloooddxxxxxxxxxxkkkOOOOkkkOO0KNMMMMMMMMMMM
''''''''''''',,,''''',,,,,,,,''',,'''''''''''''''...'''''''''''',,,,,,,,,,,,,,;;;;::;;;;;,,,,,,,'''............'''''''''''''''',,,,,,,;;;;;:::::ccllodxkkkkdllllloodxxxxkOOOkOOkkkkkOkkkkOO0XWMMMMMMMMMM
''''''''''''',,''''',,,,,''''''''''''''''''..'.......'''''''''''',,,,,,,,,,,,,;;;;;;;;;;;,,'''''''..............''''''''''''..'''',,,,,;;;;:::::cccllodxxkOkdlclllooddxxxkOOO00OOkkkkkkkkkkOKWMMMMMMMMMM
''''''''''''''''''''',,,,,''''''''''.''.........'.'''''''''''''''',,,,,,,,,;;;;;;;;;;;;,,,''''''''..............''..'''.........''''',,,,;;;::::cccclloodxkkxoccllloodddxxkkOO000OOOkkkkkkxk0WMMMMMMMMMM
'','''''''''''''''''''''''''......................''''''''''''''',,,,,,,,,,;;;;;;;;;;,,,,,''''''''..................................''',,,,;;;::::ccclloodxddocccclloooddxxkkkOOOOOOOkkkkkxx0WMMMMMMMMMM
'','''''''..'''''...''''''....................''..'''''''''''',,,,,,,,,,,,,,;;;;;;;;,,,'''''''''''.....................         ......'''',,;;;;::::ccclloloooc::ccclloooddxxkkkkOOOOOOOkkxxOXMMMMMMMMMM
'''''.......''''''''''''....................'''''''''''''''''''',,,,,,,,,,,,,,,,,,,,,'''''''''''''...................             ......''',,,;;;;;:::::;::colc:::ccclloodddxxxkkkkkkkkkkkxxxKWMMMMMMMMM
''........'''.'''''''''....................'''''''''''''''',,'',,,'',,,,,,,,,,,,'''''''''''''''''''''..............               ........'''',,,;;,,,''';:ccc:::::cccllooodddxxxxkkkkkkkkxxxKWMMMMMMMMM
''......'''.''''''''''''..................'''''''''''''''''',,,,,,'',,,,'''''''...........'''''''''...................              ..................'',;:c:;;;;:::::clllooodddddxxxxxkkkxxxKWMMMMMMMMM
.........'''''''''''''''.................'''''''''''''''''''''''''',,,,'''''....................'.............................     ..................'',;:::;;;;;;:::::cllloooodddddxxxxxxxxONMMMMMMMMMM
.........''''''''',,,'''..................'''''.''''.'...'''''''''''''...............................................................................,;:cc:;;;;;;;::::cccllllloodddddxxxxxdxKWMMMMMMMMMM
........''''''''',,''''''....................'...'''.''''''''''.................................................................................'...,:cool:;;;;;;;;:::cccclllllooooddddxxdd0WMMMMMMMMMMM
.......''',,,,,,,,,''''...........................'.....'''.......    .......................................................................'''''',;cloolc:;;;,,;;;:::::cccccllloooooddddxKMMMMMMMMMMMM
.....''''''',,,,,,,,'''...............................'..........      .......    ...   ..            ...................................''''''',,;::looollc::;,,;;;;;::::::ccccllllooooooONMMMMMMMMMMMM
......'''''''''''',,''''''.......................''.............     .......                         ....................................''''''',,;;;:loollcc:;,,,,,,;;::::::cccclllllllodKMMMMMMMMMMMMM
.......'''''''','''''........................'''''''............      .                         ..    . .....................................''''''',;cllccc::;,,'',,,;;;;:::ccccccllllllkNMMMMMMMMMMMMM
........''''''''''''.........................''''''..............                              ......................................................';;;;;::;;,,'''',,;;;;;::ccccclclllo0WMMMMMMMMMMMMM
............'''''............................''''''.............      .           ......................................'''............................'',,;;;;,,'..'',,,;;;;::cccccclloONMMMMMMMMMMMMMM
.............'''....'......................'''''''............    .  ... .       .....................................'''''''''','''''''................''',,;;,,'....',,,,,;;:::ccllclkNMMMMMMMMMMMMMMM
..........................................'''''''............      .  .......              .................................'',,,,,,,,,,,'''''''........'..',,,,''.....'',,,;;;::cllllkNMMMMMMMMMMMMMMMM
.............................................'..............  ..  .............            ......................................''''''''''''''''''''''''.....'..........'',,;;::clllkNMMMMMMMMMMMMMMMMM
............................................................     ................         .......''.......''''''''''',,,''......................'',,,,,,'...........  ....'',,,;::cckNMMMMMMMMMMMMMMMMMM
.................''''.......................................    ....................       ....',,,'...'',,,,;;;,,;;:::::;;,''',,,,'''''............'',,''.................'',,;:::xNMMMMMMMMMMMMMMMMMMM
.................'''..........................''.......................................    ....'''.......',,,,,,',;::ccc::::;;;:::::::;;,'..............'..................'',,;:::OMMMMMMMMMMMMMMMMMMMM
...............................................'''.................................................   ............,;;::::::;;;::cccllccc:;;'..........................'...'',,,;;;dXMMMMMMMMMMMMMMMMMMMM
..........................................'''''''''.......................................................   ..........''.....',;cccccccc:;;,.......................','..',,;;;;;lKMMMMMMMMMMMMMMMMMMMMM
...........................................'....'''............................................................'..''',,'.........''''',;:;;,..     ................,,,'''',;::;::dNMMMMMMMMMMMMMMMMMMMMM
............................................''................................................................'''',,;;;,,,;;:;;,,,,'................'''............'','',,;;:::;l0WMMMMMMMMMMMMMMMMMMMMM
...........................................''''..............................................................'''',,,,,,,,,;;;;;;;;;;,.............',;;,,,,'........',,,,,;;;;;::lKMMMMMMMMMMMMMMMMMMMMMM
.............................................................................................................''',,,,,,,,,,;;;;,,,,;;;,'''''',,,',,;;;;;;;,,'''..''',,;;;;;;;;;::oKMMMMMMMMMMMMMMMMMMMMMM
..............................................................................................''...............'',,,,;;;;;;;;;;;;;;;::::;;;;;;;;;::;;;;;;;,,'...'',,,;;;;::;;;;:dXMMMMMMMMMMMMMMMMMMMMMM
......................................................'''..........................................''''''.......'',,,,,,,,,;;;;;;;;;::::;:::;:::::::;;;;;;,,''..'',,,,;;::::;;;oKMMMMMMMMMMMMMMMMMMMMMMM
......................................................''...........................................''''''''''''''',,,,,',,,,,,,,,,,,;;;;;::::cccc::::;;;;,,''''''',,,,;;;::;;:cOWMMMMMMMMMMMMMMMMMMMMMMM
.......................................................................................................'''',''''',,,,,,,,,,,,,,,,,,,;;;;::ccccccc:::::;;;,'..'''',,,,,;;;;;:cokNMMMMMMMMMMMMMMMMMMMMMMMM
........................................................................................................''''''',,,,,,,,,,,,,,,,,,,;;;;;:::ccccccc:::::;;;,'...'',,,,,;;;;;:dKNWMMMMMMMMMMMMMMMMMMMMMMMMM
.................................................................. .........................................''''',,''',,,,,,,,,,,;;;;;;:::cccc::::;;;;;;;,'.'''',,,,,;;;;:dXMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.............................................................................................................''''''''''',,,,',,,,;;;;;;::::::::;;;;;;;;;;,'''''',;;,,;;;:xXWMMMMMMMMMMMMMMMMMMMMMMMMMMMM
..................................................................................................................''''''',''',,,,,,,,;;;;;;;;;;;;;;::;;;;,''..'',,,,;;cd0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.................................................   ...............................................................''.'''''..',,,,,,,,,;;;;,,;;::::::::;,'.....'',,;lkXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.............................................. ..  ....................................'.''''..................'..............''''',,,,,;,;;;;:ccccccc:;'......''',oXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
................................................  ....................................''..'''''.......''''''''''''...........'',,,,,;;;;;;;;:ccllcccc::,.......'';xNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...............................................   ....................................'''.'''''...'''''''''''''''''''''''''',;:::::::::::ccccllolllc::;'.......';kWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...............................................   .........................................''''.'''''''''''''''''''',,,,;;;:cclllllllllllllllooooolc:;,'......;dKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...............................................  ...........................................''....'''''''''''''',,,,,;;:::ccllooooddooolllllooooooolc;,'..'';dKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
............................. ..... ....  .. .     .....       ....................................''''''''',,,,,,,;;;::ccclllooooddoooollllllllloolc;'..,:dKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...................................   .       .    .....       ...................................'''''',,,,,,,,,;;;:::ccccccclllllllooollloooooollc:,..'xXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
....................................          ..    ..            .............................''''''''',,,,,,,;;;;;;;:::ccccccccllllloooooooooollc;'..;kNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...................................                               .............................''''''''',,,,,,,,,,,;;;::::cc:::ccclllllloooooollc:;'..:0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...................................                               .............................''''''''',,,,,,,,,,,,,;;;:::::::::cccclllooooolcc:;'..c0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...................................                               ....................................'''''''',,''',,,,;;:::::::::ccccllllllllc;,'.'oXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...................................                               ....................................'''''...'''''',,,,,;::::::::::cccc:cccc:;'.'l0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...................................                                  ..................................''''.......''',,,,;;;;;;;,,;;::;;;::::;'.,kWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
......................................                               ....................................'........''',,,,,,,,,,'',,,,,;;;;;;,.,oKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
........................................                             ...............................................'','''','''..'''',,;;;,'.;kWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
......................................... ...                          ..  ...........................................''''''.......'',,,,'..c0MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
................................................                               ..  ..................................................''...;kNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.................................................                                  ......  ..............................................cKMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.................................................                                    ....   ......          ........  .       ..........lXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
...................................................                                                                              .'',ckKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
........................................................                                                                       .cOXXXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
............................................................                                                                 .'xNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    ..........................................................                                                            ...:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
      ...............................................................                                    .         .........lKMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
          ..................................................................     .   ..........       ....................'oXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
             .......................................................................................................''''';xNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                 .....................................................................................''''......'''',,,,cONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                   .................................................................................'''''''''..'',,,,,,:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                      .....'''........................................................................'''''''''''''',,;oXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                        .....''''......................................   ...........................''''''''''''',,;;:oONWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                          .....'''''...................................................................'''''''',,,;;:cc;;:dKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                             .....'''''''..............................................................''''',,,,;;;:cc;'..';lkXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                ......''''''...........................................................'''',,,;;;::clc,.....',cdONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                  .....'''',,''.......................................................''',,,,,;;::cll;........'',lONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                    ....'''''','''...........'''''''''.............................'''''',,,,;;;:cll:'. ........',;lOKKKXNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                       .....''''''''''.........'''''''''''.................'''''''''''''',,,;;;:cllc;.. ........',,;;:::co0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                          ...'''',,,,,'''..........''''''''''..............''''''''''''',,,,,;:ccllc;'..........''',,,,,,;:dKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                            ....'',,,,,'''...........''',,,,,,'''..'.......''''''''''',,,,,,;:ccccc,..........'.......,cc;;cxXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                              ....''',,'',,''''........''''',,,,,''''.......'''''''''',,,,,;:cccc:,...................;dkxx0NWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                 ...''''',,,,,,,''........'',,,,,,,,'''''..''''''''''',,,;::cccc:,.   ......   .....'lO0KXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
..                                                 .....''''',,,,,,''.......'''',,,,''''''''''''''',,,,,;;;:::cc:,..  ....      .....lXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
;,'..                                                ....'''',,,,;;,,,,'..........''''''''''''''''',,,,,,,;;;:c:'.    ....       ....;0MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
,;;,'..                                                 ...'''',,;;;;;;;,,'...........'''''''''',,,,,,,,,;;::::,.       .       ....;kNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
..,;;,'..                                                 ....'',,,;;;;;;;;,,'..........'''',,,,;;;;;;;;:ccc:;,.......         ...'lKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  ..,;;;'..                                                  ....',,,,,,,,;;;;,,'...........',,,,;;;;;::ccc:,'...........     ...c0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.. ...';;;,..                                                   .....'',,,,,,,;;;;,,,,,''''''''',,;;;;;;;;,'.............    ..,dXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
;'..  ..,;:;,..                                                    .......''''''',''''''',;;;;;;:::::::;:;'.............   ...:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
;;;,'.....,;;;;'..                                                        .......      ...';:ccllllccccc:,............    ..,dXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.',;:;,.....,;::;'.                                                                       ..;clllllllll:,.............. ...c0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
 ...';;:;'....',;:;'..                                                                     ..;ccllllllc,.........  ......,xXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    ...',;;,'....,;;;,'.                                                                    .';:cclllc,.  .......    ....;kWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
         ...........';;;,..                                                                  .';::c::,.    ......   ....',ckNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                     ..',,'..                                                                 .';:;,'.      .....  ......',cxXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                          ........                                                             .';,..        .   .........',;lONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                             ..,,,'...                                     .....                .'..             .........''',:dKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                             ..'',,;;,'..                                     ..                 .....           ....''...''',,;cxXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                             .....',,,,,,..                                                                     .............',,;:oKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                   .......                                                                      .........'..''',,;;cONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                                                .........'''''''',;;;lKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                                               .........''''''''',;;,,:kWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                             ....              ..'.....''''''''''',,,;,:xXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                      ..   .......             .........''...'''.'',,,;;;l0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                     ...............            ...............'''',,,,,,,:kNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                       ....''''''.....          ..................'''',,,;,,lKMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                        .....''''''....         ..''''.............'''''',,,,cOWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                         ..........''...         ..'''''''''''........''''',,,;xXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                            .............         .',,'''''''''''......''''',,,;oXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                               ...........        ..',,'''',,'''''''''.'''''',,,;l0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                                   .......         ..','''''',,,'''''''''''''',,,,ckNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                                    .......         ..'''''''''''',,,,,,,',,,,,,,,,;xNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                        ...    .                     .......         ..''''''.'''',,,,,,,,,,,,,,,,;;:xXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                     ....              .... ...........    .  ..     ........         ..',,,''''''''''''''''''',,,,;:lkXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                     . ....           ..................     ...         ....          ..',,,,,,''''''''''''''''',,;lxxx0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                        .......       .......................            .....          ..,,,,,',,'''....'...''''',:okxdxONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                            ......       ....................             ....           ..',',,',,'''''''.......',;codxkxkNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                             ..........   ......        ..                 ....           ..''''''',,,,,''''''...''',:coxdokNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                ........                                   ....            .'''.'''',,,,,,'''''''''',,,:loolxNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                 .......... .                              .....            .'''.''''''',,,,'''''''',,,,;clccOWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                     .........                             ......            .'''....''''',,'''''''',,,',;:;;cOWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                      ...........                           . ...            ..''''''...'''''''''''',,,,,,,,,;:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                          .........                          .....            ..',''......'''''',,'',,,,,,,,,,,:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                            ..........                        ....             ..',,'...........'''',,,,,,,,,,,,cOWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                               .........                        ...             .',,,''............'',,,','',,,,,:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                 ..........                      ...             .',,,''............'',,,''',,,,,,:kWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                    ..........                     .             ..,,,,''............''',''''',,,,,:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
                                                                                      ..........                   ..            ..',,,,,''''........'''''''''',,,,,:kWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
.                                                                                      ............                 ..            .',,,,,,,'''''.......''''''''',,,,;cOWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
..                                                                                        ............                            .',,''''',''''........'''''''''',,;;:OWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
 .. .                                                                                       ............                          ..,'''''.'''''''.......'''''''''',,,,:OMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
   ..                                                                                         .............            .           .''''''..',,,'''''.....'''''''',,,,,;oXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
  ......                                                                                         ............                      .''''''....',,,,'''.......''''',,,,,,;oKMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    .....                                                                                          ............                     .''..'.....',,'''''......'''''',,,,,;;oKMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    .....                                                                                              ..........                   .''..'......''''','''''''.''''''',,,,;;oKMMMMMMMMMMMMMMMMMMMMMMMMMMM
    ............                                                                                        ...........       .         .'''............'',,''''''.''''''''',,,;oXMMMMMMMMMMMMMMMMMMMMMMMMMM
     ............  .                                                                                    .............               ..''...'......''''''''''''''''''''',,,,,;oKMMMMMMMMMMMMMMMMMMMMMMMMM
       ................        ....     .                                                                   ...........             ..'............'.'''''''''''''''''',,,,,;;oKMMMMMMMMMMMMMMMMMMMMMMMM
      ..................   ... ......  ..                                                                      ......''...  ..      ..................'''''''''''''''''',,,,,,;dNMMMMMMMMMMMMMMMMMMMMMMM
     ......................................                       ....                                          ......''........   ....................''''''',''''''''''',,,,;:kNMMMMMMMMMMMMMMMMMMMMMM
       .....................................                     .....                                             ......'....... ......................''''',,'''''''''''',,,,;:kNMMMMMMMMMMMMMMMMMMMMM
    .. .......................................                    ....                                               ......'.............................''''''''''''''''',,,,,,;:kWMMMMMMMMMMMMMMMMMMMM
    . .. ......  .............................                     ..                                                 .......''''.............'....''.....'''''...''''''',,,,,,,,,lKMMMMMMMMMMMMMMMMMMMM
 ..       ...       .    ......................                     .                                                   .......''''....'....'''....''''....'''''...''''''',,,,,,,,;l0WMMMMMMMMMMMMMMMMMM
               .             .................. ...                                                                        ......''',,,'''''''''....'''......''....''''''',,,,,,,,,;l0WMMMMMMMMMMMMMMMMM
     .                   .   ................... .                 .......                                                   .......'',,,,,'''''.....'..''.............''''',,,,,,,,;l0MMMMMMMMMMMMMMMMM
   ...     ..              .....................                   .......                                                       .....''',,,'''''.......................''''',,,,,,,,;dXMMMMMMMMMMMMMMMM
            ..             .  ... .. ............                   .......                                                         ....................................''.'''',,,,,,,;dXMMMMMMMMMMMMMMM
       .   ..... ...          ....................                ...........                                                          .....................................''''',,,,,,;dXMMMMMMMMMMMMMM
    . ... .    .. ..    ...........................              .................                                                      ..  .................................'''''',,,,,;dXMMMMMMMMMMMMM
.  .   ....  .......................................        .     ................                                                               ............................''''''',,,,,;xWMMMMMMMMMMMM
     ....    .......................................           ................                                                                    ..........................'''..'''',,,,cOWMMMMMMMMMMM
    .....   ...........................................     .  .  ............                                                                        .............................'''',,,,cOWMMMMMMMMMM
 .          ..............................................      ....................                                                                   ...........................''''',,,,,:OWMMMMMMMMM
.  ....  .. ........ .....................................    ........................                                                               ............................'...''',,,,,lKMMMMMMMMM
   ........................................................       .....................                                                       ..  ....................................'''',,,,lKMMMMMMMM
     ...  ..................................................  ... ..............................                                             .........................................'''',,,,,lKMMMMMMM
  ..   .   ......................................................................................                                         .............................................'''','',,lKMMMMMM
   .  ..........................................................   .................................                                      ..........................''.............'....'''''',,,dNMMMMM
    ............. .....................................................................................                                  ..........................................'....''''''''';dNMMMM
  ......................................................................................................                               ..................................................''''''''',dNMMM
....  ..... .............................................................................................   .                       .......................................................'''''''',xWMM
..   ..........................................................................................................               .............................................................''''''''':0MM
      .... .....................................................................................................   .......................................................................'''''''''''lXM
      .....................................................................................................................................................................................'''''''''';kW
..    .......................................................................................................................................................................................'''''''''lX
.   ........  ...............................................................................................................................................................................'''.'''''cK
. ...............................................................................................................................................................................................'''',;x
   ...........   .................................................................................................................................................................................'''''o
   ............ ..................................................................................................................................................................................'''''o
    ........... ...................................................................................................................................................................................''''o
       ........  ..................................................................................................................................................................................''''o
.  ... ...........................................................................................................................................................................................'''''c
............ .......  ............................................................................................................................................................................''''''
..   .... ... ...... .............................................................................................................................................................................''''''
... . .............................................................................................................................................................................................'''''
 ...   ....... .....  ..........  ............ ....................................................................................................................................................''..'
-->














































































































































































































































































<!--
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWX0Okxxxdoc,,,,'',;;;:;;:cldxkOO0KXNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNKOxoc;,,'...'..     ...........',;;cclodxO0XNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNkc,''......    .          ...........,,''',;:cox0XWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNOc'.....                     ..........''....,;clooxONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWKo,....                              ..........';:codxxONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNk;....             ...               .. ..........,;:lodxONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWx'.   .              ..   .......  .................';coddxOKNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWk'                     ..       ..........    .......';:clodxkOKNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMO,          .................................. .....'',,,;:codxkO0XWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMXc.        ....',,;;;;,''............................',;;:::cllodxkOKNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWd.       ..';::clloooooolcc::::;,'...................'''',;:cccllodkk0XWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM0,      ..';clloodddddxxxxxdddddoolc:;;,,,''''''......'',,,,;;:clllccdkkKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWd.     ..,:cloodddxxxkkkkkkkkkkkkkxxddolllcc::::;;;,,,,,;;;;;;::cllc:;coxKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMX:    ..',:cloodddxxkkkkkkkkkkOOOOOkkkkkkkkkkkkxxxxddoolc:;;;;;;;::::c::ldONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMO'   ..,;:cllooddxxxkkkOOOOOOOOOOOOOOOOOO000000OOOOOkkkxdoc:;;,,,''''',;cdONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWd.  .',;::clooddxxkkOOOOOOOOOOOOOOOOOOOOO000000000000OOOOkxolc:;,'......;oONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMX:  ..,;::cclodxxkkkOOO00000000000000000O00000000KKKKKKKKKK00Okkd:'...  .,ckNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMO'  .,;:cclloodxxkkkkOOO0000KKKK00000000000000KKKXXXNNNNNWNNNNNXKkl;'.. .,:o0WMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWo. .';::::;:::cllooddxxxkkOO00000000000000000KKKKKXXNNNNNWWWWWWWWNX0kdc'..,:oKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMK; .',;,'........'',,,;:clodkkOOO0000OO000000O00000KKXXXXNNNWWWWWWWWWWNKd:'.':xNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMk. .''.........'''''''';:clodxkkkkOOOOOOOOOkkxxxxddxk0KKKKXNNNWWWWWWMMWWXkl,';dXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWo..... ...',;::cccccccccllloodxxxxkkkkOOOOkkxoooolcccldxkO00KXXNWWWWWWWWN0d:,'lKMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWo.......';:clllllooooodddddooddddxxxxkkkkkkkxdooolc:;,,,;coddxkO0KXNWWWWWXkl;,c0MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNc..'...';::cc::;,,,,,,:cloddolloddxxkkOOOkkkxxdoooolcc:;,,;;;:llodxOKXNNWWKdc:oKMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMX:.',,'.';;:;,....   ...,;;:ccc:cloddkOO00Okkxolloddddooollllllllcclodk0XNNNOocxNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMXc.;::;,',;,'...,'....',cc;;;;,,;clodkO00Okkxoccclcc::,'',,;:loodoollloxO0XNKxlkWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMKc':ccc:;,,,,,;:clcccloollcc::;::lodxkO0K0Okxolcc::;;;'. .  .',;clooooodxOKXXOdOWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWk;;:cccc:::ccclooodddddddollcc:cloxkkO0KXK0OOkdoollloolc:;;:cc:;;;cloddxk0KXX0xOWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWk:::cccclllloooooddxxxxdoollcccloxkOO0KXXXKK0OOkxddddxxxxkkkkkxxddoddxkO00KXXKkONMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWOc:::ccloodddddddddddddddoolcclodxkOO0KXNNXXK0000OkxxxxkkkOOO00000KKKKKXXXXXXXOOKNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMXd::ccllooddddxxxdddddxxxxdoccclodxkkO0KKXNNXKK000000OkkkkkkOOO00KKXXNNNNNNNNNX0OO00XWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWOc:ccllooodddxxxxxxxxkkkxdolllloodxkkO000KKKKKKK0O00KK00OOOOOOOO0KXXNNWWWWWNNNXKOkkOXMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMKo:cclloooodddxxxxxxkkkkkdollolllooddxxkOOOOOO0KKK0OO0KKKKKKKKKKKKXXXXNNNNWWNNNXXKOO0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNx::cllllloodddxxxxxkkkkkxdlcllc;,,;loodddddlccloxOOxxk00KXXKKKKKKXXXKXXXXXNNNNXXXK000NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM0c::clllllodddxxxxkkkkkkkxdocclll:,,;cccllllc;,;coxkddxOO0KKKKKKXXXXXXXKKXXXXXXXKKK0KXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMXo::cclllloddxxxxxkkkkkkkkxxdolcclllcloooodddxdddddxxxxxkOO00KKKXXXXXXXXXXXXXXXKKKK00XWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNx:;:cclloooddxxxxkkkkkkkkxxdddoollclodxkkkkkOOOOkkkO000OkkOO00KKKXXXXXXXXXXXXXKKKK000XMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM0c;;:clloooddddxxxkkkkkkxxddoooooooodxkOO0OO00KKKKK0KKKK0OkkOO00KKKXXXXXXXXXXXXKK00000XMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNd;;;:cllooodddxxxxkkkkkxddooloooooddxkkOO00O0KKKXKKKKKKK00kkOOO00KKKKKKKXKKKKXKK0000O0NMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWOc;;;:cllooodddxxxkkkkxxdoolloddooodooooddxkkkkkO0KKKK00000OkkOOO000KKKKKKKKKKKKK0OOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNd;;;::cllooodddxxxxkkxxdooooddoolccc::::ccllooloooxk000OOO0OOkkOOO00000000000KKK0OOOkOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMKl;;;;:cllooodddxxxkkkxdoooodol::;;;:::cccclloooooollodkkkOOOOkkOO0000000000000000OOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM0c;;;;:cllooodddxxxkkkxdooolc:;::cllooddddxxkkOOOOOkxdooodxkkkkkOO00000000000000OOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMO:;;;;:clloooddxxxxkkkxxdolcccclooddddddddddxxkkkOOOOOOkxdddxkkkOO000000000000OOOOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWk;;;;;;:clloodddxxxkkkkxdoooooooooddxxxxxdddddxxxkkkOOOOOOkxxxkkO0000000000000OOOOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWx;;:;;;:cllooodddxxkkkxddooooooooddxxxxkkkxxxxxkkkOOOOOOOO0OOkkkO0000000000000OOOOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNd;:::::::clloooddxxxxxxddooooooodddxxkkkkkkOOOOOOOOOOOOOOOO00OOkO00000000OOOOOOOkOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMKl;::::cccclloooodxxxxdddooooooooddxxxkkkkkOOOOO00000000OOOOO0OOkkOOO0000OOOOOOOOOOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMO:;::cccccllllooodxxxdddoooooooodddxxxkkkkkOOOOOO00000000000000OOOkOOOOOOOOOOOOOOOOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWx;;:cccclllloooooddddddoollllllooddxxkkkkkkkkkkkOOO00000000000OOOkOOOOOOOOOOOOOOOOOOOOOOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWWWMWWNXK00O00K000Ol;;:cllllooooooooooooooollccclloooddxkkkkkkkkkkkkkOOOOOOOOOOOOkkkkkkkkOOOOOOOOOOOOOOO0OOO0KKXWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNX0OkkxxkOOxdolcclodddoooc;;:cllloooooooooooooollcccccclloooddxxxxxxkkxxxxkkkkkkkkkkOkkkxxxkkkkkkkOOOOOOOOOOOOOOOkxddxkOOKXNNWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWX0kdl:::clooooolc:;:ldxdddoolc:;:cllooooodddoooooollcc::cccllloodddddddddddddxxxxkkkkkkkkxxxxxxxxxkkkkkkOOOOOOOOOOOOkxddooddollldxk0KK0O00KXNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNOdc:,,;:coodddoolcc:cldk0KKKkoll:;::clooodddddddooooollc:::cllllooodddooddddddddddddxxxxxxdddxxxxxkkkkkkOOOOOOOOOOOOOOkdllodddddc:;:cloooollccloxOKNWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWXOdc;,',:loddoooool:;;:coOXWWNXOdllc:::cclloodddddddddoooolc:::ccllloooooooooooddoooooddddddddxxkkkkkkkkkOOOOOOOOOOOOOOOkdllldO00Oxdlc::clodddooc:;,;:ox0NWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWXOdl:,,',clooooooool:,',:lONWWWNX0dllcc:::clloooooddddddddddoolllcccc:ccllllloooooollllllooodxxkkkkkkkkkkkOOOOOOOOOOOkkkkkdllllkKNWWXOoc:;:coooooddol:,,,;cd0NWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNKkdlc:,'',:lllllooool:;;;cokXWWWWWXKkocc::::ccllllooodddooddddddooooollccccclllloooooooooooddxkkkOOOOOOkkkkOOOkkkOOkkkkkkkkdlccloOXNWMWNOl:,,;clooooooolc;'';:ldOXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNKkdollc:,,',;clllllolllc::coxOXWWWWWWXX0dccc::::ccllloooooooooddddddddddooooooooddxxxxxxxxxxxkkkkkkOOOkkkkOOOOOOOOkkkkkkkkkkxoc:ccld0XNWMWWXxlc;,;:loooollllc,'',:codkKNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWN0kdlllllc:;,'',:clllooollcloxO0XWWWWWWWWNXKOlcc:::::clllooooooooddddddddddddddddxxxxxxkkkxxxkkkkkkOOkkkkkkkkkkOOOOOOkkkkkkkkkkdc:::cclkKXNWWWWWXOdlc::clloollllc:,'',:clloxOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMN0xllllcccc:;,,',;cllllolodxk0KXNWWWMWWWWWWNXXKxcc::::::cllloooooooddddddxxxxxxxxxxxxkkkkkkkkkkkOOkOkkkkkkkkkkkkOOOOOOOkkkkkkkkdl:::::ccd0XXNWWWWWWWX0kdolclloolllc:;'',;:clllloxOXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNKkdllccccccc:;;,,',:clllodk0KNNNNNWWWWMWWWWWWNXKX0dc::::;::cllloooooddddxxxxxxxxxxxxxxxkkkkkkkkkkkkkkkkkkkxkkkkkkkkOkkOOOkkkkkxdl;;:::::coOXXXWWWWWWMWWWNXK0kdoooolllc;,',,;:cccclllokXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNKkdllccc:::ccc::;,,,,;cllox0XNWNNNNNWWWWWWMWWWWWNXKKX0dc::::::::cloooooodddddxxxxxxxxxxxxxxxxkkkkxxxxxxkkkkkkxkkkkkkkkkkkkkkkkkxdoc;;::::::lkKKKNWWWWWWMWWWWNNNNXKOxoollc:,,,,,;:cccccccloxOXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNKkdlcllcccc::::cc:;,,,,:cldkKNWWWWNNNNWWWWWWWMWWWWWWXKKXX0dc::::::::cloooooodddddxxxdddddxxdxxxxxxxxxxxxxxkkkkkkkkkkkkkkxxxxxxxxxdoc:;;::::::lkXKKKNWWWWWWWWWWWWNNNNWWNKOdllc:;,,,;;:ccc::ccclloxOXWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWN0kolcccccccc:;;;::::;;;;;:lxOKNWWWWWWNNNNWWWWWWWWWWWWWWNKKKXNKxlc::::;;::clooodddddddddddddxxxxddxxxxkkkxxxxkkkkkkkkkkxkkkxxxxxddddolc:;::::::clkXXKKXNWWWWWMWWWWWWWNNNNWWWWXOxol:;,,;;:cc::::cccclllodOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWN0kolcccccccccc:;,,;:c::;:coxOKXNWWWWWWWWNNNNNWWWWWWWWWMMWWNXKKXNNXOocc::;;;:::cllooooooddddddddddddddxxkkkOkkkxxxkkxxxxxxxxxxxxddoooool::;;;;::ccoOXNXKKXNWMMWWWWWWWWWNNNNNWWWWWWX0kdc:;;;;::::;;;:ccccccccldOKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWN0xoccccccccc:ccc::,',:ccloxO0KXXXNNWWWMMWWWNNNNWWWWWWWWWWMMWWNXKKKXNNNKkocc::;;;;;::ccllloooddddoooooodddddxxxxxxxxxxxxxxxxddddoooooooolc::;;;;::clxKNNXKKKNWWMMWWWWWWWWWNNNNNWWWWWWWNNX0Odlc:::c:;,,:cccccccccccldkKNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWN0xoccc::::c::::c::::;''cdkO0KXXXXXXNNWWMMMMWWWNNNNWWWWWWWWWWWWWWWNXKKXNNWWNKkolc::;;;;;;::ccccllloooooollooooooooddddddooddodolllllooddol::;;;;:::clx0NWNNXKKXNWWWMMWWWWWWWWWNNNNWWWMMWWWNXXXXK0kxolc:,',::c::cccccccccldkKNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWXOxlc:::::::::::::::cc:;,,l0XXXXXXXXXNNWWWMMMMWWWWNNNNNWWWWWWWWWMMWWWNXKKKXNNWWWWX0xoc::;;;,,,;;:::ccccccclllllllllloooollllllcccclloodxdol:;;;;;;::coxKNWWWNXKKKXNWWWWWWWWWWWWWNNNNNWWWMMMMWWNNXXXXXXK0Oxc'';::cc::::::::::::cokKNMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWXOoc;;::::::::::::::::::::,;dKNXXKKKKXXNNWWMMMMMWWWWNNNNNNWWWWWWWWWWMWWWNXXKKXNNWWWWWWNX0Oxoc:;;,,,,:cllccc:::::ccccc:ccccc:::ccccloodxkkxoc;,,,;;::coxOXWWWWWNXXKKXNWWWMWWWWWWWWWWNNNNNWWWWMMMMWWWNXXXKKXXNN0l,,::c::::::::::::::::cokKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMN0dc;;;;;;:;;;;:::::::::cc::;:kXNXXKKKKXXNNWWWMMMWWWWNNNNNWWWWWWWWWWWWWMWWWWNXKKXXNNWWWWWWWWWNXKOxoc:;,,,:clooollllcccccccccllllooddxxxkkkxo:,,,,;:coxOKXNWWWWWWNNXXKKXNWWWMWWWWWWWWWWNNNNNNWWWWMMMMWWWNXXKKKKXXNKd;;:::::::::::::::::::;;:okKWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMWKxl;;;;;;;;;;;;;;;;;;;;:::::;;lONNXXKKKKKXNNWWWWWWWWWNNNNNNWWWWWWWWWWWWWWWWWWWNXXKXXNNWWWWWWWWWWWWWWNK0Oxoc:::cloooodddddddddddxxxxxkkkkkxoc:,;;:ldxOKXWWWWWWWWWWWNNXXKXNNWWMWWWWWWWWWWWWWWWNNNNWWWWMMMWWWNXXKKKKXXNXkc;::c:::;;;:;;;;;;;;;;;;;:oOXWMMMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMNk:,,;;;;;;;,;;;;;;;;;;;;:::;;;o0NNXXKKKKKXXNWWWWWWWWWNNNNNWWWWWWWWWWWWWWWWWWWWWNNXKKXXNNWWWWWWWWWWWWWWWWWWNXKOkxdoollllloooodddxxxxxxddoolcccodkOKXNWWWWWWWWWWWWWWNNXXKKXNWWWWWWWWWWWWWWWWWWWNNNNNNWWWWMWWWWNXXKKKKXXNNOl;;::::;;;;;;;;;;;;;;;;;;,;:dKWMMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMWKl,,,,;;;;;;;;,,;,;;;;;;;::;;,;oKNNXXXKKKKXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNXKKXXNNWWWWWWWWWWWWWWWWWWWWWWWNNXXK0OkxxdoooooooollloodxkOKXNNWWWWWWWWWWWWWWWWWWWNNXXKXXNWWWWWWWWWWWWWWWWWWWWWWWNNNWWWWWWWWNNXKKKKXXXNN0l;;;:::;;;;;;;;;;,;;;;;;;;,,:ONMMMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMNk:',,,,,,,,,,,,,,,,,;;;;:::;,,,oKNNNXXKKKKKXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNXKKXXXNNWWWWWWWWWWWWWWWWWWNNNNNNNNNNNNNNNXXXXKKKK0KKXXNNNNWWNWWWWWWWWWWWWWWWWWWWNNXXXKXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNXXKKKKXXNNN0l,,;:::;;;;;,,,,,,,,,,,,,,,,;oKWMMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMMWKl,',,,,'''',,,,,,,,,,,;;:::;,''l0NNNNXXKKKKXXNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNXKKKXXNNWWWWWWWWWWWWWWWWNNNNNNNNNNNNNXNXXNNNXXXXXXNNNNNNNNNNNNNNWWWWWWWWWWWWWWWWNNXXKKXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXKKKKXXNNN0c,,;;::;;;,,,,,,,,,,,,,,,,,,,:OWMMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMMMNk;''',''''''',,,,,,,,,,,;;:;,,'.;kNNNNXXKKKKXXNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNXKKKXXNNNWWWWWWWWWWWWWWWWNNNNNNNNXXXXXXXXXXXXXXXXXXXXNNNNNNNNNNNWWWWWWWWWWWWWWWNNNXXKKXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXKKKKXXNNNNk;'',;;:;;,,,,,,,,,,,''''',,,',oXMMMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMMWKl'..''....'''',,,,''',,,;;;;,,'.'oKNNNNXXKKKXXXNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXKKKXNNNWWWWWWWWWWWWWWWWWNNNNNNNNXXXXXXXXXXXXXXXXXXXXXXNNNNNNNWWWWWWWWWWWWWWWWNNXXKKKXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXKKKKXNNNNXo''',;;;;,,,,'',,,,,'''..''''..:OWMMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMMMNk,.........''''',''''''',,;;,,,'..:ONNNNNXKKKKXXXNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXKKKXXNNNWWWWWWWWWWWWWWWWNNNNNNNNNNXXXXXXXXXXXXXXXXXXXNNNNNNNNWWWWWWWWWWWWWWWNNNXXKKKXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXKKKKXNNNNNO:..',,;;;,,'''',,,'''''........'oXMMMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMMWKl...........''''''''''''',,,,,,'..'dXNNNNXKKKKKXXNNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXKKKXXNNNNWWWWWWWWWWWWWWWWWWWNNNNNNNXXXNXXXXNNNXXNNNNNNNNNWWWWWWWWWWWWWWWWWWWNNNXXKKXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXXKKKKXNNNNXd,.'',,,;,,'''''',''''''.........:OWMMMMMMMMMMMMMMMM
MMMMMMMMMMMMMMNk,..............''''''''',,'''''''..:ONNNNXKKKKKKXXNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXKKKXXNNNNWWWWWWWWWWWWWWWWWWWNNNNNNNNNNNNNNNNNNNXXNNNNNNNWWWWWWWWWWWWWWWWWWWNNNNXXKKXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXKKKKKXNNNNO:..'',,,,,,''''''''''''..........'dXMMMMMMMMMMMMMMM
MMMMMMMMMMMMWKl.................''''''''''....''..'oKNNXXXKKKKKXXXNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXKKKXXNNNNNNWWWWWWWWWWWWWWWWWWWNNNNNNNNNNNNNNNNNNNNNNNNNWWWWWWWWWWWWWWWWWWWNNNNNXXKKKXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNNXXKKKKKKXXNNXo'..'''..'''''''''''...............:OWMMMMMMMMMMMMM
MMMMMMMMMMMNk,....................''''''......''..;kXXXXKKKKKKKXXNNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNXKKKKXXXNNNNNNWWWWWWWWWWWWWWNNWWWWNNNNNNNNNNNNNNNNNNNNNNNNNNNWWWWWWWWWWWWWNNNNNNNXXKKKXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXKKKKKKKXXXXO;..''.....''''''''.................'dXMMMMMMMMMMMM
MMMMMMMMMWKl........................''...........'oKXXXKKKKKKKXXXNNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXXXXXNNNNNNNWWWWWWWWWWWWWWWNNWWWWWNNXXXNNNNNNNNNNNNNNNNNNNWWWWWWWWWWWWWWNNNNNNXXXXXXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNNXXKKKKKKKXXXKo'..........'''.................... .:OWMMMMMMMMMM
MMMMMMMMNk,..................................'...:OXXXKKKKKKKKXXNNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXXXXNNNNNNNWWWWWWWWWWWWWWWWWNNNWWWWNNNXXXNNNNNNNNNNNNNNNWWWWWWWWWWWWWWWNNNNNNNXXXXXNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXXKKKKKKKXXXO:............'.......................'dXMMMMMMMMM
MMMMMMW0c.  ....................................,xKXKKKKKKKKKXXXNNNWWWWWWWNNNNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNXXXXXNNNNNNNNNWWWWWWWWWWWWWWWWNNNNWWWWNNNNNNNNNNNNNNNNWWWWWWWWWWWWWWWWNNNNNNNNNXXXXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNNWWWWWWWWNNNXXKKKKKKKKKXXx,................................... .:OWMMMMMMM
MMMMMXo.   ....................................'o0XKKKKKKKKXXXXXNNNWWWNNNNNNNWWWWWWWWWWNWWWWWWWWWWWWWWWWWWWWWNXXXXXNNNNNNNNNWWWWWWWWWWWWWWWWWNNNNNNWWWNNNNNNNNNNNNNWWWWWWWWWWWWWWWWNNNNNNNNNXXXXXXNWWWWWWWWWWWWWWWWWWWWWWWWWWWWWNNNNNNNNWWWNNNXXXXKKKKKKKKX0l...................................   .oKWMMMMM
MMMNk;.   ........ ............................:OKXKKKKKKKKXXXXNNNNNNNNNNNNNWWWWWWWNNNNNNNNWWWWWWWWWWWWWWWWWWNNXXXXXXNNNNNNWWWWWWWWWWWWWWWWWWWWNNNNNNNNNNNNNNNNNNNWWWWWWWWWWWWWWWWWWWNNNNNNXXXXXXNNWWWWWWWWWWWWWWWWWNNNNNNNWWWWWWNNNNNNNNNWNNNNXXXXKKKKKKKKKO:...................................   .,xNMMMM
MW0c.    ........ ...........................,lkKKKKKKKKKKKXXXNNNNNNNNNNNNWWWWWWNNNNNNNNNNWWWWWWWWWWWWWWWWWWWNNXXXXXXXXNNNNNNWWWWWWWWWWWWWWWWWWWWNNNNNNNNNNWNNNNNNWWWWWWWWWWWWWWWWWNNNNNNNXXXXXXNNWWWWWWWWWWWWWWWWWWWNNNNNNNNNWWWWWWNNNNNNNNNNNXXXXKKKKKKKKKKkl,.......................... .......    .:0WMM
Xd'     ........  ........................';ok0KKKKKKKKKKKXXXXNNNNNNNNNNWWWWWWNNNNNNNNNNWWWWWWWWWWWWWWWWWWWWWWNNXKKKXXXNNNNNNWWWWWWWWWWWWWWWWWWWWWWNNNXNNNNNNNNNNNNWWWWWWWWWWWWWWWWNNNNNNXXXKKXXNNWWWWWWWWWWWWWWWWWWWWNNNNNNNNNNWWWWWNNNNNNNNNNNXXXKKKKKKKKKKK0xl;........................  .......     .oXM
l.     .........  .......................'cx000KKKKKKKKKKXXXXNNNNNNNNNNWWWWWWNNNNNNNNNNNWWWWWWWWWWWWWWWWWWWWWWNNXKKKKXXNNNNNWWWWWWWWWWWWWWWNNWWWWWWWNNNNXXXXXNNNNNNNNNWWWWWWWWWWWWWWNNNNNXXKKKXXNNWWWWWWWWWWWWWWWWWWWWWNNNNNNNNNNNWWWWWNNNNNNNNNXXXXXKKKKKKKKK00Od:.......................  ........     .cX -->
</body>
</html>