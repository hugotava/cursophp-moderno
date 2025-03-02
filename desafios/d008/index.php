<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP nº 8 - Raiz quadrada e cúbica</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <?php 
            $numero = $_GET['numero'] ?? 0;
            // $rquad = sqrt($numero);
            $rquad = $numero ** (1/2);
            $rcubi = $numero ** (1/3);
        ?>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong>" . number_format($rquad, 3, ',', '.') . "</strong></li>
            <li>A sua raiz cúbica é <strong>" . number_format($rcubi, 3, ',', '.') . "</strong></li>
        </ul>"
        ?>
    </section>
</body>

</html>