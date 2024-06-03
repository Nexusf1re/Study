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
<title>Introdução Javascript</title>
</head>

<body>
<div class="main">
<?php echo $voltar; ?>
<h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
<hr>
<h1>Introdução Javascript</h1>
<div class="yexample">
    <p>JavaScript é a linguagem de programação mais popular no mundo.</p>
    <p>JavaScript é linguagem de programaçãoda Web.</p>
    <p>JavaScript é fácil de aprender.</p>
</div>
<h2>Questões comuns perguntadas</h2>
<ul>
    <li>Como eu obtenho o JavaScript?</li>
    <li>Onde eu posso baixar o JavaScript?</li>
    <li>O JavaScript é de graça?</li>
</ul>
<strong>Você não precisa ter ou baixar o JavaScript.</strong><br><br>
<strong>JavaScript já esta rodando no seu navegador, no seu computador, no seu tablet e no seu smart-phone.</strong> <br><br>
<strong>Javascript é gratis para todo mundo.</strong> <br>
<br>
<div class="example">
    <h3>Exemplo de um Script</h3>

    <div class="example0">
        <h3>Mudando o conteúdo de um parágrafo</h3>
        <img width="750px" src="../../css/img/example6.png" alt="">
        <p id="demo">Javascript pode mudar o conteúdo de uma tag</p>

        <button type="button" onclick='document.getElementById("demo").innerHTML = "Parágrafo Alterado"'>Alterar Parágrafo</button>

    </div>
    <br>
    <div class="example0">
        <h3>Mudando a source de uma imagem.</h3>

        <img id="ex" src="../../css/img/example6.1.png" alt="">
        <br>
        <div class="exemplo">

            <button onclick='document.getElementById("lamp").src="https://www.w3schools.com/js/pic_bulbon.gif"'>Ligar Lâmpada</button>
            
         
            <img style="margin-right: 0px;" id="lamp" src="https://www.w3schools.com/js/pic_bulboff.gif" alt="">

            <button onclick='document.getElementById("lamp").src="https://www.w3schools.com/js/pic_bulboff.gif"'>Desligar Lâmpada</button>
            
            
        </div>
        <br>
        
    </div>
    <br>
    <div class="example0">
    <h3>JavaScript pode mudar o Css</h3>
    <p>Mudando o estilo de um elemento HTML, é a variação de um atributo HTMl</p>
    <img src="../../css/img/example6.2.png" alt="">

    <button onclick="document.getElementById('alter').style.fontSize = '35px';">Alterar fonte</button>

    <p  id="alter"> God is good</p>

    </div>
    <br>
    <div class="example0">
    <h3>JavaScript mostrar elementos HTML e vice versa</h3>
    <p>Revelar elementos HTML escondidos pode ser feito alterando o estilo <span class="var">display</span></p>
    <img src="../../css/img/example6.2.png" alt="">

    <button onclick="document.getElementById('altera').style.display = 'block';">Mostrar Elemento</button>

    <p style="display: none;" id="altera"> God is good</p>

    </div>


</div>
<br>




</div>
</body>

</html>