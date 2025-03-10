<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP nº 12 - Calculadora de Tempo</title>
</head>
<body>
    <main>
        <?php 
            $segundos_total = $_GET['seg'] ?? 0;
            
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" value="<?=$segundos_total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $segundos = $segundos_total % 60;
            $minutos = intdiv($segundos_total, 60);
            $horas = intdiv($segundos_total, 3600);
            $dias = $horas / 24;
            $semanas = $dias / 7;
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$segundos_total?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=(int)$semanas?> semanas</li>
            <li><?=(int)$dias?> dias</li>
            <li><?=(int)$horas?> horas</li>
            <li><?=(int)$minutos?> minutos</li>
            <li><?=(int)$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>