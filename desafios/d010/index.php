<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP nº 10 - Cálculo da idade</title>
</head>
<body>
    <?php 
        $ano_atual = (int)date('Y');
        $ano_nasci = ($_GET['ano1']) ?? '';
        $ano_idade = ($_GET['ano2']) ?? $ano_atual;
        $ano_max = $ano_atual - 1;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano1">Em que ano você nasceu?</label>
            <input type="number" name="ano1" id="ano1" value="<?=$ano_nasci?>" min="1900" max="<?=$ano_max?>">
            <label for="ano2">Quer saber sua idade em que ano? Atualmente estamos em <strong><?=$ano_atual?></strong></label>
            <input type="number" name="ano2" id="ano2" value="<?=$ano_idade?>" min="1900">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
            $idade = (int)$ano_idade - (int)$ano_nasci;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$ano_nasci?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano_idade?>!</p>
    </section>
</body>
</html>