<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ud9_Tarea1-Carrito</title>
  </head>
  <body>
    <h3>Carrito de la compra:</h3>
    <hr>
    <?php
    //Si no existen cookies se muestra el texto, si existen se muestra el resumen de los artículos del carro:
    if (empty($_COOKIE)) {
      echo "Sin productos que mostrar.";
    }else {
      //Foreach para obtener los valores de las cookies y mostrarlos a modo resumen:
      foreach ($_COOKIE as $clave => $valor) {
        echo "$valor<br>";
      };
    };
    ?>
    <hr>
      <p>
        <!--Botones para ir a mi carrito y volver a inicio-->
        <a href="borrar.php"><input type="button" value="Eliminar carrito"></a>
        <a href="index.php"><input type="button" value="Volver a inicio"></a>
      </p>
  </body>
</html>
