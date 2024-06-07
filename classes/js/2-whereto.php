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
    <a id="bt" style="cursor: pointer;">Mostrar Exemplo</a>
    <img id="ex" style="display: none;" src="../../css/img/example6.3.png" alt="">

    <script>
        var bt = document.getElementById("bt");

        function alternar(){
            var ex = document.getElementById("ex");
            var ex1 = document.getElementById("ex1");
            
            bt.onclick = function(){
                ex.style.display = "block";
            }
        }

        
    </script>
</div>

</div>
</body>

</html>