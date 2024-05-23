<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link href="../css/style-exercices.css" rel="stylesheet">
    <link rel="icon" href="../css/img/ABREUS - Upscale w logo1.png">
    <title>2 Variable PHP</title>
    
</head>

<?php // Margin->Border->Padding->Content // ?>
    
<body class="margin">
    <div class="border">
        <div class="paddin">
            <div class="content">
            <a href="../php-class.php" style="color:red; margin-bottom: -20px;">Voltar</a>
                <h1> Exercício Strings</h1>
                <?php 
                    $br = '<br>';
                    $br2 = '<br><br>';
                    $b = ('<br>');
                    $b2 = ('<br><br>');
                    ?>
                    <?php 
                    echo("Exercise 1:");
                    echo $b;
                    echo("Obtido tamanho da string com 'strlen'");
                    echo strlen("Hello World!");

                    ?>

                    <br><br>

                    <?php 
                    echo("Exercise 2:");
                    
                    ?>

                    <br><br>

                    <?php 
                    echo("Exercise 3:");
                    
                    ?>

                    <?php 
                    echo phpversion();
                    ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>