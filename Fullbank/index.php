<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
<form method="GET" action="calculo-salario.php">
    <div class="input-group">
      <label for="funcionario">Nome do Funcionario</label>
      <input type="text" id="funcionario" name="funcionario" required/>
    </div> 

    <div class="input-group">
      <label for="salario">O seu salario Atual</label>
      <input type="number" id="salario" name="salario" required />
    </div>

    <button>Calcular</button>
    <button type="reset">Limpar</button>
</body>
</html>