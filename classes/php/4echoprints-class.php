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
    <title>Variables</title>
</head>

</style>

<body>

    <div class="main">
    <?php echo $voltar;?>

        <h3 style="color: brown;">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <hr>
        <h1>Intruções Echo e Print no PHP</h1>
        <hr>
        <p>Com PHP, há duas maneiras basicas para gerar a saída: <span class="var">echo</span> e <span class="var">print</span>. <br><br>
        Nesse tutorial nós usamos <span class="var">echo</span> 
        ou <span class="var">print</span> em qual todos os exemplos.Então, este capítulo contém um pouco mais de informação sobre essas duas intruções de saída.</p>
        <hr>
        <h2>Intruções Echo e Print no PHP</h2>
        <p><span class="var">echo</span> e <span class="var">print</span> são mais ou menos a mesma coisa. Ambos são usados para gerar saída na tela.</p>
        <p>As diferenças são pequenas: <span class="var">echo</span> não tem retorno de valor enquanto <span class="var">print</span> tem retorno de valor de 1, então pode ser usado para expressões. <span class="var">echo</span> pode ter parâmetros múltiplos(apesar desse uso ser raro) enquanto <span class="var">print</span> pode receber um argumento. <span class="var">echo</span> é marginalmente mais rapído que <span class="var">print</span>.</p>

        <hr>

        <h2>A intrução PHP echo</h2>
        <p>A intrução <span class="var">echo</span> pode ser usada com ou sem parênteses: <span class="var">echo</span> ou <span class="var">echo()</span>.</p>
        <strong>Exibir Texto</strong>
        <p>O exemplo a seguir mostra como gerar texto com o comando <span class="var">echo</span> (note que o texto pode conter marcação HTML):</p>
        <div class="example">
            <h3>Exemplo</h3>
        <img src="../../css/img/example1.png" alt="example1">
        <p>Execução código PHP ↓</p>

        <div class="example0"><?php 
        echo "<p>PHP é divertido!</p>";
        echo "Olá mundo! <br>";
        echo "Estou prestes a aprender PHP! <br>";
        echo "Essa ", "string ", "foi ", "feita ", "com parâmetros múltiplos.";
        ?></div>
        </div>  
        <br>
        <strong>Exibir Variáveis</strong>
        <p>O exemplo a seguir mostra como gerar saída de texto e varáveis com a instrução <span class="var">echo</span>.</p>
        <div class="example">
            <h3>Exemplo</h3>
            <img src="../../css/img/example2-3.png" alt="example2-3">
            <p>Execução código PHP ↓</p>
            <div class="example0">
        <?php 
        $txt1 = "Aprender PHP";
        $txt2 = "Abreu's Academy";
        $x = 5;
        $y = 4;

        print "<h2>".$txt1."</h2>";
        print "Estudar PHP na ".$txt2."<br>";
        print $x + $y;
        ?>
        </div>

        </div>

        

        <hr>




    </div>
</body>

</html>