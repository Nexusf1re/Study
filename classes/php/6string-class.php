<?php error_reporting(0);
ini_set('display_errors', 0);

include('../../config.php');

$guide = '<p>Execução código PHP ↓</p>';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=JetBrains Mono' rel='stylesheet'>
    <link rel="icon" href="../../css/img/ABREUS - Upscale w logo1.png">
    <link href="../../css/style-classes.css" rel="stylesheet">
    <title>STRINGS</title>
</head>

<body>
    <div class="main">
    <?php echo $voltar;?>
        <h3 style="color: brown;">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <hr>

        <h1>Strings PHP</h1>
        <hr>
        <p>Uma string é uma sequencia de caracteres, como "Jesus Christ is the way and the truth!".</p>
        <hr>
        <h2>Strings</h2>
        <p>Strings no PHP são envolvidas por aspas duplas ou aspas simples </p>
        <div class="example">
            <h3>Example</h3>
            <div class="example0">
                <span class="var3">echo</span> <span class="var1">"Hello"</span>; <br>
                <span class="var3">echo</span> <span class="var1">'Hello'</span>;
            </div>
        </div>
        <br>
        <div class="yexample">
            <strong>Nota:</strong> Não há grandes diferenças entre aspas duplas e aspas simples no PHP.Aspas duplas processa caracteres especiais, aspas simples não.
        </div>
        <br>

        <hr>

        <h2>Aspas duplas ou simples?</h2>
        <p>Você pode usar aspas duplas ou simples, mas você deve se atentar nas diferenças entre as duas.</p>
        <p>Strings em aspas duplas executam ação em caracteres especiais.</p>
        <p>Por exemplo quando há variável em uma string, ele retorna o valor da variável:</p>
        <div class="example">
            <h3>Exemplo</h3>
            <p>String em aspas dupla literalmente executam operações para caracteres especiais:</p>

            <div class="example0">
                <span class="var">$x</span> = <span class="var1">"Jhon"</span>;<br>
                <span class="var3">echo</span> <span class="var1">"Hello $x"</span>;
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php
                $x = "Jhon";
                echo "Hello $x";
                ?>
            </div>
        </div>
        <p>Stings em aspas simples não executam tais acções, ele retorna a string como foi escrita, com o nome da variável:</p>
        <div class="example">
            <h3>Exemplo</h3>
            <div class="example0">
                <p>Aspas simples retorna literalmente o que contem na string:</p>
                <span class="var">$x</span> = <span class="var1">"Jhon"</span>;<br>
                <span class="var3">echo</span> <span class="var1">'Hello $x'</span>;
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php
                $x = "Jhon";
                echo 'Hello $x';
                ?>
            </div>
        </div>
        <br>

        <hr>

        <h2>String Length(tamanho)</h2>
        <p>A função PHP <span class="var">strlen()</span> retorna o tamanho da string.</p>
        <div class="example">
            <h3>Example</h3>
            <p>Retorna o tamnho da string "Hellow World!":</p>
            <div class="example0">
                <span class="var3">echo</span>
                <spn class="var">strlen</spn>( <span class="var1">"Hello World!"</span>);
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php
                echo strlen("Hello World!");
                ?>
            </div>
        </div>

        <hr>

        <h2>Word Count</h2>
        <p>A função PHP <span class="var">str_word_count()</span> conta o número de palavras na string.</p>
        <div class="example">
            <h3>Exemplo</h3>
            <p>Conta o número de palavras na String "Hello World!":</p>
            <div class="example0">
                <span class="var3">echo</span> <span class="var">str_word_count </span> ( <span class="var1"> "Hellow World!" </span>);
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php
                echo str_word_count("Hello World!");
                ?>
            </div>
        </div>

        <hr>

        <h2>Procure por texto dentro da String</h2>
        <p>A função PHP <span class="var">strpos()</span> procura por um texto específico dentro da string.</p>
        <p>Se a correspondecia for encontrada, a função retorna a posição do caractere da primeira correspondecia.Se nenhuma correspondecia for encontrada, irá retornar FALSE.</p>
        <div class="example">
            <h3>Exemplo</h3>
            <p>Procura pelo texto "world" na string "Hello world!":</p>
            <div class="example0">
                <span class="var3">echo</span> <span class="var">strpos</span>(<span class="var1">"Hello world!", "world"</span>);
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php echo strpos("Hello world!", "world"); ?>
            </div>
        </div>
        <p><strong>Nota:</strong>A primeira posição do caractere na string é 0 (não 1).</p>

        <hr>

        <h2>Referência Completa String PHP</h2>
        <p>Para uma referência completa de todas funções string, vá para nossa completa <a target="_blank" href="https://www.w3schools.com/php/php_ref_string.asp">Referência String PHP</a></p>
        <p>A referência da string PHP contém a descrição e o exemplo de uso, para cada funcção!</p>

        <hr>

        <div class="example">
            <h2>Exercício</h2>
            <p>Obtenha o tamanho da string "Hello World!".</p>

            <div style="padding: 15px;" class="example0">

                echo <input type="text" id="strlen" style="width: 4rem;"> ("Hello World!"); <br><br>
                <button class="answer" type="submit" onclick="validarResposta()">Enviar Resposta</button>
                <div id="mensagem"></div>
            </div>

            <script>
                function validarResposta() {
                    var valor = document.getElementById('strlen').value;
                    var mensagemElement = document.getElementById('mensagem');

                    if (valor === 'strlen') {
                        mensagemElement.textContent = 'Resposta Correta';
                        mensagemElement.className = 'resposta-correta';
                    } else {
                        mensagemElement.textContent = 'Resposta Errada';
                        mensagemElement.className = 'resposta-incorreta';
                    }
                }
            </script>
        </div>
        <br><br>

        <hr>

        <h1>PHP - Modificar Strings</h1>
        <hr>
        <p>PHP tem um conjunto de funções integradas que você pode usar para modificar strings.</p>

        <hr>

        <h2>Upper Case (Caixa Alta)</h2>
        <div class="example">
            <h3>Exemplo</h3>
            <p>A função <span class="var">strtoupper()</span> retorna a string em caixa alta (maíscula)</p>
            <div class="example0">
                <span class="var">$x</span> = <span class="var1">"God is Good!"</span>; <br>
                <span class="var3">echo</span> <span class="var">strtoupper</span>(<span class="var">$x</span>);
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php
                $x = "God is Good!";
                echo strtoupper($x);

                ?>
            </div>
        </div>

        <br>
        <hr>

        <h2>Lower Case (Caixa Baixa)</h2>
        <div class="example">
            <h3>Exemplo</h3>
            <p>A função <span class="var">strtolower()</span> retorna a string em caixa baixa (minúscula)</p>
            <div class="example0">
                <span class="var">$x</span> = <span class="var1">"The Way of Truth!"</span>; <br>
                <span class="var3">echo</span> <span class="var">strtolower</span>(<span class="var">$x</span>);
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php
                $x = "The Way of Truth!";
                echo strtolower($x);
                ?>
            </div>
        </div>

        <br>       
        <hr>

        <h2>Replace (Substituir) String</h2>
        <p>A função <span class="var">str_replace()</span> substitui alguns caracteres com alguns outros caracteres na String.</p>
        <div class="example">
            <h3>Exemplo</h3>
           <p>Substitui o texto "Truth" com "Salvation";</p>
            <div class="example0">
                <span class="var">$x</span> = <span class="var1">"The Way of Truth!"</span>; <br>
                <span class="var3">echo</span> <span class="var">str_replace</span>(<span class="var1">"Truth"</span>, <span class="var1">"Salvation"</span>, <span class="var">$x</span>);
            </div>
            <?php echo $guide; ?>
            <div class="example0">
                <?php
                $x = "The Way of Truth!";
                echo str_replace("Truth", "Salvation", $x);
                ?>
            </div>
        </div>

        <br>
        <hr>
        <h1>Reverse(reverter) a String</h1>        
        <p>A função PHP <span class="var">strrev()</span> reverte uma string.</p>
        <div class="example">
            <h3>Exemplo</h3>
            <p>Reverte a string "Love Jesus!"</p>
            <div class="example0">
                <span class="var">$x</span> = <span class="var1">"Love Jesus!"</span>; <br>
                <span class="var3">echo</span> <span class="var">strrev</span>(<span class="var">$x</span>);
            </div>
            <?php echo $guide;?>
            <div class="example0">
                <?php 
                    $x = "Love Jesus!";
                    echo strrev($x);
                ?>
            </div>
        </div>

        <br>
        <hr>

        <h2>Remove Whitespace (remover espaço em branco)</h2>
        <p>Espaço em branco é o espaço antes e/ou depois do texto atual, e muitas vezes você quer remover esse espaço.</p>     
        <div class="example">
            <h3>Exemplo</h3>
            <p>O <span class="var">trim()</span> remove qualquer espaço em branco do começo a o fim:</p>
            <div class="example0">
            <span class="var">$x</span> = <span class="var1">" Love Jesus! "</span>; <br>
                <span class="var3">echo</span> <span class="var">trim</span>(<span class="var">$x</span>);
            </div>    
            <?php echo $guide;?>
            <div class="example0">
                <?php 
                $x = " Love Jesus! ";
                echo ("Os espaços em brancos são invisíveis no HTML simples, mas confira a diferença em dois campos de entrada:");
                echo ("<br><br>");
                echo "<input value ='". $x. "'>"; 
                echo ("<br><br>");
                echo "<input value ='". trim($x). "'>"; 
                ?>
            </div>
        </div>   
        
        <br>
        <hr>
        <br>
        <h2>Converter String em Array</h2>
        <p>A função PHP <span class="var">explode()</span> separa a string em array.</p>        
        <p>O primeiro parâmetro da função <span class="var">explode()</span> representa o "separator" ("separador"). O "separator" especifica onde separar a string.</p>
        <div class="yexample"><strong>Nota: </strong> O separador é necessário.</div>        
        <div class="example">
            <h3>Exemplo</h3>
            <p>Separar a string em array. Use o caracter espaço como separador:</p>
            <div class="example0">
                <img src="../../css/img/example5-7.png" alt="example5-7">
            </div>
            <?php echo $guide;?>
            <div class="example0">
                <?php 
                $x = "Hellow World!";
                $y = explode(" ", $x);

                //usa função print_r() para exibir o resultado:
                print_r($y);
                ?>
            </div>
        </div>     
        
        <br>
        <hr>
        <h2>Referência Completa String PHP</h2>
        <p>Para uma referência completa de todas as funções de string, vá para a <a target="_blank" href="https://www.w3schools.com/php/php_ref_string.asp">Referencia String PHP</a> da <a target="_blank" style="color: green;" href="https://www.w3schools.com/">W3Schools</a></p>

        <br>
        <hr>
        <br>
        <h1>PHP - Concatenar Strings</h1>
        <h2>String Concatenation (Concatenação de String)</h2>
        <p></p>



    </div>
</body>

</html>