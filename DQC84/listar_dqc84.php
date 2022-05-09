<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Listar DQC84</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64272c3a03.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top: 40px">
        <div style="text-align: right;">
            <a href="../index.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
        </div> 
    <h3>Lista da DQC84</h3>
    <br />
    <table class="table">
    <thead>
        <tr>
            <th scope="col">MODEL</th>
            <th scope="col">FAT_PART_NO</th>
            <th scope="col">TOTAL_LOCATION</th>
            <th scope="col">UPDATE_TD</th>
            <th scope="col">CREATE_DT</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
        
        <?php
            include '../conexao.php';
             $sql= "SELECT * FROM `dqc84`";
             $busca = mysqli_query($conexao, $sql);

             while ($array = mysqli_fetch_array($busca)){
                $ID = $array['ID'];
                $MODEL = $array['MODEL'];
                $FAT_PART_NO = $array['FAT_PART_NO'];
                $TOTAL_LOCATION = $array['TOTAL_LOCATION'];
                $UPDATE_TD = date('d/m/Y H:i',strtotime($array['UPDATE_DT']));
                $CREATED_TD = date('d/m/Y H:i',strtotime($array['CREATE_DT']));
                
        ?>
        <tr>
            <td><?php echo $MODEL ?></td>       
            <td><?php echo $FAT_PART_NO ?></td>       
            <td><?php echo $TOTAL_LOCATION ?></td>       
            <td><?php echo $UPDATE_TD ?></td>       
            <td><?php echo $CREATED_TD ?></td>       
            <td>
                <a class="btn btn-warning btn-sm" href="editar_dqc84.php?ID=<?php echo $ID ?>" role="button"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                <a class="btn btn-danger btn-sm" href="deletar_dqc84.php?ID=<?php echo $ID ?>" role="button"><i class="fa-solid fa-trash-can"></i></i> Excluir</a>
            </td>
        </tr>
        <?php } ?>

    </table>

    <div style="textalign: right">
        <a href="adicionar_dqc84.php" role="button" class="btn btn-sm btn-success">Adicionar</a>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>