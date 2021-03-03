<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles-global.css" />
</head>
<body>
<form method="GET" action="cambio.php">
    <div class="input-group">
      <label for="real">Valor em R$</label>
      <input type="number" id="real" name="real" required/>
    </div> 

    <div class="input-group">
      <label for="dolar">Conversão para Dolar</label>
      <input type="radio" id="dolar" name="cambio" required value="dolar" />
    </div>
    <div class="input-group">
      <label for="euro">Conversão para Euro</label>
      <input type="radio" id="euro" name="cambio" required value="euro" />
    </div>

    <button>Calcular</button>
    <button type="reset">Limpar</button>
</body>
</html>