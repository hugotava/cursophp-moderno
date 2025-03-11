<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP nº 13 - Caixa Eletrônico</title>
</head>
<body>
    <main>
        <?php 
            $saque = $_GET['saq'] ?? 0;
        ?>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saq">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saq" id="saq" step="5" value="<?=$saque?>">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $sobra = $saque;
            // Notas de R$ 100
            $nota100 = (int)($sobra / 100);
            $sobra = $sobra % 100;
            // Notas de R$ 50
            $nota50 = (int)($sobra / 50);
            $sobra = $sobra % 50;
            // Notas de R$ 10
            $nota10 = (int)($sobra / 10);
            $sobra = $sobra % 10;
            // Notas de R$ 5
            $nota5 = (int)($sobra / 5);
            $sobra = $sobra % 5;

        ?>
        <h2>Saque de R$ <?=number_format($saque, 2, ',', '.')?> realizado!</h2>
        <ul>
            <li><img src="" alt="100reais"> x <?=$nota100?></li>
            <li><img src="" alt="50reais"> x <?=$nota50?></li>
            <li><img src="" alt="10reais"> x <?=$nota10?></li>
            <li><img src="" alt="5reais"> x <?=$nota5?></li>
        </ul>
    </section>
</body>
</html>