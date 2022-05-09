<?php

include 'conexao.php';
    $ID = $_GET['ID'];

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }
        #botao {

        }
    </style>
</head>
<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <div style="text-align: right;">
            <a href="listar_dqcmodel.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div> 
        <h4>Forumulário do Model</h4>
        <form action="atualizar_dqcmodel.php" method="post" style="margin-top:20px">
            <?php

            $sql = "SELECT * FROM `dqcmodel` WHERE ID = $ID";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)){
                $ID = $array['ID'];
                $MODEL = $array['MODEL'];
            

            ?>
            <div class="mb-3">
                <label class="form-label">Model</label>
                <input type="text" class="form-control" name="MODEL" value="<?php echo $MODEL ?>">
                <input type="text" class="form-control" name="ID" value="<?php echo $ID ?>" style="display: none">
            </div>
            <div style="text-align: right;">
                <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
            </div>
            
            <?php } ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>