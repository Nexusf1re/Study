<?php
error_reporting(0);
ini_set('display_errors', 0);

include(__DIR__.'../../../back.php');

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
<<<<<<< HEAD
            <a onclick="document.getElementById('ex').style.display = 'block';" id="bt" style="cursor: pointer;">Mostrar Exemplo</a>
=======
            <a onclick="document.getElementById('ex').style.display = 'block';" style="cursor: pointer;">Mostrar Exemplo</a>
>>>>>>> main
            <img id="ex" style="display: none;" src="../../css/img/example6.3.png" alt="">

        </div>

<<<<<<< HEAD

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
=======
        <div>
        <script>
            document.write("<h1> Teste JS </JS> <br>")

            const car = {model: "Kia", 
                        color: "Prata",
                        year: 2011, 
                        yearmodel: 2012,
                        info: function(){
                        return "Carro do modelo " + this.model + ", identificado na cor: " +this.color
            }
        };
            car.model = "Toyota";
            car.color = "Vermelho";

            document.write(car.model +"<br><br>");
            document.write (car.info());


        </script>
        
        </div>
>>>>>>> main
</body>

</html>