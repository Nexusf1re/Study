<?php error_reporting(0);
ini_set('display_errors', 0);?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link rel="icon" href="../css/img/ABREUS - Upscale w logo1.png">
    <link href="../css/style-classes.css" rel="stylesheet">
    <title>Syntax</title>
</head>

<body>
    <div class="main">
     <a href="../php-class.php" style="color:red">Voltar</a>
        <h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <h3>Comments class</h3>

        <?php
        echo("//Código PHP vai aqui");
        ?>

        <br>
        <p class="bold">Palavras chaves no PHP Ex:'if', 'else', 'while', 'echo', 'etc', classes, funções e funções definidas por usuários não são Case-sensitive.</p>

        <?php 
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
        ?>

        <p class="bold">Porém todos nomes de variáves são case-sensitives</p>
        <p> $COLOR não é o mesmo que $color</p>
        <?php 
        $color = "Vermelho";
        echo("Meu carro é ".$color."<br>");
        echo("Meu carro é ".$COLOR."<br>");
        echo("Meu carro é ".$coLOR."<br>");
        ?>

        <p class="bold">☝️ Perceba que o erro de Variável indefinda foi apresentado, pois os dois últimos 'echos' chamaram respectivamente COLOR e coLOR que não foram definidos anteriormente</p>


    </div>
</body>

</html>