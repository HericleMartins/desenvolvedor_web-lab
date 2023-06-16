<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Sistema de Notas Escolar</title>
  <link rel="stylesheet" type="text/css" href="../css/notas/style.css">
</head>

<body>
  <div class="container">

  <a href="../" class="back">Voltar</a>
  <h1>Sistema de Notas Escolar </h1>

  <form action="processa.php" method="post">
    <label for="nota1">Nota 1:</label>
    <input type="number" step="0.01" name="nota1" required><br>

    <label for="nota2">Nota 2:</label>
    <input type="number" step="0.01" name="nota2" required><br>

    <label for="nota3">Nota 3:</label>
    <input type="number" step="0.01" name="nota3" required><br>

    <input type="submit" value="Calcular Média">
  </form>
  </div>
  
</body>

</html>