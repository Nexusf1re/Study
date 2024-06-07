<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1 JS</title>
</head>
<body>
    <h2 id="JS">Bianca ama o Matteus! </h2>

    <h3 id="JS1"></h3>

  <script>
    function alterar(){

        document.getElementById('JS1').innerHTML = "Teste função"
    
    }
  </script>

  <button onclick="alterar()">Teste funcao</button>

  <script>
    document.write(10+5);
  </script>
    

</body>
</html>