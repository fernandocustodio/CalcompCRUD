<?php

include '../conexao.php';

$MODEL = $_POST['MODEL'];

$sql = "INSERT INTO `dqcmodel` (`MODEL`) VALUES ('$MODEL')";

$inserir = mysqli_query($conexao, $sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px;margin-top: 20px">
    <center>    
        <h4>Informação adicionada!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="adicionar_dqcmodel.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Model</a>
            <a href="listar_dqcmodel.php" role="button" class="btn btn-sm btn-primary">Voltar para a listagem</a>

        </center>
    </div>
</div>