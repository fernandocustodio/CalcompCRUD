<?php
    include '../conexao.php';

    $ID = $_POST['ID'];
    $MODEL = $_POST['MODEL'];

    $sql = "UPDATE `dqcmodel` SET `MODEL` = '$MODEL' WHERE ID = $ID";

    $atualizar = mysqli_query($conexao,$sql);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top: 10px">
            <a href="listar_dqcmodel.php" class="btn btn-warning" style="color:#fff">Voltar</a>
        </div>
    </center>
</div>