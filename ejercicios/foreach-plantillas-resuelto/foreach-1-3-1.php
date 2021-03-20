<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Encuesta (Formulario).
    foreach (1).
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Encuesta (Formulario)</h1>

  <form action="foreach-1-3-2.php" method="get">
    <p>Escriba el número de preguntas (1 &le; número &le; 10) y respuestas (2 &le; número &le; 10) y mostraré una encuesta ficticia.</p>

    <table>
      <tbody>
        <tr>
          <td><strong>Número de preguntas:</strong></td>
          <td><input type="number" name="preguntas" min="1" max="10" value="7"></td>
        </tr>
        <tr>
          <td><strong>Número de respuestas:</strong></td>
          <td><input type="number" name="respuestas" min="2" max="10" value="3"></td>
        </tr>
      </tbody>
    </table>

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