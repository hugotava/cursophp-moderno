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
            $num_real = $_POST["numero"] ?? "0";
            // $int_num_real = intval($num_real); -> Minha solução
            $int_num_real = (int)$num_real; // Solução do Guanabara (mais direto)
            $fra_num_real = $num_real - $int_num_real;
        
            echo "<p>Analisando o número <strong>" . number_format($num_real, 3 , ",", ".") . "</strong> informado pelo usuário:</p>
            <ul>
                <li>A parte inteira do número é <strong>" . number_format($int_num_real, 0 , ",", ".") . "</strong></li>
                <li>A parte fracionária do número é <strong>" . number_format($fra_num_real, 3 , ",", ".") . "</strong></li>
            
            </ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>