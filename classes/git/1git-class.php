<?php 
error_reporting(0);
ini_set('display_errors', 0);

include('C:/xampp/htdocs/Study/config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link href="../../css/style-classes.css" rel="stylesheet">
    <link rel="icon" href="../../css/img/ABREUS - Upscale w logo1.png">
    <title>Intro Git</title>
</head>

<body>
    <div class="main">
    <?php echo $voltar;?>
    <h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
    <hr>
    <h1>Primeiro Título</h1>
    <hr>
    <h3>Comandos Básicos Git</h3>
    <p>Comandos básicos para trabalhar com o git</p>
 
    <p class="yexample">Para dizer para o Git quem você é, você precisará definir seu usuário e email.
    Essas informações serão usadas quando você fizer um commit
    </p>
    <br>
    <div class="example">
        <h3>Exemplo</h3>
        <p>É interessante se registrar no <a style="color: greenyellow;" target="_blank" href="https://www.github.com">Github</a> antes de começar a usar o Git</p>
        <div class="example1">
      <p> <span class="var1">git</span> config --global user.name "nome-teste"</p> 
      <p> <span class="var1">git</span> config --global user.email "emailteste@gmail.com"</p> 
        </div>
    </div>


    </div>
</body>
</html>