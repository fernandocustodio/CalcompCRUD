<?php
include 'conexao.php';
$sql1= "SELECT * FROM `dqc84`";
$sql2= "SELECT * FROM `dqc841`";
$busca1 = mysqli_query($conexao, $sql1);
$busca2 = mysqli_query($conexao, $sql2);


$doc = "<table border = '1'>
        <tr>
            <td><b>MODEL</b></td>
            <td><b>FAT_PART_NO</b></td>
            <td><b>TOTAL_LOCATION</b></td>
            <td><b>PARTS_NO</b></td>
            <td><b>UNT_USG</b></td>
            <td><b>DESCRIPTION</b></td>
            <td><b>REF_DESIGNATOR</b></td>
        </tr>
";


while ($linha2 = mysqli_fetch_array($busca2)) {
        $linha1 = mysqli_fetch_array($busca1);
          $doc .= "<tr>
            <td>{$linha1['MODEL']}</td>
            <td>{$linha2['FAT_PART_NO']}</td>
            <td>{$linha1['TOTAL_LOCATION']}</td>
            <td>{$linha2['PARTS_NO']}</td>
            <td>{$linha2['UNT_USG']}</td>
            <td>{$linha2['DESCRIPTION']}</td>
            <td>{$linha2['REF_DESIGNATOR']}</td>


          </tr>";
}
$doc .= "</table>";

$ponteiro = fopen("Report.xls", "w");
fwrite($ponteiro, $doc);
fclose($ponteiro);
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Relatorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 style="text-align: center; margin-top: 25px;">Relatorio Gerado com Sucesso: <a href="Report.xls" class="btn btn-primary">Baixar</a></h3>
        <h3 style="text-align: center; margin-top: 25px;"><a href="index.php" class="btn btn-secondary">Voltar</a></h3>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>