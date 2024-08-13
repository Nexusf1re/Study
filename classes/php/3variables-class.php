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
    <title>Variables</title>
</head>

</style>

<body>

    <div class="main">
    <?php echo $voltar;?>

        <h3 style="color: brown;">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <hr>
        <h1>Variables Class</h1>
        <hr>
        <p class="bold">Variáveis são conteineres para guardar informações</p>
        <hr>
        <h3>Criando e (declarando) variáveis PHP</h3>
        <p>No php, as variáveis começam com sinal, seguido do nome da variável: <span style="color: red; background-color:gray; padding: 2px; border-radius: 12px;"> $</span> </p>

        <div class="example">
            <h3>Exemplo</h3>
            <div class="example1">
                <p><span class="var">$x</span> = <span class="var1"> 5</span>; <br>
                    <span class="var">$y </span>= <span class="var1">jhon</span>;
                </p>

                <p>No exemplo acima, a variável irá manter o valor : <br> $x->5 e $y->Jhon </p>

                <p>Nota: Quando você atribui o valor de <span class="var">texto(string)</span> a uma variável, coloque aspas em volta da mesma.</p>

                <p>Ao contrário das outras linguagens de programação, o PHP não tem comando para declarar a variável. Ela é criada no momento em que você atribui o valor para ela. </p>

            </div>
        </div>

        <h3 class="yexample">Imagine VARIÁVEIS como contêineres para armazenar dados</h3>
        <hr>
        <h2>Variáveis PHP</h2>
        <p>-Uma variável pode ter um nome curto ou mais descritivo (<span style="color: #eb7155;">$x, $y, $idade, $nome_completo, $volume_total</span>)</p>
        <h4>Regras para variáveis PHP</h4>
        <ul>
            <li>Uma variável começa com o sinal <span style="color: #eb7155;">$</span></li>
        </ul>
        <ul>
            <li>O nome de uma variável precisa começar com uma letra ou um caracter sublinhado</li>
        </ul>
        <ul>
            <li>Uma variável não pode começar com um número</li>
        </ul>
        <ul>
            <li>Um nome da variável pode apenas conter caracteres alpha-numéricos e sublinhados (A-z, 0-9, and _ )</li>
        </ul>
        <ul>
            <li>Nomes de variáveis são case-sensitives, ou seja ($idade é diferente de $IDADE)</li>
        </ul>

        <h3 class="yexample">Lembre-se que nome de variáveis PHP são case-sensitives</h3>
        <hr>
        <h2>Saídas de Variáveis</h2>
        <p>A declaração PHP é muito usada para saída de dados na tela: <span class="var">echo</span></p>
        <p>O exemplo a seguir irá mostrar como fazer uma saída de texto e uma variável:</p>

        <div class="example">
            <h3>Exemplo</h3>
            <div class="example1">
                <span class="var">$txt </span> = "Jesus Christ"; <br>
                echo "I love ".<span class="var">$txt</span>."!";<br>
                Saída:

                <?php $txt = "Jesus Christ";
                echo "I love " . $txt . "!";
                ?>
                </p>
            </div>
        </div>

        <p>O exemplo a seguir produzirá a soma de duas variáveis</p>

        <div class="example">
            <h3>Exemplo</h3>
            <div class="example1">
                <p> <span class="var">$x</span> = <span class="var1">5</span>; <br>
                    <span class="var">$y</span> = <span class="var1">4</span>; <br>
                    echo <span class="var">$x</span> + <span class="var">$y</span>; <br>
                    <?php $x = 5;
                    $y = 4;
                    echo $x + $y;
                    ?>
                </p>
            </div>
        </div>
        <p><strong>Note: </strong> Você irá aprender sobre a declaração <span class="var">echo</span> e como produzir dados na tela no <span style="text-decoration: underline;">Capítulo Echo PHP/Print</span></p>
        <hr>
        <h1>PHP é uma linguagem pouco tipada</h1>
        <p>No exemplo acima , note que não precisamos dizer para o PHP qual tipo de dado é a variável.
            <br><br>
            O PHP associa automaticamente o tipo do dado para a variável, dependendo do seu valor.Como os dados não são definidos em sentido estrito (strict sense), você pode fazer coisas como adicionar string para um número inteiro sem causar erro. <br><br>
            No PHP 7, tipo de declarações foram adicionadas.Isso fornece a opção de especificar o tipo de dado esperado quando declarado a função, ao ativar o requerimento estrito, irá enviar um "Erro Fatal" ou uma incompatibilidade de digitação. <br>
            Você irá aprender mais sobre requerimentos <span class="var">estritos</span> e não <span class="var">não-estritos</span>, e tipo de declarações de dados no capítulo <span style="text-decoration: underline;">PHP Functions</span>.
        </p>
        <hr>
        <h1>Tipos de Variáveis</h1>
        <p>PHP não tem comando para declarar variável, e o tipo de dado depende do valor da variável.</p>

        <div class="example">
            <h3>Exemplo</h3>
            <div class="example1">
                <p>
                    <?php $x = 5;
                    $y = "Abreu"; ?>
                    <span class="var">$x</span> = <span class="var1">5</span>; // $x é inteiro <br>
                    <span class="var">$y</span> = <span class="var1">"Abreu"</span>; // $y é string('Texto') <br><br>

                    echo $x;<br>
                    <?php echo "Saída = " . $x; ?> <br><br>
                    echo $y;<br>
                    <?php echo 'Saída = ' . $y; ?>
                </p>
            </div>
        </div>

        <p><strong>PHP suporta os seguintes tipos de dados:</strong></p>
        <ul>
            <li>String(texto)</li>
            <li>Inteiro(int)</li>
            <li>Flutuante(float)</li>
            <li>Booleano(Boolean)</li>
            <li>Arranjo(array)</li>
            <li>Objeto(Object)</li>
            <li>NULO(Null)</li>
            <li>Recurso(Resource)</li>
        </ul>
        <hr>
        <h2>Obtenha o tipo</h2>
        <p>Para obter o tipo da variável, use a função <span class="var">var_dump()</span>.</p>
        <div class="example">
            <h3>Exemplo</h3>
            <p>A função <span class="var">var_dump()</span> retorna o tipo de dado e o valor.</p>
            <div class="example1">
                <p>
                    <span class="var">$x </span>= 5; <br>
                    <span class="var">$z </span>= "Nexus"; <br> <br>
                    <span class="var">var_dump</span>(<span class="var">$x</span>) <br>
                    <?php $x = 5;
                    var_dump($x); ?> <br> <br>
                    <span class="var">var_dump</span>(<span class="var">$z</span>);
                    <?php $z = 'Nexus';
                    echo ('<br>');
                    var_dump($z);
                    ?>
                </p>
            </div>
        </div>
        <br>
        <div class="example">
            <h3> Exemplo</h3>
            <p>Veja o que var_dump() retorna para outros dados</p>
            <div class="example1">
                <span class="var">var_dump</span>(<span class="var2">5</span>);<br>
                <span class="var">var_dump</span>(<span class="var1">"Nexus"</span>);<br>
                <span class="var">var_dump</span>(<span class="var2">3.14</span>);<br>
                <span class="var">var_dump</span>(<span class="var2">True</span>);<br>
                <span class="var">var_dump</span>([<span class="var2">2, 3 ,56</span>]);<br>
                <span class="var">var_dump</span>(<span class="var2">NULL</span>);<br><br>

                <?php
                var_dump(5);
                echo ('<br><br>');
                var_dump("Nexus");
                echo ('<br><br>');
                var_dump(3.14);
                echo ('<br><br>');
                var_dump(True);
                echo ('<br><br>');
                var_dump([2, 3, 56]);
                echo ('<br><br>');
                var_dump(NULL);
                ?>

            </div>
        </div>
        <hr>
        <h2>Atribuir String para uma Variável</h2>
        <p>A atribuição de uma string para uma variável é feito com o nome da variável seguido por um sinal de igual e da String</p>

        <div class="example">
            <h3>Exemplo</h3>
            <div class="example1">
                <span class="var">$x</span> = <span class="var1">"Nexus"</span>; <br>
                <span style="color:blue">echo</span> <span class="var">$x</span>;<br>
                <?php $x = "Nexus";
                echo "Saída: " . $x; ?>
            </div>
        </div>

        <p>Variáveis String podem ser declaradas tanto com aspas simples quanto com aspas duplas, mas você deve ficar atento as diferenças. Aprenda mais sobre as difereças no <span style="text-decoration: underline;">Capítulo Strings PHP</span></p>
        <hr>

        <h2>Atribuir valores múltiplos</h2>
        <p>Você pode atribuir o mesmo valor para múltiplas variáveis em uma linha:</p>
        <div class="example">
            <h2>Exemplo</h2>
            <p>Todas as três variáveis recebem o valor "God is good":</p>
            <div class="example1">
                <?php $x = $y = $z = "God is good"; ?>
                <span class="var">$x</span> = <span class="var">$y</span> = <span class="var">$z</span> = <span class="var1">"God is good"</span>; <br><br>
                <?php echo "Saída: " . $x; ?>
            </div>
        </div>

        <h1>PHP Escopo de Variáveis</h1>
        <p>No PHP, variáveis podem ser declaradas em qualquer lugar do script. <br><br>
            O escopo de variáveis é a parte do script onde a variável pode ser referenciada/usada. <br><br>
            PHP tem três diferentes escopos de variáveis:
        <ul>
            <li>local</li>
            <li>global</li>
            <li>static</li>
        </ul>
        <hr>

        <h2>Escopo Global e Local</h2>
        <p>Uma variável declarada fora da função tem o escopo Global e pode ser acessada apenas fora da função.</p>
        <div class="example">
            <h2>Exemplo</h2>
            <div class="box">
                <p>Variável com escopo Global:</p>
                <div class="example1">

                    <span class="var">$x</span> = <span class="var2">5</span>; //escopo global <br><br>
                    <span class="var3">function</span> <span class="var">myTest</span>() {<br>
                    //usando x dentro dessa função irá gerar um erro. <br>
                    <span class="var3">echo</span> <span class="var1">&lt;p&gtVariavel x dentro da função é: <span class="var">$x</span> &lt;/p&gt"</span>;
                    <br> } <?php $x = 10;
                            function myTest()
                            {
                                echo "<p> Variável x dentro da função é: </p>";
                            }
                            myTest();
                            ?>
                    <span class="var">myTest</span>(); <br><br><br>
                    <span class="var3">echo</span> <span class="var1">"Variável x fora da função é: $x &lt;/p&gt"</span>;<br>
                    <?php
                    echo "Variável x fora da função é: $x;"
                    ?>

                    <p style="text-decoration: underline;">Neste exemplo a variável x dentro da função causa erro, pois a variável esta como escopo Global (fora da função).</p>
                </div>

            </div>
        </div>
        <hr>
        <p class="marg"><strong>A variável declarada dentro da função tem o ESCOPO LOCAL e só pode ser acessado dentro da função.</strong></p>
      
       

        <div class="example">
            <h3 style>Exemplo</h3>
            <p>Variável com o escopo local:</p>
            <div class="example1">
  
                    <span class="var3">function</span> <span class="var">myTest</span>() {<br>
                        <span class="var">$t</span> = <span class="var2">5</span>; //escopo local <br><br>
                   
                    <span class="var3">echo</span> <span class="var1">&lt;p&gtVariavel x dentro da função é: <span class="var">$t</span> &lt;/p&gt"</span>;<br>
                    <?php $t = 5; echo "Variável t dentro da função é: $t;" ?>
                    <br> } <br>
                    <span class="var">myTest</span>(); <br><br><br>

                    <span class="var3">echo</span> <span class="var1">"Variável x fora da função é: <span class="var">$t</span> &lt;/p&gt"</span>;<br>
                    //usando x fora dessa função irá gerar um erro. <br><br>
                    <?php
                    echo "Variável t fora da função é: ;"
                    ?>
                    
            </div>
        </div>
        <p class="yexample">Você pode ter variáveis com o mesmo nome em funções diferentes, porque variáveis locais são reconhecidas pela função no qual elas são declaradas.</p>
       <hr>
       <h2>PHP A palavra-chave Global</h2>
        <p>A palavra-chave <span class="var">global</span> é usada para acessar variáveis globais de dentro de uma função. <br><br> Para fazer isso, use a palavra-chave <span class="var">global</span> antes das variáveis (dentro da função): </p> 

        <div class="example">
            <h3>Exemplo</h3>
            <div class="example1">
               <img src="../css/img/example2-1.png" alt="example2-1">
                        

            </div>
        </div>

        <p>PHP também armazena todas variáveis globais em um arranjo(array) chamado <span class="var">$GLOBALS[index]</span>. O <span class="var">index</span> guarda o nome da variável. Esse arranjo também é acessível dentro das funções e pode ser usado para atualizar as variáveis globais diretamente.  <br><br>
        O exemplo acima pode ser reescrito como isso:
     </p>
     <div class="example">
        
        <img src="../css/img/example2.png" alt="example2"> <br>
        <div class="example0">
            <?php 
            echo("Resultado: ");
            echo ('<br>');
            $x = 5;
            $y = 10;

            function myTest1(){
                   $GLOBALS['y'] = $GLOBALS['x'] +$GLOBALS['y'];
                
            }
            myTest1();
            echo $y;
            
            ?>
        </div>
     </div>
     <hr> 
     <h2>PHP A palavra-chave estática</h2>
     <p>Normalmente, quando uma função é completada/executada. Entretanto, algumas vezes nós queremos que a variável local NÃO seja deletada.Nós precisamos para um uso futuro. <br><br> Para fazer isso, usamos a palavra-chave quando você primeiro declara a variável: <span class="var">static</span></p>
    
     <div class="example">
        <img src="../css//img/example2-2.png" alt="example2-2"> <br>
    <div class="example0">
        <?php 
        function myTest2(){
            static $x = 0;
            echo $x;
            $x++;
        }
        echo('Resultado:');
        echo ('<br>');
        myTest2();
        echo ('<br>');
        myTest2();
        echo ('<br>');
        myTest2();

        ?>
    </div>
    
     </div>
     <p>Então, cada vez que a função é chamada, a variável ainda irá ter a informação contida da última vez que a função foi chamada/executada. <br><br>
    <strong>Nota: </strong> A Variável ainda é local para a função.
    </p>



    </div>
</body>

</html>