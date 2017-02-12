<?php
include ("conexion.php");
session_start();
$query="INSERT INTO favoritosusuario(idUsuario, idJuego) VALUES ('$_SESSION[idusuario]', '$_REQUEST[juego]')";
mysqli_query($con, $query) or die($con->error);
mysqli_close($con);
echo "<script>alert(El juego se ha guardado en favoritos. Redireccionando a la página inicial...)</script>";
header ("location: index.php");
 ?>
