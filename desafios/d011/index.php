<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP nº 11 - Reajuste de preços</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <?php 
            $preco = $_GET['p1'];
            $porcentagem = $_GET['porc'];
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="p1">Preço do Produto (R$)</label>
            <input type="number" name="p1" id="p1" value="<?=$preco?>">
            <label for="porc">Qual será o percentual de reajuste (<strong><?=$porcentagem?> %</strong>)</label>
            <input type="range" name="porc" id="porc" value="<?=$porcentagem?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
            $reajustado = $preco + ($preco * $porcentagem / 100);
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=$preco?>, com <strong><?=$porcentagem?>% de desconto</strong> vai passar a custar R$ <?=$reajustado?> a partir de agora.</p>
    </section>
</body>
</html>