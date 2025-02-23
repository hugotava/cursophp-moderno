<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão (2.0)</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas 2.0</h1>
        <?php 
            // Cotação vinda da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days")); // Data atual menos 7 dias
            $fim = date("m-d-Y"); // Data atual do sistema

            // URL gerada no dadosaberto.bcb.gov.br
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            // Tratamento dos dados do JSON recebido
            $dados = json_decode(file_get_contents($url), true);

            // Extração apenas da cotação de compra do JSON
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            // Quanto $$ vovê tem? -> Aqui ele puxa o dado do formulário.
            $real = $_GET["dinheiro"] ?? "0";
            
            // Equivalência em dólar
            $dolar = $real / $cotacao;
            
            // Mostrar o resultado de forma tradicional:
            // echo "Seus R\$" . number_format($real, 2, "," , ".") . " equivalem a US\$" . number_format($dolar, 2, "," , ".");

            // Formatação de moedas com internacionalização
            // Bibilioteca intl (Internallization PHP)
            // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            // echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");


            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p></p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . "<strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>" . "<em><p style='font-size: 10pt'>Esse cálculo foi realizado com base na última cotação de compra do Dólar comercial, disponibilizada pelo Banco Central, a qual indica que <strong>US$ 1,00</strong> equivale <strong>" . numfmt_format_currency($padrao, $cotacao, "BRL") ."</strong></p></em>";

        ?>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>

