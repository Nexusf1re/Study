<?php 
error_reporting(0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link href="../../css/style-exercices.css" rel="stylesheet">
    <link rel="icon" href="../../css/img/ABREUS - Upscale w logo1.png">
    <title>1 Sintaxe PHP</title>
    
</head>

<?php // Margin->Border->Padding->Content // ?>
    
<body class="margin">
    <div class="border">
        <div class="paddin">
            <div class="content">
            <a href="../../php-class.php" style="color:red; margin-bottom: -20px;">Voltar</a>
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
                    echo("Hello World");
                    ?>
                    <br><br>
                    <?php 
                    echo("Exercise 2:");
                    echo $b;
                    echo "This is PHP";
                    ?>
                     <br><br>
                     <?php 
                     echo("Exercise 3:");
                     echo $b;
                     echo("//isso é um comentário de linha única");
                     ?>
                    <br><br>
                    <?php 
                     echo("Exercise 4:");
                     echo $b;
                     echo("/* Esse é <br> um comentário <br> multi linhas */");
                     ?>
                    <br><br>
                    <?php 
                     echo("Exercise 5:");
                     echo $b;
                     echo "Hello World";
                     ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>