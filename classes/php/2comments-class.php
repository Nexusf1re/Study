<?php 
error_reporting(0);
ini_set('display_errors', 0);

include('../../config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link rel="icon" href="../../css/img/ABREUS - Upscale w logo1.png">
    <link href="../../css/style-classes.css" rel="stylesheet">
    <title>Comments</title>
</head>

<body>
    
    <div class="main">
    <?php echo $voltar;?>
    <h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <h3>Comments Class</h3>
        <p>Um comentário no código PHP é uma linha que não é executada como parte do programa. O Único propósito é para ser lido por alguém no qual está olhando o código do programa</p>
        <br>
        <div class="list">
        <h3 style="margin-left: 18px;">Comentários podem ser usados para:</h3>
        <ul>
        <li>Deixar outros entenderem seu código.</li>
        <li>Lembrar o que você fez - A maioria dos programadores experenciaram voltar para seu próprio trabalho depois de um ano ou dois e terem que relembrar o que eles fizeram. Comentários podem lembrar você sobre o que você estava pensando quando escreveu o código!</li>
        <li>Retirar algumas partes do seu código.</li>
        </ul>
        </div>

        <div class="example">
            <h2>Exemplos de sintaxe para comentar em um código PHP</h2>
            <p>//Esse é um cometário de linha única</p>
            <p># Esse também é um comentário de linha única</p>
            <p>/*Esse é um <br> comentário de linha múltipla */</p>
        </div>
        <br>
        <div class="box">
            <h4>O comentário de linha múltipla /* Texto */ pode ser usado para ignorar um parte específica dentro de um código."</h4>
            <div class="example">
                <h2>Exemplo</h2>
                <p>A parte "+ 15" será ignorada pelo cáculo.</p>
                <p>$x = 5 /* + 15 */ + 5;<br>
                echo $x;</p>
            </div>
        </div>


    </div>

</body>

</html>