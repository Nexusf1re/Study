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
        <img src="../../css/img/example6.png" alt="">
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
        <br>

        <button onclick="document.getElementById('alter').style.fontSize = '35px';">Alterar fonte</button>

        <p id="alter"> God is good</p>

    </div>
    <br>
    <div class="example0">
        <h3>JavaScript mostrar elementos HTML e vice versa</h3>
        <p>Revelar elementos HTML escondidos pode ser feito alterando o estilo <span class="var">display</span></p>
        <img src="../../css/img/example6.2.png" alt="">
        <br>
        <button onclick="document.getElementById('altera').style.display = 'block';">Mostrar Elemento</button>

        <p style="display: none;" id="altera">God is good</p>
    </div>
    <br>
    <div style="display: flex; gap:10px; justify-content:center; border-radius:8px; font-size: 20px;">
        <button id="showtip">Mostrar curiosidade</button>
        <button id="hidetip">Esconder curiosidade</button>
    </div>
    <br><br>

    <div id="tip" class="example0">
        <div class="tip-content1">
        <h3>O Objeto document.</h3>
        <p>1. Definição e função: </p>
        <ul>
            <li>O objeto `document` é uma propriedade do objeto global `window` em navegadores web.</li>
            <li>Representa a página HTML carregada no navegador e permite que o JavaScript interaja com o conteúdo dessa página.</li>
        </ul>
        <p>2. Parte do DOM(Document Object Model)</p>
        <ul>
            <li>O `document` faz parte do DOM, uma interface de programação para documentos HTML e XML</li>
            <li>O DOM representa a estrutura do documento como uma árvore de nós, onde cada elemento HTML é um nó.</li>
            <li>Permite que scripts atualizem o conteúdo, a estrutura e o estilo de um documento enquanto ele é exibido.</li>
        </ul>
        <p>3. Acesso a ELementos</p>
        <ul>
            <li>Usamos `document.` para acessar elementos HTML específicos dentro da página.</li>
            <li>Métodos comuns incluem:</li>
            <hr>
            <li>document. getElementById ("id") : Seleciona um elemento pelo seu ID.</li>
            <li>document. getElementsByClassName ("className"): Seleciona todos os elementos com uma classe específica.</li>
            <li>document. getElementsByTagName ("tagName"): Seleciona todos os elementos de um tipo específico de tag.</li>
            <li>document. querySelector ("selector"): Seleciona o primeiro elemento que corresponde a um seletor CSS especificado.</li>
            <li>document. querySelectorAll ("selector"): Seleciona todos os elementos que correspondem a um seletor CSS especificado.</li>
            <hr>
        </ul>
        <p>4. Manipulação de Conteúdo: </p>
        <ul>
            <li>Depois de acessar um elemento, podemos usar várias propriedes e métodos para manipular seu conteúdo ou atributos.</li>
            <li>`innerHTML`: Permite ler ou modificar o HTML interno de um elemento.</li>
            <li>`innerText` ou `textContent`: Permite Ler ou modificar o texto interno de um elemento.</li>
            <a id="difer" style="cursor: pointer; color:blue;">Diferença entre "innerHTML", "innerText" e "textContent"</a>
        </ul>


        <div id="difere">
            <div class="tip-content">
                <span class="close">&times;</span>
                <p>A diferença está no retorno deles.
                   <ul>
                    <li>innerText -> Retorna somente o texto, sem formatações ou elementos html.</li>
                    <li>innerHtml -> Retorna o texto, COM formatações e COM elementos html.</li>
                    <li>textContent -> Retorna o text COM formatações, mas sem os elementos html.</li>
                   </ul>
            </div>
        </div>

        </div>
    </div>

    <script src="script/script1.js"></script>




    <script>
        var btn1 = document.getElementById('hidetip');
        var btn = document.getElementById('showtip');
        var tip = document.getElementById('tip');

        btn.onclick = function() {
            tip.style.display = "block";
        }

        btn1.onclick = function() {
            tip.style.display = "none";
        }
    </script>

</div>



</div>
</body>

</html>