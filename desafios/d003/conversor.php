<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão (1.0)</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas 1.0</h1>
    <?php 
    $real = $_GET["dinheiro"] ?? "0";
    $cotacao = 5.22;
    $dolar = $real / $cotacao;
    
    // Minha tentativa antes de ver a solução
    //echo "<p></p>Seus R$ $real equivalem a <strong>US$ $dolar</strong></p>";

    // Mostrar o resultado de forma tradicional:
    // echo "Seus R\$" . number_format($real, 2, "," , ".") . " equivalem a US\$" . number_format($dolar, 2, "," , ".");

    // Formatação de moedas com internacionalização
    // Bibilioteca intl (Internallization PHP)
    // $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    // echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "<p></p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . "<strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

    ?>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>

