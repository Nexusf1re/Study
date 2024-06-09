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
<title>Intro Git</title>
</head>

<body>
<div class="main">
<?php echo $voltar;?>
<h3 style="color: brown">Para revisar o estudo é necessário acompanhar o código fonte juntamente com a página php</h3>
<hr>
<h1>Introdução Git</h1>
<hr>
<h2>Instalação do git no windows</h2>
<p>Para instalar o git no windows há uma forma rápida e fácil usando o comando "winget" no prompt de comando "cmd"</p>
<ul>
    <li>Abra o prompt de comando como administrador</li>
    <li>Digite o seguinte comando ("<span class="var1" >winget</span> install git.git")</li>
    <li>Após isso aguarde baixar os pacotes de instalação</li>
    <li>Ao término do download irá começar a instalar automaticamente, apenas prossiga com a instalação normalmente.</li>
</ul>
<hr>    
<h2>Comandos Básicos Git</h2>
<p>Comandos básicos para trabalhar com o git</p>

<p class="yexample">Para dizer para o Git quem você é, você precisará definir seu usuário e email.
Essas informações serão usadas quando você fizer um commit
</p>
<br>
<div class="example">
    <h3 tabindex="0" id="ex">Configurar Nome e Email</h3>
    <p>É interessante se registrar no <a style="color: greenyellow;" target="_blank" href="https://www.github.com">Github</a> antes de começar a usar o Git</p>
    <div class="example1">
    <p> <span class="var1">git</span> config --global user.name "nome-teste"</p> 
    <p> <span class="var1">git</span> config --global user.email "emailteste@gmail.com"</p> 
    </div>
</div>
<br>
<div  class="example">
    <h3>Lista de comandos básicos mais utilizados ao trabalhar com versionamento em Git</h3>
    <ul style="margin-top: 5px;">
        <li><span style="cursor: pointer; font-weight: bold;" onclick="document.getElementById('ex').focus();" class="var">git config: </span>Este é o primeiro comando a ser executado após instalar o Git. Ele possibilita configurar seu nome e endereço de email que ficará vinculado às alterações.
        <li class="innerLi">
        $ git config --global user.name "Nome do usuário"
        </li>
        <li class="innerLi">
        $ git config --global user.email "seu@email.com"
        </li>
    </li>

        <li><span class="var">git init:</span> Inicia ou cria um repositório
        <li class="innerLi">
            $ git init
        </li>
      </li>

        <li><span class="var">git status: </span>Permite visualizar o estado do repositório.
        <li class="innerLi">
            $ git status
        </li>
        </li>

        <li><span class="var">git add: </span>Prepara o conteúdo para o próximo commit
        <li class="innerLi">
            $git add . ("adiciona todos arquivos da pasta")
        </li>
        <li class="innerLi">
            $git add nome_do_arquivo
        </li>
        </li>

        <li><span class="var">git commit:</span> Salva o conteúdo atual junto com uma mensagem de registro do usuário que descreve as alterações.
        <li class="innerLi">
            $ git commit -m "Mensagem descritiva do commit"
        </li>
        </li>
        
        <li><span class="var">git clone:</span> Clona um repositório existente
        <li class="innerLi">
            $ git clone [url]
        </li>
        </li>

        <li><span class="var">git branch:</span>  Uma branch nada mais é do que uma ramificação dentro do repositório. Este comando pode ser utilizado de diversas maneiras.
        <li class="innerLi">
            $  git branch // Mostra as branches existentes em um repositório
        </li>
        <li class="innerLi">
            $  git branch nome_da_branch // Cria uma nova branch
        </li>
        <li class="innerLi">
           $ git branch -M nome_da_branch // Renomeia a branch atual
        </li>
        </li>

        <li><span class="var">git log:</span> Exibe um histórico de commits. Este comando pode ser utilizado de diversas formas.
        <li class="innerLi">
            $ git log
        </li>
        <li class="innerLi">
            $ git log --oneline
        </li>
        </li>

        <li><span class="var">git remote:</span> Exibe o repositório remoto.
        <li class="innerLi">
            $ git remote
        </li>
        <li class="innerLi">
            $ git remote -v
        </li>
        </li>

        <li><span class="var">git pull:</span> Baixa o conteúdo do repositório remoto, atualizando automaticamente o repositório local.
        <li class="innerLi">
            $ git pull
        </li>
        </li>

        <li><span class="var">git push:</span>  Envia o conteúdo do repositório local, atualizando automaticamente o repositório remoto.
        <li class="innerLi">
            $ git push
        </li>
        </li>
    </ul>
  


</div>
</body>
</html>