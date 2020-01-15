<?php
//Foreach para borrar las cookies asignando un tiempo expirado:
foreach ($_COOKIE as $clave => $valor) {
  setcookie($clave, "", time()-1);
};
 ?>
 <script type="text/javascript">
 //Javascript para volver a "carrito.php" y que está página no se muestre:
 window.location.replace("carrito.php");
 </script>
