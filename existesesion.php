<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

  <?php
  if (isset($_SESSION['usuario'])){
    echo "Hay una sesion";
  }else {
    echo "No hay ninguna sesion";
  }
  ?>

</body>
</html>
