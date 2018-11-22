<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EkoSeatS</title>
    <!-- Prueba en GitHub desde StarPlatinumUwU -->
    <!-- Prueba en GitHub desde AlienatedFac -->
     <!-- Prueba en GitHub desde Yisus -->
      <!-- Prueba en GitHub desde Karen1 -->
 
    <!-- Estilos -->
 
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="icono.ico" />
   <!-- Mi Head we --> 
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/ekoseats.png">
          </span>
          <!-- Agregamos un espacio entre el logo de y el menú -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field" />
            </div>
          </div>
          <!-- Menú -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.php">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="catalogo.php">Catalogo</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="contact.html">Contactanos</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="informacion.html">Nosotros</a>
              <br>
              <br>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" id="open-modal-login" href="">Registro</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="Log-in.html">Inicio de Sesion</a>

            </nav>
          </div>
         
        
            <?php
            echo"
    <ul class='mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect' for='more-button'>
            <li class='mdl-menu__item' href='Log-in.html'> <a  href='Log-in.html'>$sesion Sesion </a></li>";
 
$user=$_POST['user'];
$password=$_POST['password'];
            $sesion="";
session_start();

$conexion = mysqli_connect("localhost", "root", "", "EkoBDD");
$consulta =$conexion->query("SELECT * from ACCESO WHERE Nombre='$user' AND Password='$password'");
           
    

if($resultado = mysqli_fetch_array($consulta)){
	$_SESSION['u']=$user;
    $sesion="Cerrar";
echo" 
            <li class='mdl-menu__item'>$user</li>
            <li class='mdl-menu__item'>Administrador</li>
            <li class='mdl-menu__item' href='index.php'>Cerrar Sesion</li>
          </ul>";
    
}
else{
    $sesion="Iniciar";
}
              ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {
  
  width: 800px;
  display: none;}




/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  width: -800%;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

          <span class="android-mobile-title mdl-layout-title">

            <img class="android-logo-image" src="images/ekoseats.png">
          </span>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/ekoseats.png">
        </span>
        <nav class="mdl-navigation">
          
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" >Salas</span>
        <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Salas" />
</form>
  <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Sillones" />
</form>
  <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Sofa" />
</form>
          <div class="android-drawer-separator"></div>
<span class="mdl-navigation__link" >Comedores</span>
  <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Mesas" />
</form>
  <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Sillas" />
</form>
<form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Bancos" />
</form>
            <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Credensas" />
</form>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Accesorios</span>
        <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Lamparas" />
</form>
  <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Cojines" />
</form>
<form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Cuadros" />
</form>
            <form action="salas.php" method="POST">
 <input type="submit" class="mdl-navigation__link" name="seccion" value="Decoracion" />
</form>
        </nav>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
          <div class="android-font android-slogan">EkoSeats.</div>
          <div class="android-font android-sub-slogan">Por un mundo mejor</div>
          <div class="android-font android-create-character">
          </div>

          <a href="#screens">
            <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
          </a>
        </div>
        <div class="android-screen-section mdl-typography--text-center">
          <a name="screens"></a>
          <div class="mdl-typography--display-1-color-contrast">Conoce toda nuestra linea de productos</div>
          <br>
<?php

            echo "<div class='android-screens'  >";
            echo"<div class='android-wear android-screen'>";                
          
            echo"</div>";
            

            echo"<div class='android-phone android-screen'>
              
            <div class='slideshow-container'>

<div class='mySlides fade'>
  <div class='numbertext'>1 / 3</div>
  <img src='images/1.jpg' style='width:100%''>
  <div class='text'>Sala </div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>2 / 3</div>
  <img src='images/sala2.jpg' style='width:100%''>
  <div class='text'>Sala</div>
</div>

<div class='mySlides fade'>
  <div class='numbertext'>3 / 3</div>
  <img src='images/salas3.jpg' style='width:100%''>
  <div class='text'>Sala</div>
</div>

</div>
<br>

<div style='text-align:center'>
  <span class='dot'></span> 
  <span class='dot'></span> 
  <span class='dot'></span> 
</div>



              <a class='android-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left' href=''></a>
            </div>
          </div>
        </div>
        <div class='android-wear-section'>
          <div class='android-wear-band'>
            <div class='android-wear-band-text'>
              <div class='mdl-typography--display-2 mdl-typography--font-thin'>Recomendado</div>
              <p class='mdl-typography--headline mdl-typography--font-thin'>
               Credensa de Madera Con Puerta Corredisa
              </p>
              <p>
                <a class='mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link' href='credensas.html'>
                  VER PRODUCTO&nbsp;<i class='material-icons'>chevron_right</i>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class='android-customized-section'>
          <div class='android-customized-section-text'>
            <div class='mdl-typography--font-light mdl-typography--display-1-color-contrast'>OTROS PRODUCTOS</div>
            <p class='mdl-typography--font-light'>
              Descripciones
              <br>
              <a href='' class='android-link mdl-typography--font-light'>Enlace</a>
            </p>
          </div>
          <div class='android-customized-section-image'></div>
        </div>
        <div class='android-more-section'>
          <div class='android-section-title mdl-typography--display-1-color-contrast'>Mas de Ekoseats</div>
          <div class='android-card-container mdl-grid'>
            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas1.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>Tipo madera</h4>
              </div>
              <div class='mdl-card__supporting-text'>
                <span class='mdl-typography--font-light mdl-typography--subhead'>Sala color madera reciclada</span>
              </div>
              <div class='mdl-card__actions'>
                 <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href='salas.html'>
                   VER
                   <i class='material-icons'>chevron_right</i>
                 </a>
              </div>
            </div>

            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/sala2.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>Sala Color Blanco</h4>
              </div>
              <div class='mdl-card__supporting-text'>
                <span class='mdl-typography--font-light mdl-typography--subhead'>Sala de Madera Reciclada con tres piezas</span>
              </div>
              <div class='mdl-card__actions'>
                 <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href='salas.html' target='_blank'>
                   <i class='material-icons'>chevron_right</i>
                 </a>
              </div>
            </div>

            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas6.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>Sala Redonda</h4>
              </div>
              <div class='mdl-card__supporting-text'>
                <span class='mdl-typography--font-light mdl-typography--subhead'>Sala Color Azul con 4 piezas </span>
              </div>
              <div class='mdl-card__actions'>
                 <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href='salas.html'>
                   VER
                   <i class='material-icons'>chevron_right</i>
                 </a>
              </div>
            </div>

            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas4.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>Sala Junta</h4>
              </div>
              <div class='mdl-card__supporting-text'>
                <span class='mdl-typography--font-light mdl-typography--subhead'>Sala Baja Con 4 Cojines, incluye una pequeña mesa</span>
              </div>
              <div class='mdl-card__actions'>
                 <a class='android-link mdl-button mdl-js-button mdl-typography--text-uppercase' href='salas.html'>
                   VER
                   <i class='material-icons'>chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
        </div>";
                ?>


        <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            <div class="mdl-mega-footer--left-section">
              <button class="mdl-mega-footer--social-btn">B1</button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn">B2</button>
              &nbsp;
              <button class="mdl-mega-footer--social-btn">B3</button>
            </div>
            <div class="mdl-mega-footer--right-section">
              <a class="mdl-typography--font-light" href="#top">
                Subir
                <i class="material-icons">expand_less</i>
              </a>
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Ekoseats © 2018 Mexico</p>
            <p class="mdl-typography--font-light">Algunas características pueden no estar disponibles en todas las áreas</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
            <a class="android-link android-link-menu mdl-typography--font-light" id="version-dropdown">
              OPCIONES
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="version-dropdown">
              <li class="mdl-menu__item">posible espacio</li>
              <li class="mdl-menu__item">posible espacio</li>
              <li class="mdl-menu__item">posible espacio</li>
              <li class="mdl-menu__item">posible espacio</li>
            </ul>
            <a class="android-link android-link-menu mdl-typography--font-light" id="developers-dropdown">
              otras opciones
              <i class="material-icons">arrow_drop_up</i>
            </a>
            <ul class="mdl-menu mdl-js-menu mdl-menu--top-left mdl-js-ripple-effect" for="developers-dropdown">
              <li class="mdl-menu__item">posible espacio</li>
              <li class="mdl-menu__item">posible espacio</li>
              <li class="mdl-menu__item">posible espacio</li>
              <li class="mdl-menu__item">posible espacio</li>
            </ul>
            <a class="android-link mdl-typography--font-light" href="">Blog</a>
            <a class="android-link mdl-typography--font-light" href="">Política de Privacidad</a>
          </div>

        </footer>
      </div>
    </div>

    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
 
    <script src="js/material.min.js"></script>

  </body>
</html>