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
            // 1 min -> 60 seg 
            // 1 hora -> 3600 seg
            // 1 dia -> 86400 seg
            // 1 semana -> 604800 seg

            $semanas = (int)($segundos_total / 604800);
            $dias = (int)(($segundos_total % 604800) / 86400);
            $horas = (int)((($segundos_total % 604800) % 86400) / 3600);
            $minutos = (int)(((($segundos_total % 604800) % 86400) % 3600) / 60);
            $segundos = (int)(((($segundos_total % 604800) % 86400) % 3600) % 60);
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$segundos_total?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>