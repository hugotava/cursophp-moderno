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
            // Equivalências em segundos:
            // 1 min -> 60 seg 
            // 1 hora -> 3600 seg
            // 1 dia -> 86400 seg
            // 1 semana -> 604800 seg

            // Minha solução (variáveis no plural)
            $semanas = (int)($segundos_total / 604800);
            $dias = (int)(($segundos_total % 604800) / 86400);
            $horas = (int)((($segundos_total % 604800) % 86400) / 3600);
            $minutos = (int)(((($segundos_total % 604800) % 86400) % 3600) / 60);
            $segundos = (int)(((($segundos_total % 604800) % 86400) % 3600) % 60);

            // Solução do Guanabara (variáveis no singular)
            $sobra = $segundos_total;
            // Total de semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            // Total de dias
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;
            // Total de horas
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
            // Total de minutos
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            // Total de segundos
            $segundo = $sobra;
            
            // A solução do prof Guanabara é mais otimizada pois vai reutilizando a variável $sobra e fazendo as atualizações conforme necessário.
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($segundos_total, 0, ',', '.')?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>