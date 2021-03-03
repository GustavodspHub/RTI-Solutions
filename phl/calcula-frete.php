<?php
    $origem = $_GET["origem"];
    $destino = $_GET["destino"];
    $distancia = $_GET["distancia"];
    $pedagios = $_GET["pedagios"];

    $custoPedagio = $pedagios * 9.40;
    $custoKM = $distancia * 6.00;
    $custoViagem = $custoKM + $custoPedagio;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body background="../img/mar.jpg">

    <?php
        if($custoPedagio > 100) {
    ?>
          <h1 style= 'color: red'> O valor total dos pedágios é: R$ <?= number_format($custoPedagio, 2, ",", ".") ?> </h1>
    <?php
        }else {
    ?>
        <h1> O valor total dos pedágios é:  <?= $custoPedagio ?>  </h1>
    <?php
        }
    ?>

    <h1>
        A viagem de <?= $origem ?> à <?= $destino?> irá custar o valor total de R$ <em><?= number_format($custoViagem, 2, ",", ".") ?></em>
    </h1>
</body>
</html>