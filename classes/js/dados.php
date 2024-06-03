<div style="background-color: lightgray; padding:50px;" class="example1">

<?php
$data = ['nome' => 'João', 'idade' => 30];
echo json_encode($data);
?>

<script>
fetch('dados.php')
    .then(response => response.json())
    .then(data => {
        console.log(data.nome); // Exibe "João"
    });
</script>


</div>