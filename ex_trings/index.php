<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>
    <?php 
        $nome = "Hugo";
        $sobrenome = "Tavares";
        echo "$nome $sobrenome \u{1F179}";

        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< TESTE
            Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços ! \u{1F596}
        TESTE;


    ?>
    </h1>
</body>
</html>