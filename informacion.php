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
 
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet"media="screen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"media="screen">
    <link rel="stylesheet" href="css/material.min.css"media="screen">

    <link rel="stylesheet" href="css/styles.css" media="screen">
    <link rel="shortcut icon" href="icono.ico" media="screen">
   <!-- Mi Head we --> 
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <img class="android-logo-image" src="images/ekoseats.png" >
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
         <?php
error_reporting(0);
            $var1="";
            $proveedor="proveedor";
            $usuario="usuario";
session_start();     
if($_SESSION['usuario'] and $_SESSION['password']){    
    if($_SESSION['tipo']=="usuario")
    {
echo "<script type=\"text/javascript\">alert(\"Bienvenido\");</script>";
    $registro="index.php";
    $regis="Logout";
    $sesion="index.php";
    $ses=$_SESSION['usuario'];
        $cata="Carrito";
        $catalink="carrito.php";
    }
    else
        
    if($_SESSION['tipo']=="proveedor"){
         echo "<script type=\"text/javascript\">alert(\"Bienvenido\");</script>";
    $registro="index.php";
    $regis="Logout";
    $sesion="index.php";
    $ses=$_SESSION['usuario']; 
         $cata="Subidos";
        $catalink="proveedor.php";
    }
    
          
    
}
            else{
                $registro="regis.php";
                $regis="Registrate";
                $sesion="Log-in.html";
    $ses="Login";
                $cata="Carrito";
        $catalink="carrito.php";
            }
            
 echo"
          <div class='android-navigation-container'  >
            <nav class='android-navigation mdl-navigatio' >

              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='index.php' >Home</a>";
            if($var1!=$proveedor)
            {
                 echo"
              
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='catalogo.php'>Catalogo</a>";
            }
           
            echo"
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='contact.php'>Contactanos</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='$catalink'>$cata</a>
            <a class='mdl-navigation__link mdl-typography--text-uppercase' id='open-modal-login' href='$registro'>$regis</a>
             <a class='mdl-navigation__link mdl-typography--text-uppercase' id='open-modal-login' href='$sesion'>$ses</a>
            </nav>
            
    <ul class='mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect' for='more-button'>
                </ul>

           
          </div>
";

 ?>
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
      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section1 mdl-typography--text-center">
          <div class="android-font android-slogan">EkoSeats.</div>
          <div class="android-font android-sub-slogan">Los problemas causados por la contaminación son mucho más graves de lo que pensamos. No solo se trata de que el aire que respiramos sea menos sano o que recursos naturales como el agua escaseen. Las consecuencias y los efectos nocivos tanto en nuestra salud como en el equilibrio planetario ya son evidentes. Es por ello como parte del planeta en el que nos encontramos tenemos que   tratar de crear métodos o estrategias para reducir la contaminación en nuestro alcance posible. Y una opción para empezar es con la reutilización. Pero ¿Qué es reutilizar?  Es toda actividad del hombre para evitar tirar  a la basura  o desechar productos materiales que pueden volver ser utilizados con mismos o diferentes fines para los que fue creado.
En el presente trabajo se hablará acerca del proyecto “eco room” el cual consiste en crear una sala ecológica a través de llantas de carro y cajas de madera, el fin es generar conciencia acerca de cuidar el medio ambiente, mediante el hábito de reutilizar materiales que nos rodean en la vida diaria. 
</div>


</div>
          <footer class="android-footer mdl-mega-footer">
          <div class="mdl-mega-footer--top-section">
            
            <div class="mdl-mega-footer--right-section">
             
            </div>
          </div>

          <div class="mdl-mega-footer--middle-section">
            <p class="mdl-typography--font-light">Ekoseats © 2018 Mexico</p>
            <p class="mdl-typography--font-light">Algunas características pueden no estar disponibles en todas las áreas</p>
          </div>

          <div class="mdl-mega-footer--bottom-section">
           
         
            
            <a class="android-link mdl-typography--font-light" href="">Blog></a>
            <a class="android-link mdl-typography--font-light" href="">Política de Privacidad</a>
          </div>

        </footer>
      
    </div>

    
 
    <script src="js/material.min.js"></script>

  </body>
</html>
