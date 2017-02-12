<?php
include ("conexion.php");
if($_REQUEST[password]==$_REQUEST[password2]){
  $query="INSERT INTO usuarios(usuario, password, eMail) VALUES ('$_REQUEST[user]', '$_REQUEST[password]', '$_REQUEST[mail]')";
  mysqli_query($con, $query) or die($con->error);
  mysqli_close($con);
  //echo "Se ha creado el alumno";
  echo '<script language="javascript">alert("Se ha creado el usuario")</script>';
  header ("location: index.html");

}else {
  echo '<script language="javascript">alert("Las contraseñas no coinciden")</script>';
  header ("location: register.html");
  echo '<script language="javascript">alert("Las contraseñas no coinciden")</script>';
}


?>
