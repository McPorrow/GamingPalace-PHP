<?php
include ("conexion.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Gaming Palace</title>
  <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="generator" content="Codeply">
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/animate.min.css" />
  <link rel="stylesheet" href="./css/ionicons.min.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body>
  <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#first"><i class="fa fa-gamepad fa-lg" aria-hidden="true"></i> Gaming Palace </a>
      </div>
      <div class="navbar-collapse collapse" id="bs-navbar">
        <ul class="nav navbar-nav">
          <li>
            <a class="page-scroll" href="./index.php">HOME</a>
          </li>
          <li>
            <a class="page-scroll" href="./index.php#two">JUEGOS</a>
          </li>
          <li>
            <a class="page-scroll" href="./index.php#three">TRAILERS</a>
          </li>
          <li>
            <a class="page-scroll" href="./index.php#last">CONTACTO</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if (!isset($_SESSION['idusuario'])) { //si existe sesion muestra un enlace a tus favoritos y tu nombre, si no, Muestra la opcion de iniciar sesion y registrarse
            echo "<li> <a class='page-scroll' data-toggle='modal' title='Sign in' href='./register.html'>Registrarse</a></li>";
            echo "<li><a class='page-scroll' data-toggle='modal' title='Log in' href='./login.html'>Iniciar Sesión</a></li>";
          }else {
            echo "<li><a class='page-scroll' data-toggle='modal' title='Log in' href='./login.html'>Sesion iniciada como $_SESSION[usuario] </a></li>";
          }
          ?>

        </ul>
      </div>
    </div>
  </nav>
  <section class="bg-primary">


    <div class="col-lg-10 col-lg-offset-1 text-center">
      <h1>Juegos de Carreras<h1>
        <?php
        //busca la ID de la categoria en la base de datos
        $categoria = "SELECT * from juegos where categoria='1'";
        //almacena la consulta
        $resultado = mysqli_query($con, $categoria);
        $arrayResultado = mysqli_fetch_row($resultado);
        ?>

        <hr>
        <div>
          <?php
          echo "<h1>$arrayResultado[1]</h1>"
          ?>

          <input type="button" value="Abrir el juego" onclick="this.nextSibling.style.display='block';this.style.display='none'"/><div class="spoiler"> -->

            <?php
            echo "<embed width='1024px' height='840px' name='plugin' id='plugin' src='$arrayResultado[3]' type='application/x-shockwave-flash'>";

            ?>
            </div
            <?php
            ?>

            <input type="button" value="Abrir el juego" onclick="this.nextSibling.style.display='block';this.style.display='none'"/><div class="spoiler"> -->

              <?php
              echo "<embed width='1024px' height='840px' name='plugin' id='plugin' src='$arrayResultado[3]' type='application/x-shockwave-flash'>";

              ?>
            </div>
            <div>
              <?php // segundo juego
              $arrayResultado = mysqli_fetch_row($resultado);   //cada vez que se ejecuta el contador se mueve a la siguiente fila
              echo "<h1>$arrayResultado[1]</h1>"
              ?>

              <input type="button" value="Abrir el juego" onclick="this.nextSibling.style.display='block';this.style.display='none'"/><div class="spoiler"> -->

                <?php
                echo "<embed width='1024px' height='840px' name='plugin' id='plugin' src='$arrayResultado[3]' type='application/x-shockwave-flash'>";

                ?>
                </div
                <?php
                ?>

                <input type="button" value="Abrir el juego" onclick="this.nextSibling.style.display='block';this.style.display='none'"/><div class="spoiler"> -->

                  <?php
                  echo "<embed width='1024px' height='840px' name='plugin' id='plugin' src='$arrayResultado[3]' type='application/x-shockwave-flash'>";

                  ?>
                </div>
                <br><br><br>
              </div>


            </section>

            <footer id="footer">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                      <li><a href="">Products</a></li>
                      <li><a href="">Services</a></li>
                      <li><a href="">Benefits</a></li>
                      <li><a href="">Developers</a></li>
                    </ul>
                  </div>
                  <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Delivery Information</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                  </div>
                  <div class="col-xs-12 col-sm-3 column">
                    <h4>Stay Posted</h4>
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                      </div>
                    </form>
                  </div>
                  <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                    </ul>
                  </div>
                </div>
                <br/>
                <span class="pull-right text-muted small">Gaming Palace by Erik Arroyo </a> ©2016 </span>
              </div>
            </footer>


            <!--scripts loaded here -->
            <script src="./js/jquery.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/jquery.easing.min.js"></script>
            <script src="./js/wow.js"></script>
            <script src="./js/scripts.js"></script>
          </body>
          </html>
