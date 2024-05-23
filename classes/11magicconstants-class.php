<?php error_reporting(0);
ini_set('display_errors', 0); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link href="../css/style-classes.css" rel="stylesheet">
    <link rel="icon" href="../css/img/ABREUS - Upscale w logo1.png">
    <title>Magic Constants</title>
</head>

<body>
    <div class="main">
        <a href="../php-class.php" style="color:red">Voltar</a>
        <h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <br>
        <hr>
        <br>
        <h1>Constantes Mágicas PHP</h1>
        <hr>
        <h2>Constantes predefinidas PHP</h2>
        <p>PHP tem nove constantes predefinidas que altera o valor dependendo onde eles são usados, e aliás eles são chamados "magic constants" ("constantes mágicas").</p>
        <p>Essas constantes mágicas são escritas com sublinhado duplo no começo e no final, exceto para o ClassName::class constant.</p>

        <br>
        <hr><br>
        <div class="example">
        <h2>Magic Constants</h2>
        <div class="example0">
        <p>Aqui estão as constantes mágicas, com descrições e exemplos</p>
        <table>
            <tr>
                <th>Constantes</th>
                <th>Descrição</th>
            </tr>

            <tr>
                <td>__CLASS__</td>
                <td>Se usado dentro de uma classe, o nome da classe é retornado.</td>
            </tr>

            <tr>
                <td>__DIR__</td>
                <td>O diretório do arquivo.</td>
            </tr>

            <tr>
                <td>__FILE__</td>
                <td>O nome do arquivo incluindo o caminho completo.</td>
            </tr>

            <tr>
                <td>__FUNCTION__</td>
                <td>Se dentro da função, o nome da função é retornado.</td>
            </tr>

            <tr>
                <td>__LINE__</td>
                <td>O número da linha atual.</td>
            </tr>

            <tr>
                <td>__METHOD__</td>
                <td>Se usando dentro da função que pertence a uma classe, ambos nomes da função e classe são retornados.</td>
            </tr>

            <tr>
                <td>__NAMESPACE__</td>
                <td>Se usado dentro de um espaço de nome (namespace), o nome do namespace será retornado.</td>
            </tr>

            <tr>
                <td>__TRAIT__</td>
                <td>Se usando dentro de uma característica(trait), o nome da (trait) será retornado.</td>
            </tr>

            <tr>
                <td>ClassName::class</td>
                <td>Retorna o nome da classe especificada e o nome do namespace, se houver.</td>
            </tr>

        </table>
        </div>
        </div>
        <br><hr><br>

        <div class="yexample"><strong>Nota: <br></strong> As constantes magicas são case-insensitive, significando que <span class="var">__LINE__</span> retorna o mesmo que <span class="var">__line__</span>.</div>

    </div>
</body>

</html>