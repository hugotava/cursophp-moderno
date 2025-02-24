<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP nº 6 - Anatamia Divisão</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $resto = $dividendo % $divisor;
        $quociente = (int)($dividendo / $divisor);
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        
        <!-- Solução antes do Guanabara
        <p>Dividendo: </p>
            <?=$dividendo?>
        <p>Divisor: </p>
            <?=$divisor?>
        <p>Resto: </p>
            <?=$resto?>
        <p>Quociente: </p>
            <?=$quociente?>
        -->
    </section>
</body>
</html>