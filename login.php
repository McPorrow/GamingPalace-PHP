<?php
include ("conexion.php");


//esquema para buscar el usuario

$usuarioLogear = "SELECT * from usuarios where usuario='$_REQUEST[user]' AND password='$_REQUEST[password]'";

//consulta para ver si existe el usuario
$consultaUsuarioPassword = mysqli_query($con,$usuarioLogear) or die($con->error);

//realiza la consulta y si existe el valor de la variable es 1 o mayor
$check_user = mysqli_num_rows($consultaUsuarioPassword);

if ($check_user>0) {
  session_start();
  $_SESSION['usuario']=$_REQUEST['user'];
  echo '<script language="javascript">alert("Te has logueado");';
  echo "window.location.href='./index.html'; </script>";

}else {
  echo '<script language="javascript">alert("El usuario o la contraseña no son correctas.");';
  echo "window.location.href='./login.html'; </script>";

}
  // checking the user

  //$sel_user = "select * from usuarios where usuario='$user' AND password='$password'";

  //$run_user = mysqli_query($con, $sel_user);

  //$check_user = mysqli_num_rows($run_user);

  //if($check_user>0){

  //  $_SESSION['usuario']=$email;

  //  echo "<script>window.open('logueado.html',’_self’)</script>";

  //}

  //else {

  //echo "<script>alert(‘Email or password is not correct, try again!’)</script>";


  //}

  ?>
