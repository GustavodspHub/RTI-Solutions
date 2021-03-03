<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
<form method="GET" action="energia.php">
    <div class="input-group">
      <label for="nome">Nome Completo</label>
      <input type="text" id="nome" name="nome" required/>
    </div> 

    <div class="input-group">
      <label for="endereco">Endereço</label>
      <input type="text" id="endereco" name="endereco" required />
    </div>

    <div class="input-group">
      <label for="quilow">Valor em Quilowatts-hora</label>
      <input type="number" id="quilow" name="quilow" required/>
    </div>

    <button>Calcular</button>
    <button type="reset">Limpar</button>
</body>
</html>