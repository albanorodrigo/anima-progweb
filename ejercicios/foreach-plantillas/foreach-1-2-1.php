<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Palabras repetidas (Formulario).
    foreach (1).
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Palabras repetidas (Formulario)</h1>

  <form action="foreach-1-2-2.php" method="get">
    <p>Escriba un número (0 &lt; número &le; 10) y dibujaré una tabla de una columna de ese tamaño con cajas de texto en cada celda.</p>

    <p><strong>Tamaño de la tabla:</strong> <input type="number" name="numero" min="1" max="10" value="7"></p>

    <p>
      <input type="submit" value="Mostrar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>