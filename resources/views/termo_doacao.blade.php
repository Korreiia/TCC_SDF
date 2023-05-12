<x-layout>
    <link rel="stylesheet" href="/css/style_termo.css">

        <img src="img/reciclaetec.jpg">
        <img src="img/apm.jpg">

        <h1>TERMO DE DOAÇÃO DE EQUIPAMENTOS ELETRÔNICOS</h1>

        <h2>RECICLAETEC - RECICLAGEM DO LIXO ELETRÔNICO</h2>

        <pre>
Venho pelo presente instrumento de doação, de um lado a APM da ETE ANTONIO DEVISATE, Av. Castro Alves nº 62 -
Somenzari – Marília – SP, tendo a responsável, a diretor BENEDITO GOFFR4EDO e os Professores Fábio Henrique
Zanella Moura, Coordenador do PROJETO RECICLAETEC, doravante denominado DOADOR, e de outro a entidade:
{{ $usuario->nome }} portador(a) do CPF {{ $usuario->cpf }} {{ $usuario->endereco }}, doravante denominada RECEBEDOR. 
        </pre>

        <h3>CLÁUSULA PRIMEIRA</h3>
        <pre>
Constitui objeto do presente Contrato a doação os seguintes equipamentos eletrônicos: 
{{ $solicitacao->descpedido }}.
        </pre>

        <h3>CLÁUSULA SEGUNDA</h3>
        <pre>O DOADOR declara e confessa que é legítimo possuidor do bem descrito na cláusula anterior.</pre>

        <h3>PARÁGRAFO ÚNICO</h3>
        <pre>
É por livre e espontânea vontade do DOADOR, fazer a doação para à DONATÁRIO,
gratuitamente e sem condições ou encargos de qualquer natureza do bem doado, acima caracterizado.
        </pre>

        <h3>CLÁUSULA TERCEIRA</h3>
        <pre>
O RECEBEDOR declara que aceita tal doação na forma estipulada, para que lhe passe a pertencer o bem doado, sem 
qualquer ônus.
        </pre>

        <p>E por estarem assim justos, as partes firmam o presente instrumento, em 2 (duas) vias de igual teor.</p>

        <p>Doador:</p>
        <p>Marília,{{ $solicitacao->created_at }}.</p>

        <img src="img/assi_fabio.jpg">
        <pre>
  ________________________	                          	
  Fabio H. Zanella Moura                                        
Coordenador do RECICLAETEC
        </pre>

        <p>Recebedor:</p>
        <pre>
____________________________________
    {{ $usuario->nome }}
 CPF:{{ $usuario->cpf }}
        </pre>

        <button onclick="window.print()">Imprimir</button>

        <hr>

        <pre>
            www.reciclaetec.com.br
Etec Sede: Av. Castro Alves, 62 - Somenzari - Marília - SP - 17.506-000 - Fone/Fax: (14) 3433-5467 / 3433-5274
Etec Classes Descentralizadas: Av. Rio Branco, 803 - Alto Cafezal - Marília - SP - 17.502-000 - Fone: (14) 3414-1474

        </pre>
</x-layout>