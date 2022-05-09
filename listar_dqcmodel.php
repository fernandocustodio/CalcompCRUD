<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Listar DQCMODEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/64272c3a03.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top: 40px">
        <div style="text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
        </div> 
    <h3>Lista de Produtos</h3>
    <br />
    <table class="table">
    <thead>
        <tr>
            <th scope="col">MODEL</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
        
        <?php
            include 'conexao.php';
             $sql= "SELECT * FROM `dqcmodel`";
             $busca = mysqli_query($conexao, $sql);

             while ($array = mysqli_fetch_array($busca)){
                $ID = $array['ID'];
                $MODEL = $array['MODEL'];
                
        ?>
        <tr>
            <td><?php echo $MODEL ?></td>       
            <td>
                <a class="btn btn-warning btn-sm" href="editar_dqcmodel.php?ID=<?php echo $ID ?>" role="button"><i class="fa-regular fa-pen-to-square"></i> Editar</a>
                <a class="btn btn-danger btn-sm" href="deletar_dqcmodel.php?ID=<?php echo $ID ?>" role="button"><i class="fa-solid fa-trash-can"></i></i> Excluir</a>
            </td>
        </tr>
        <?php } ?>

    </table>

    <div style="textalign: right">
        <a href="adicionar_dqcmodel.php" role="button" class="btn btn-sm btn-success">Cadastrar</a>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>