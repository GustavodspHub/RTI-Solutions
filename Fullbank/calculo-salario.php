<?php
    $funcionario = $_GET ["funcionario"];
    $salario = $_GET ["salario"];
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
        if($salario >= 5000) {
    ?>
        <h1> Você irá receber 10% de aumento, e seu salário ira ser <?= $salario * 0.10 + $salario ?>
    <?php       
        }else {
    ?>
        <h1> você irá receber 20% de aumento, e seu salário ira ser de <?= $salario * 0.20 + $salario ?>
    <?php
        }
    ?>
</body>
</html>