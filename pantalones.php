<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ud9_Caso1-Carrito-Pantalones</title>
  </head>
  <body>
    <hr>
    <!--Formulario para recoger la información mediante POST-->
    <form  action="pantalones.php" method="post">
      <input type="hidden" name="articulo" value= "Pantalones">
      <input type="radio" name="precio" value="24" checked>Pantalones vaqueros (24 €)
      Cantidad:
      <select name="cantidad">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
      <input type="submit" value="Añadir al carrito">
    </form>
    <hr>
    <p>
      <!--Botones para ir a mi carrito y volver a inicio-->
      <a href="carrito.php"><input type="button" value="Mi carrito"></a>
      <a href="index.php"><input type="button" value="Volver a inicio"></a>
    </p>
    <?php
      require "carritocompra.php";
    ?>
  </body>
</html>
