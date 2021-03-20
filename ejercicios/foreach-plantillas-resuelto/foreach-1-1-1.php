<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tabla de una fila con casillas de verificación (Formulario).
    foreach (1).
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Tabla de una fila con casillas de verificación (Formulario)</h1>

  <form action="foreach-1-1-2.php" method="get">
    <p>Escriba un número (0 &lt; número &le; 20) y mostraré una tabla de una fila
    de ese tamaño con casillas de verificación en cada celda.</p>

    <p><strong>Tamaño de la tabla:</strong> <input type="number" name="numero" min="1" max="20" value="10"></p>

    <p>
      <input type="submit" value="Mostrar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Rodrigo</p>
  </footer>
</body>
</html>