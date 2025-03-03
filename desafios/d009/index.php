<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP nº 9 - Médias Aritméticas</title>
</head>
<body>
    <main>
        <?php 
            $valor1 = $_GET['v1'] ?? 0;
            $peso1 = $_GET['p1'] ?? 1;
            $valor2 = $_GET['v2'] ?? 0;
            $peso2 = $_GET['p2'] ?? 1;
        ?>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.01" required>
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$peso1?>" step="0.01" min="1" require>
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" step="0.01" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$peso2?>" step="0.01" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $msimp = ($valor1 + $valor2)/2;
            $mpond = (($valor1 * $peso1) + ($valor2 * $peso2))/($peso1 + $peso2);
        ?>
        <h2>Cálculo das Médias</h2>
        
        <?php 
            echo "<p>Analisando os valores $valor1 e $valor2:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual à " . number_format($msimp, 2, ",", ".")  . ".</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos " . number_format($peso1, 2, ",", ".")  . " e " . number_format($peso2, 2, ",", ".")  . " é igual à " . number_format($mpond, 2, ",", ".")  . ".</li>
        </ul>"
        // Na solução do Guanabara ele utilizou no código html as short tags do php direto com o number_format
        ?>
        
    </section>
</body>
</html>