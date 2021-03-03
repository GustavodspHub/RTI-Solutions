<?php
    $nome = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $quilow = $_GET["quilow"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($quilow > 120) {
    ?>
        <h1 style="color: red;">
            <p>Consumo : <?= $quilow ?></p>
            <p>Valor a pagar : R$<?= $quilow * 0.42?></p>
        </h1>
    <?php
        }else{
    ?>
        <h1 style="color: blue;">
            <p>Consumo : <?= $quilow ?></p>
            <p>Valor a pagar : R$<?= $quilow * 0.32?> (Obrigado por economizar)</p>
        </h1>
    <?php
        }
    ?>
</body>
</html>