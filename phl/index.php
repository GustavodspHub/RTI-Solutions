<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calcular Frete</title>
</head>

<body background="../img/canada.jpg">
  <!-- Colocar o formulário -->
  <form method="GET" action="calcula-frete.php">
    <div class="input-group">
      <label for="origem">Cidade de Origem</label>
      <input type="text" id="origem" name="origem" required/>
    </div> 

    <div class="input-group">
      <label for="destino">Cidade de Destino</label>
      <input type="text" id="destino" name="destino" required />
    </div>

    <div class="input-group">
      <label for="distancia">Distância em KM</label>
      <input type="number" id="distancia" name="distancia" required/>
    </div>

    <div class="input-group">
      <label for="pedagios">Qntd de Pedágios</label>
      <input type="number" id="pedagios" name="pedagios" required/>
    </div>

    <button>Calcular</button>
    <button type="reset">Limpar</button>
  </form>
</body>


</html>