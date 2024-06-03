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
    <link rel="icon" href="../../css/img/ABREUS - Upscale w logo1.png">
    <link href="../../css/style-classes.css" rel="stylesheet">
    <title>Data Types</title>
</head>

<?php 
$guide = '<p>Execução código PHP ↓</p>';
?>

<body>

    <div class="main">
    <?php echo $voltar;?>

        <h3 style="color: brown;">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
        <hr>
        <h1>Tipos de Dados PHP</h1>
        <hr>
        <h3>Tipos de dados PHP</h3>
        <p>Variáveis podem armazenar diferentes tipos de dados, e diferente tipos dados podem fazer coisas diferentes.</p>

        <p>PHP suporta os seguintes tipos de dados:</p>
        <ul style="line-height: 150%;">
            <li>String</li>
            <li>Inteiro(Integer)</li>
            <li>Flutuante((Float)número de ponto flutuantes - também chamado de duplo(double)</li>
            <li>Boleano(boolean)</li>
            <li>Arranjo(Array)</li>
            <li>Objeto(Object)</li>
            <li>NULO(NULL)</li>
            <li>Recurso(Resource)</li>
        </ul>
        <hr>
        <h1>Obtendo o tipo de dados</h1>
        <p>Você pode obter o tipo de dado de qualquer objeto usando a função <span class="var">var_dump()</span>.</p>
        <div class="example">
            <h3>Exemplo</h3>
            <p>A função <span class="var">var_dump()</span> retorna o tipo de dado e o valor.</p>
            <div class="example0">
                <span class="var">$x</span> = <span class="var2">5</span>;<br>
                <span class="var">var_dump()</span>(<span class="var">$x</span>);
            </div>
            <p>Execução código PHP ↓</p>
            <div class="example0">
                <?php
                $x = 5;
                var_dump($x);

                ?>
            </div>
        </div>
        <hr>
        <h1>String PHP</h1>
        <p>Uma Strig é uma sequência de caracteres, como "Olá Mundo!".</p>
        <p>Uma String pode ser qualquer texto dentro de aspas.Voce pode usar aspas simples ou duplas.</p>

        <div class="example">
            <h3>Exemplo</h3>

            <div class="example0">

                <img src="../../css/img/example5.png" alt="example5">

            </div>
            <p>Execução código PHP ↓</p>
            <div class="example0">
                <?php
                $x = "Olá Mundo!";
                $y = 'Olá Mundo!';

                var_dump($x);
                echo '<br>';
                var_dump($y);

                ?>
            </div>
        </div>
        <hr>
        <h1>Integer (inteiro) PHP</h1>
        <p>Um tipo de dado Inteiro é não decimal entre -2,147,483,648 e 2,147,483,647.</p>
        <p>Regras de Inteiros:</p>
        <ul>
            <li>Um inteiro deve ter pelo menos um dígito.</li>
            <li>Um Inteiro não pode conter ponto decimal</li>
            <li>Um inteiro pode ser tanto positivo quanto negativo</li>
            <li>Inteiros podem ser especificados em: Notação Decimais(base 10), hexadecimal (base 16), Octal(base 8), ou binário (base 2)</li>
        </ul>

        <p>No exemplo a seguir <span class="var">$x</span> é um inteiro.A função PHP <span class="var">var_dump()</span> retorna o tipo de dado e o valor:</p>
        <div class="example">
            <h3>Exemplo</h3>
            <div class="example0">
                <span class="var">$x</span> = <spna class="var2">5985</spna>; <br>
                <span class="var">var_dump</span>(<span class="var">$x</span>);
            </div>
            <p>Execução código PHP ↓</p>
            <div class="example0">
                <?php
                $x = 5985;
                var_dump($x);
                ?>
            </div>
        </div>
        <hr>
        <h1>Float (flutuante) PHP</h1>
        <p>O flutuante(float) (número de ponto flutuante) é um número com ponto decumal ou um número na forma exponecial.</p>
        <p>No exemplo a seguir <span class="var">$x</span> é float.A função php <span class="var">var_dump()</span> retorna o tipo de dado e o valor:</p>
        <div class="example">
            <h3>Exemplo</h3>
            <div class="example0">
                <span class="var">$x</span> = <span class="var2">10.365</span>; <br>
                <span class="var">var_dump</span>(<span class="var">$x</span>);
            </div>
            <p>Execução código PHP ↓</p>

            <div class="example0">
                <?php
                $x = 10.365;
                var_dump($x);
                ?>
            </div>
        </div>
        <hr>
        <h1>Boolean(boleano) PHP</h1>
        <p>O boleano representa dois possíveis estados: Verdadeiro(true) ou Falso(false).</p>
        <div class="example">
            <h3>Exemplo</h3>
            <div class="example0">
                <span class="var">$x</span> = <span class="var2">true</span>; <br>
                <span class="var">var_dump</span>(<span class="var">$x</span>);
            </div>
            <p>Execução código PHP ↓</p>

            <div class="example0">
                <?php
                $x = true;
                var_dump($x);
                ?>
            </div>
            <p>Boleanos são muitos usados em teste condicionais.</p>
            <p>Você irá aprender mais sobre testes condicional no <span style="text-decoration: underline;">Capítulo PHP If...Else</span></p>
        </div>
        <hr>
        <h1>Array(arranjo) PHP</h1>
        <p>Um array armazena valores multiplos e uma variável única.</p>
        <p>No exemplo a seguir <span class="var">$cars</span> é um array.A função PHP <span class="var">var_dump()</span> retorna o tipo e o dado do valor:</p>
        <div class="example">
            <h3>Exemplo</h3>
            <div class="example0">
                <img src="../../css/img/example5-1.png" alt="">
            </div>
            <p>Execução código PHP ↓</p>
            <div class="example0">
                <?php
                $cars = array('BMW', 'Toyota', 'Mclaren');
                var_dump($cars);
                ?>
            </div>
            <p>Você irá aprender muito mais sobre arrays nos próximos capítulos nesse tutorial.</p>
        </div>
        <hr>
        <h1>Object(Objeto) PHP</h1>

        <p>Classes e objetos são dois aspectos principais de programação orientada a objeto. </p>

        <p>A classe é o modelo para objetos, e o objeto é a instancia da classe.</p>

        <p>Quando um objeto individual é criado, ele herda todas as propriedades e os comportamentos da classe, mas cada objeto irá ter diferentes valores para as propriedades.</p>

        <p>Vamos assumir que temos uma classe nomeada <span class="var">Car</span> que pode ter propriedades como modelo, cor, etc.Nós podemos definir variáveis como <span class="var">$model</span>, <span class="var">$color</span> e assim em diante, para guardar os valores da propriedade.</p>

        <p>Quando objetos individuais (BMW, Toyota, Mclaren, etc.) são criados, <span style="color: green;">eles herdam todas propriedades e comportamentos das classes</span>, mas cada objeto terá diferentes valores para as propriedades.</p>

        <p>Se você criar uma função <span class="var">__contruct()</span>, PHP irá automaticamente chamar essa função quando você criar um objeto a partir da classe.</p>

        <div class="example">
            <h3>Exemplo</h3>
            <img src="../../css/img/example5-2.png" alt="example5-2">
            <p>Execução código PHP ↓</p>
            <div class="example0">
                <?php
                class Car
                {
                    public $color;
                    public $model;
                    public function __construct($color, $model)
                    {
                        $this->color = $color;
                        $this->model = $model;
                    }

                    public function message()
                    {
                        return "My car is a" . $this->color . " " . $this->model . "!";
                    }
                }
                $mycar = new Car('red', 'Volvo');
                var_dump($mycar);
                ?>
            </div>
            <p>Não se preocupe se você não entendeu a sintaxe do Objeto PHP, você irá aprender mais sobre isso no <span style="text-decoration: underline;"> Capítulo PHP Classes/Objects</span></p>
        </div>
        <hr>
        <h1>Valor NULO(Null) PHP</h1>
        <p>NULL(nulo) é um tipo de dado especial no qual pode haver apenas um valor: NULL.</p>
        <p>Uma variável do dados tipo NULL é uma variável que não tem valor atribuido a ele.</p>        
        <p><strong>Dica:</strong> se a variável é criada sem valor, ela automaticamente atribui o valor NULL.</p>
        <p>Variáveis podem também serem esvaziadas configuramdo o valor como NULL.</p>
        <div class="example">
            <h3>Exemplo</h3>
            <div class="example0">
                <img src="../../css/img/example5-3.png" alt="example5-3">
            </div>
             <?php echo $guide;?>
            <div class="example0"><?php 
            $x = 'Hello World!';
            $x = null;
            var_dump($x);
            ?>
            </div>
        </div>
        <hr>
        <h1>Mudar o tipo de dado</h1>
        <p>se você atribuir um valor inteiro para um variável, o tipo irá automaticamente ser um inteiro.</p>
        <p>Se você atribuir uma string para a mesma variável, o tipo irá mudar para string:</p>
        <div class="example">
            <h3>Exemplo</h3>
            <div class="example0">
                <img src="../../css/img/example5-4.png" alt="example5-4">
            </div>
            <?php echo $guide;?>
            <div class="example0">
                <?php 
                $x = 5;
                var_dump($x);
                echo '<br>';
                $x = 'Hello';
                var_dump($x);
                ?>
            </div>
        </div>
                <p>Se você quiser mudar o tipo de dado de uma variável existente, mas não mundando o valor, você pode usar a transmissão(<strong>casting</strong>).</p>
                <p>Casting permite você mudar o tipo do dado em variáveis:</p>  
                <div class="example">
                    <h3>Exemplo</h3>
                    <div class="example0">
                        <img src="../../css/img/example5-5.png" alt="example5-5">
                    </div>
                    <?php echo $guide;?>
                    <div class="example0">
                        <?php 
                        $x = 5;
                        $x = (string) $x;
                        var_dump($x);
                        ?>
                    </div>
                </div>
                <p>Você irá aprender mais sobre <strong>casting</strong> no <span style="text-decoration: underline;"> Capítulo PHP Casting </span></p>
                <hr>
                <h1>Resource(recurso) PHP</h1>
                <p>O tipo de recurso especial não é um tipo de dado real.Ele é um armazenamento de uma referencia a funções e recursos externos ao PHP.</p>
                <p>Um exemplo comum de uso de tipo de dados de recurso é o chamado de banco de dados</p>
                <p>Nós não iremos falar sobre tipos de recursos aqui, pois esse é um tema avançado.</p>
    </div>
</body>

</html>