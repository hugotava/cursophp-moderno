<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
       <?php 
        $numero = rand(0,100);
        echo "<p>O valor gerador foi <strong>$numero</strong></p>";
       ?>
       
        <button onclick="javascript:window.location.reload()">&#x1F504; Gerar outro</button>
    </section>
</body>
</html>