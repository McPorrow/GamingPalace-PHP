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
  <script>

  </script>

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
            <a class="page-scroll" href="#one">HOME</a>
          </li>
          <li>
            <a class="page-scroll" href="#two">JUEGOS</a>
          </li>
          <li>
            <a class="page-scroll" href="#three">TRAILERS</a>
          </li>
          <li>
            <a class="page-scroll" href="#last">CONTACTO</a>
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
  <header id="first">
    <div class="header-content">
      <div class="inner">
        <h1 class="cursive">Gaming Palace<h1>
          <h4>Tu portal de juegos</h4>
        </div>
      </div>
      <video autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="./img/wallpaper.jpg" id="video-background">
        </video>
      </header>
      <section class="bg-primary" id="one">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
              <h2 class="margin-top-0 text-primary">Disfruta de todos tus juegos gratis.</h2>
              <br>
              <p class="text-faded">
                Más abajo podrás elegir entre las categorías de juegos que quieras. <br> <br> <br>
                Adelante, pruebalo.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="two">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="margin-top-0 text-primary">Categorias</h2>
              <hr class="primary">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
              <a href="arcade.php">  <div class="feature" >
                <i class="fa fa-television fa-5x" aria-hidden="true" data-wow-delay=".3s" onclick=AsignaCategoria(2)></i>
                <h3>Arcade</h3></a>
                <p class="text-muted">Disfruta de juegos arcade</p>
              </div> </a>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
              <a href="carreras.php">  <div class="feature">
                <i class="fa fa-car fa-5x" aria-hidden="true" data-wow-delay=".3s" onclick=AsignaCategoria(1)></i>
                <h3>Carreras</h3></a>
                <p class="text-muted">Disfruta de juegos de carreras</p>
              </div> </a>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
              <div class="feature">
                <i class="fa fa-star-o fa-5x" aria-hidden="true" data-wow-delay=".3s" onclick=AsignaCategoria()></i>
                <h3>Favoritos</h3></a>
                <p class="text-muted">Accede a tus juegos favoritos fácilmente</p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section id="three" class="no-padding">
        <div class="container-fluid">
          <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
              <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/deer.jpg">
                <img src="./assets/deer.jpg" class="img-responsive" alt="Image 1">
                <div class="gallery-box-caption">
                  <div class="gallery-box-content">
                    <div>
                      <i class="icon-lg ion-ios-search"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/beach.jpg">
                <img src="./assets/beach.jpg" class="img-responsive" alt="Image 2">
                <div class="gallery-box-caption">
                  <div class="gallery-box-content">
                    <div>
                      <i class="icon-lg ion-ios-search"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="clearfix hidden-lg"> </div>
            <div class="col-lg-4 col-sm-6">
              <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/lake.jpg">
                <img src="./assets/lake.jpg" class="img-responsive" alt="Image 3">
                <div class="gallery-box-caption">
                  <div class="gallery-box-content">
                    <div>
                      <i class="icon-lg ion-ios-search"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/bike.jpg">
                <img src="./assets/bike.jpg" class="img-responsive" alt="Image 4">
                <div class="gallery-box-caption">
                  <div class="gallery-box-content">
                    <div>
                      <i class="icon-lg ion-ios-search"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="clearfix hidden-lg"> </div>
            <div class="col-lg-4 col-sm-6">
              <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/city.jpg">
                <img src="./assets/city.jpg" class="img-responsive" alt="Image 5">
                <div class="gallery-box-caption">
                  <div class="gallery-box-content">
                    <div>
                      <i class="icon-lg ion-ios-search"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6">
              <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/colors.jpg">
                <img src="./assets/colors.jpg" class="img-responsive" alt="Image 6">
                <div class="gallery-box-caption">
                  <div class="gallery-box-content">
                    <div>
                      <i class="icon-lg ion-ios-search"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id="last">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
              <h2 class="margin-top-0 wow fadeIn">Contacta con nosotros</h2>
              <hr class="primary">
              <p>Escríbenos tus dudas o problemas con la página y te asistiremos lo más pronto posible.</p>
            </div>

            <div class="col-lg-10 col-lg-offset-1 text-center">
              <form class="contact-form row" action="http://formspree.io/admin@gamingpalace.esy.es" method="post" enctype="text/plain">
                <div class="col-md-4">
                  <label></label>
                  <input type="text" class="form-control" name="name" placeholder="Nombre">
                </div>
                <div class="col-md-4">
                  <label></label>
                  <input type="email" class="form-control" name="_replyto" placeholder="eMail">
                </div>
              </div>
              <div class="col-md-12">
                <label></label>
                <textarea class="form-control" rows="9" placeholder="Escribe tu mensaje aquí..."></textarea>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <label></label>
                <button type="submit" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Enviar<i class="ion-android-arrow-forward"></i></button>
              </div>
            </form>
          </div>
        </div>
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
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <img src="" id="galleryImage" class="img-responsive" />
            <p>
              <br/>
              <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-body">
            <h2 class="text-center">Enviado</h2>
            <p class="text-center">Tu mensaje ha sido enviado correctamente</p>
            <p style="text-align:center" class="text-primary">El mensaje será leido en breve.</p>
            <br/>
            <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
  </html>
