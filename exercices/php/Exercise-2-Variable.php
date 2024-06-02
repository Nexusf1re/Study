<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link href="../../css/style-exercices.css" rel="stylesheet">
    <link rel="icon" href="../../css/img/ABREUS - Upscale w logo1.png">
    <title>2 Variable PHP</title>
    
</head>


<?php // Margin->Border->Padding->Content // ?>
    
<body class="margin">
    <div class="border">
        <div class="paddin">
            <div class="content">
            <a href="../../php-class.php"" style="color:red; margin-bottom: -20px;">Voltar</a>
                <h1> Exercício Sintaxe</h1>
                <?php 
                    $br = '<br>';
                    $br2 = '<br><br>';
                    $b = ('<br>');
                    $b2 = ('<br><br>');
                    ?>
                    <?php 
                    echo("Exercise 1:");
                    echo $b;
                    $txt = "Hello";
                    echo("Variável $ txt atribuída com o valor 'Hello' ");
                    ?>
                    <br><br>
                    <?php 
                    echo("Exercise 2:");
                    $x = 5;
                    $y = 7;
                    echo $b;
                    echo ("Atribído valor 5 para Variável X e 7 para Varíavel Y, após a atribuição foi chamado um echo somando ambos");
                    echo $b;
                    echo "Resultado soma x e y: ".$x + $y;
                    ?>

                    <br><br>
            </div>
        </div>
    </div>
</div>
</body>
</html>