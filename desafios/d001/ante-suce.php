<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado Final</h1>
        <?php
            // var_dump($_GET); // Usa-se a superglobal $_GET pois o método no index.html foi "get". Se fosse "post", deveria ser utilizada a superglobal $_POST
            // var_dump($_REQUEST); // Junção de $_GET, $_POST e $_COOKIES
            $number = $_GET["number"] ?? "sem número";
            $antecessor = $number - 1;
            $sucessor = $number + 1;
            echo "<p>O número escolhido foi <strong>$number</strong>!</p>
            <p>O seu <em>antecessor</em> é $antecessor</p>
            <p>O seu <em>sucessor</em> é $sucessor</p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>        

        <!-- <p><a href="javascript:history.go(-1)">Voltar para  a página anterior</a></p> -->
        
    </main>
</body>
</html>