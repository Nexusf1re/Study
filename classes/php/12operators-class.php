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
    <link rel="icon" href="../../css/img/ABREUS - Upscale w logo1.png">
    <link href="../../css/style-classes.css" rel="stylesheet">
    <title>Operadores PHP</title>
</head>

<body>
    <div class="main">
    <?php echo $voltar;?>
    <h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
    
    <hr>
    <h1>PHP Operators</h1>
    <hr>
    <h2>Operadores PHP</h2>
    <p>Operadores são usados para executarem operações em variáveis e valores.</p>
    <p>O PHP divide os operadores nos grupos a seguir:</p>
    <ul>
        <li>Operadores Aritiméticos</li>
        <li>Operadores de Atribuição</li>
        <li>Operadores de Comparação</li>
        <li>Operadoes de Incrementar/Diminuir</li>
        <li>Operadores Lógicos</li>
        <li>Operadores de String</li>     
        <li>Operadores de Array</li>
        <li>Operadores de Atribuição Condicional</li>
    </ul>
    <hr>
    <h2>Operadores Aritiméticos PHP</h2>
    <p>Os operadores aritiméticos PHP são usados com valores numéricos para executarem operações aritiméticas comuns, como adição, subtração, multiplicação, etc.</p>
    
    <table>
        <tr>
        <th>Operador</th>
        <th>Nome</th>
        <th>Exemplo</th>
        <th>Resutado</th>
        </tr>

        <tr>
            <td>+</td>
            <td>Adição</td>
            <td>$x + $y</td>
            <td>Soma de $x e $y</td>
        </tr>

        <tr>
            <td>-</td>
            <td>Subtração</td>
            <td>$x - $y</td>
            <td>Diferença de $x e $y</td>
        </tr>

        <tr>
            <td>*</td>
            <td>Multiplicação</td>
            <td>$x * $y</td>
            <td>Produto de $x e $y</td>
        </tr>
        
        <tr>
            <td>/</td>
            <td>Divisão</td>
            <td>$x / $y</td>
            <td>Quociente de $x e $y</td>
        </tr>
        
        <tr>
            <td>%</td>
            <td>Módulo</td>
            <td>$x % $y</td>
            <td>Restante de $x dividido por $y</td>
        </tr>
        
        <tr>
            <td>**</td>
            <td>Exponencial</td>
            <td>$x ** $y</td>
            <td>Resultado de elevar $x para a potência de $y</td>
        </tr>
    </table>
    <hr>

    <h2>Atribuição de Operadores PHP</h2>
    <p>A Atribuição de operadores PHP é usada com valores numéricos para escrever um valor para a variável.</p>

    <p>O operador de atribuição básica no PHP é " = ". Isso significa que o operando esquerdo é definido com valor da expressão de atribuição à direita .</p>

    <table>
        <tr>
        <th>Atribuição</th>
        <th>Mesmo que...</th>
        <th>Descrição</th>
       
        </tr>

        <tr>
            <td>x = y</td>
            <td>x = y</td>
            <td>O operando a esquerda é definido com o valor da expressão a direita</td>
        
        </tr>

        <tr>
            <td>x += y</td>
            <td>x = x + y</td>
            <td>Adição</td>
        
        </tr>

        <tr>
            <td>x -= y</td>
            <td>x = x - y</td>
            <td>Subtração</td>
            
        </tr>
        
        <tr>
            <td>x *= y</td>
            <td>x = x * y</td>
            <td>Multiplicação</td>
           
        </tr>
        
        <tr>
            <td>x /= y</td>
            <td>x = x / y</td>
            <td>Divisão</td>
           
        </tr>
        
        <tr>
            <td>**</td>
            <td>Exponencial</td>
            <td>$x ** $y</td>
        
        </tr>

        <tr>
            <td>x %= y</td>
            <td>x = x % y</td>
            <td>Módulo</td>
        
        </tr>
    </table>
    <br><br>

    <div style="width: 90%;" class="example">
        <h3>Exemplo</h3>
        <div class="example0">
        <table>

        <tr>
        <td>$x = 10;  <br>
        echo $x; <br><br>
        $x = 10</td>
        </tr>
        
        <tr>
        <td>$x = 20;  <br>   
        $x += 100;<br>
        echo $x;<br><br>
        $x = 120</td>
        </tr>

        <tr>
        <td>
        $x = 50;<br>
        $x -= 30;<br>
        echo $x;<br><br>
        $x = 20
        </td>
        </tr>

        <tr>
        <td>$x = 5;<br>
        $x *= 6;<br>
        echo $x;<br><br>
        $x = 30
        </td>
        </tr>

        
        <tr>
        <td>
        $x = 10;<br>
        $x /= 5;<br>
        echo $x;<br><br>
        $x = 2
        </td>
        </tr>

        <tr>
        <td>
        $x = 15;<br>
        $x %= 4;<br>
        echo $x;<br><br>
        $x = 3
        </td>
        </tr>

        </table>
        
        </div>
    </div>


    </div>
</body>
</html>