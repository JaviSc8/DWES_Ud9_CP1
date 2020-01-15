<?php
//Si no se ha recibido el artículo por POST se muestra el texto, de lo contrario se genera una cookie por artículo o se actualiza:
if (!isset($_POST['articulo'])) {
  echo "Seleccione el artículo y pulse añadir al carrito";
}else {
  //Variables recibidas por POST:
  $art=$_POST['articulo'];
  $pre=$_POST['precio'];
  $cant=$_POST['cantidad'];
  $preT=$pre*$cant;
  //Si no existe la cookie con el nombre del artículo creamos la cookie. Si ya esta creada la actualizamos.
  if (!isset($_COOKIE[$art])) {
    setcookie($art, $art.", nº de artículos: ".$cant.". Total: ".$preT." €", time()+60*60*24);
  }else{
    setcookie($art, $art.", nº de artículos: ".$cant.". Total: ".$preT." €");
  }
  //Mensaje a mostrar al añadir un producto:
    echo "Añadido/s ".$cant." producto/s de tipo ".$art." a su carrito.";
};
?>
