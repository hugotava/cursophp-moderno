<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP nº 7 - Informe seu Salário</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <?php 
            $salario = $_GET['salario'] ?? 0;
            $minimo = 1380;
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong> </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $quantidade = (int)($salario / $minimo);
            // $quantidade = intdiv($salario, $minimo); 
            $resto = $salario % $minimo;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Quem recebe um salário de ". numfmt_format_currency($padrao, $salario, "BRL") ." ganha <strong>$quantidade salários mínimos</strong> + ". numfmt_format_currency($padrao, $resto, "BRL") .".</p>"
        
        ?>
        
    </section>
</body>
</html>
