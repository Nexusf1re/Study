<?php error_reporting(0);
ini_set('display_errors', 0);?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link href="../css/style-classes.css" rel="stylesheet">
    <link rel="icon" href="../css/img/ABREUS - Upscale w logo1.png">
    <title>Constants</title>
</head>

<?php 
define("guia", "<p>Execução do código PHP ↓</p>");
define("sub", "<h3>Exemplo</h3>");
?>

<body>
    <div class="main">
    <a href="../php-class.php" style="color:red">Voltar</a>
    <h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>

    <h1>PHP Constants</h1>
    <hr>
    <p>Constantes são como variáveis, execeto que uma vez que eles são definidas não podem ser alteradas ou indefinidas</p>
    <hr>
    <h2>Constantes PHP</h2>
    <p>Uma constante é um identificador(nome) para um valor simples. O valor não pode ser alterado durante o script.</p>
    <p>Uma constante valida começa com uma letra ou sublinhado (_) (Sem sinal $ antes do nome da constante).</p>
    <p><strong>Nota: </strong> Diferente das variáveis, constantes são automaticamente globais através de todo o script.</p>
    <hr>
    <h2> Criar uma constante PHP </h2>
    <p>Para criar uma constante, use a função <span class="var">define()</span>.</p>
    <h3>Syntax</h3>
    <div class="example">
        <div class="example0">
            <span class="var">define</span>(name, value, <span class="var3">case</span>-insensitive);
        </div>
    </div>
    <p>Parâmetros:</p>
    <ul>
        <li>name: especifíca o nome da constantes</li>
        <li>value: especifíca o valor da constantes</li>
        <li>case-insensitive: especifíca quando o nome da constante deve ser case-insensitive. O padrão é falso. <strong>Nota:</strong> Definir constantes case-insensitive está ultrapassado desde do PHP 7.3. PHP 8.0 aceita apenas 'false', o valor 'true' pode gerar um aviso.</li>
    </ul>
    <div class="example">
        <h3>Exemplo</h3>
        <p>Criar uma constante com nome case-sensitve:</p>
        <div class="example0">
        <span class="var">define</span>("SAUDAÇÕES", "Bem vindo a Abreu's Academy"); <br>
        <span class="var3">echo</span> SAUDAÇÕES;
        </div>   
        <?php echo guia; //constante definida?>
        <div class="example0">
            <?php 
            define("SAUDAÇÕES", "Bem vindo a Abreu's Academy");
            echo SAUDAÇÕES;
            ?>
        </div>
    </div>
    <br>
    <div class="example">
        <h3>Exemplo</h3>
        <p>Crie uma constante com nome case-insensitive:</p>
    <div class="example0">
    <span class="var">define</span>("SAUDAÇÕES", "Bem vindo a Abreu's Academy", <spn class="var2">true</spn> ); <br>
        <span class="var3">echo</span> saudações;    
     </div>
     <?php echo guia;?>
     <div class="example0">
        <?php 
        define("saudações", "Bem vindo a Abreu's Academy", true);
        echo saudações;
        ?>
     </div>
     </div>
        <br> <hr> <br>
        <h2>Palavra-Chave const PHP</h2>
        <p>Você também pode criar uma constante usando a palavra-chave <span class="var">const</span></p>
        <div class="example">
            <h3>Exemplo</h3>
            <p>Crie uma constante com a palavra-chave <span class="var">const</span> </p>
            <div class="example0">
                <span class="var3">const</span> <span class="var2">MEUCARRO</span> = <span class="var1">"BMW";</span>; <br>
                <span class="var3">const</span> <spn class="var2">MEUCARRO</spn>;
            </div>
            <?php echo guia;?>
            <div class="example0">
                <?php 
                const MEUCARRO = "BMW";
                echo MEUCARRO;
                ?>
            </div>
        </div>
        <br>
        <div style="padding-left: 20px;" class="yexample">
            <br>
            <span class="var">const</span> <strong>VS</strong> <span class="var">define()</span>
            <ul>
                <li><span class="var">const</span> sempre são case-sensitive.</li>
                <li><span class="var">define()</span> tem a opção case-insensitive<./li>
                <li><span class="var">const</span> não pode ser criado dentro de outro escopo de bloco, como dentro de uma função ou sentro de uma instrução <span class="var">if</span>.</li>
                <li><span class="var">define</span> pode ser criado dentro de um escopo de bloco.</li>
            </ul>
            <br>
        </div>
        <br>
        <hr>
        <br>
        <h2>PHP Constants Arrays</h2>
        <p>A partir do PHP7, você pode criar uma constante de arranjo usando a função <span class="var">define()</span>.</p>
        <div class="example">
            <?php echo sub;?>
            <p>Crie uma constante de aranjo: </p>
            <div class="example0">
                <img src="../css/img/example5-8.png" alt="example5-8">
            </div>
            <?php  echo guia;?>
            <div class="example0">
                <?php 
                define("cars", [
                    "Alfa Romeo", "BMW","Toyota"
                ]);
                echo cars[0];                
                ?>
            </div>
        </div>
        <hr>
        <br>
        <h2>Constantes são Globais</h2>
        <p>Constantes são automaticamente globais e podem ser usados em todo script.</p>
            <div class="example">
                <?php echo sub;?>
                <p>Esse exemplo usa a constante dentro da função, mesmo se estiver definido fora da função:</p>
                
                <div class="example0">
                <img src="../css/img/example5-9.png" alt="example5-9">
                </div>
                <?php echo guia;?>
                <div class="example0">
                    <?php 
                    define("WORSHIP", "God is the lord of lords");
                    function myTest(){
                        echo WORSHIP;
                    }
                    myTest();
                    ?>
                </div>
                
            </div>
            

    </div>
</body>
</html>