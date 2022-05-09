<?php

include 'conexao.php';

$MODEL = $_POST['MODEL'];
$FAT_PART_NO = $_POST['FAT_PART_NO'];
$TOTAL_LOCATION = $_POST['TOTAL_LOCATION'];

$sql = "INSERT INTO `dqc84` (`MODEL`, `FAT_PART_NO`,`TOTAL_LOCATION`,`UPDATE_DT`,`CREATE_DT`) VALUES ('$MODEL', '$FAT_PART_NO', $TOTAL_LOCATION, NOW(), NOW())";

$inserir = mysqli_query($conexao, $sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px;margin-top: 20px">
    <center>    
        <h4>Informação adicionada!</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="adicionar_dqc84.php" role="button" class="btn btn-sm btn-primary" >Cadastrar novo Model</a>
            <a href="listar_dqc84.php" role="button" class="btn btn-sm btn-primary">Voltar para a listagem</a>
        </center>
    </div>
</div>