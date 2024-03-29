<?php

include '../conexao.php';
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
            <a href="listar_dqc84.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div> 
        <h4>Formulário do Model</h4>
        <form action="atualizar_dqc84.php" method="post" style="margin-top:20px">
            <div class="mb-3">
                <label class="form-label">Model</label>
                <select class="form-select" name="MODEL">
            <?php
            $sql = "SELECT * FROM `dqc84` WHERE ID = $ID";
            $buscar = mysqli_query($conexao,$sql);
            while ($array = mysqli_fetch_array($buscar)){
                $ID = $array['ID'];
                $MODEL = $array['MODEL'];
                $FAT_PART_NO = $array['FAT_PART_NO'];
                $TOTAL_LOCATION = $array['TOTAL_LOCATION'];
            
            ?>
                    <option><?php echo $MODEL?></option>
                    <?php
                        $sql = "SELECT * FROM dqcmodel ORDER BY MODEL ASC";
                        $buscar = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($buscar)){
                            $MODEL = $array['MODEL'];
                    ?>
                    <option><?php echo $MODEL?></option>
                    <?php } ?>
                    </select>
             </div>
                    <input type="text" class="form-control" name="ID" value="<?php echo $ID ?>" style="display: none">
            
            <div class="mb-3">
                <label class="form-label">Fat Part No</label>
                <input type="text" class="form-control" name="FAT_PART_NO" autocomplete="off" value="<?php echo $FAT_PART_NO?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Total Location</label>
                <input type="number" class="form-control" name="TOTAL_LOCATION" autocomplete="off" value="<?php echo $TOTAL_LOCATION?>">
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