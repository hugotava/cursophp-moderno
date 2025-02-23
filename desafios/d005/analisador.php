<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP nº 5 - Analisador de Número Real</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num_real = $_GET["numero"] ?? "0";
            $int_num_real = intval($num_real); 
            $fra_num_real = $num_real - $int_num_real;

            // echo $num_real . "\n";
            // echo $int_num_real . "\n";
            // echo $fra_num_real . "\n";
            
            echo "<p>Analisando o número <strong>" . $num_real . "</strong> informado pelo usuário:</p>
            <ul>
                <li>A parte inteira do número é <strong>" . $int_num_real . "</strong></li>
                <li>A parte fracionária do número é <strong>" . $fra_num_real . "</strong></li>
            
            </ul>"


        ?>
    </main>
</body>
</html>