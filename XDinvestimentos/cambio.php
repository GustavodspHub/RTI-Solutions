<?php
    $cambio = $_GET ["cambio"];
    $real = $_GET ["real"];
    $dolar = 5.41;
    $euro = 6.71;
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
        if ($cambio == "dolar") {
    ?>
        <h1>Hoje com o dolar a 5.41, a conversão vai ficar <?= $dolar * $real?></h1>
    <?php
        }else{
    ?>
        <h1> Hoje com o Euro a 6.71, a conversão vai ficar <?= $euro * $real?> </h1> 
    <?php
        }
    ?>

</body>
</html>