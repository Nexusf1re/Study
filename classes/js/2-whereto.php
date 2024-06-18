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
    <title>Onde Fazer</title>
</head>

<body>
    <div class="main">
        <?php echo $voltar; ?>
        <h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <hr>
        <h2>Onde fazer o JavaScript: </h2>
        <h3>A tag &ltscript&gt</h3>
        <p>No HTML, o código JavaScript é inserido entre as tags. <span class="var"> &ltscript&gt &lt/script&gt</span></p>
        <div class="example">
            <h3>Exemplo</h3>
            <a onclick="document.getElementById('ex').style.display = 'block';" id="bt" style="cursor: pointer;">Mostrar Exemplo</a>
            <img id="ex" style="display: none;" src="../../css/img/example6.3.png" alt="">

        </div>


        <style>
            .li-pointer li {
                cursor: pointer;
            }
        </style>

        <script>
            var out = getElementById('out');

            function redirOut() {
                document.getElementById('output').focus();
            }
        </script>

        <div>
            <h3>Próximos aprendizados</h3>
            <ul class="li-pointer">
                <li id="out" onclick="redirOut()">Outputs(saídas)</li>
                <li>Statements(declarações)</li>
                <li>Variables(variáveis)</li>
                <li>Functions(funções)</li>
                <li>Objetcs(objetos)</li>
                <li>Events(eventos)</li>
            </ul>

        </div>

        <div tabindex="0" id="output">
            <h2>Outputs</h2>
            <h3>Possibilidades de mostrar o Javascript</h3>
            <ul>
                <li>Escrevendo no elemento HTML, usando <span class="var">innerHTML</span></li>
                <li>Escrevendo no output HTML, usando <span class="var">document.write()</span></li>
                <li>Escrevendo em um alert box, usando <span class="var">window.alert()</span></li> 
                <li>Escrevendo no console do navegador, usando <span class="var">console.log()</span></li> 
            </ul>

        </div>
    </div>
</body>

</html>