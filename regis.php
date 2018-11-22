<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse</title>
    <!-- Prueba en GitHub desde StarPlatinumUwU -->
    <!-- Prueba en GitHub desde AlienatedFac -->
     <!-- Prueba en GitHub desde Yisus -->
      <!-- Prueba en GitHub desde Karen1 -->
 
    <!-- Estilos -->
 
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/registro.css">
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
            <?php
            echo" <div class='android-navigation-container'>
            <nav class='android-navigation mdl-navigation'>
               <a class='mdl-navigation__link mdl-typography--text-uppercase' href='index.php'>Home</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='catalogo.php'>Catalogo</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='contact.html'>Contactanos</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='informacion.html'>Nosotros</a>
              <br>
              <br>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href=''>Registro</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='Log-in.html'>Inicio de Sesion</a>

            </nav>
          </div>
          <button class='android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect' id='more-button'>
            <i class='material-icons'>more_vert</i>
            </button>
    <ul class='mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect' for='more-button'>
            <li class='mdl-menu__item' href='Log-in.html'> <a  href='Log-in.html'> Sesion </a></li>";
 
$user=$_POST['user'];
$password=$_POST['password'];
            $sesion="";
session_start();

$conexion = mysqli_connect("localhost", "root", "", "EkoBDD");
$consulta =$conexion->query("SELECT * from ACCESO WHERE Nombre='$user' AND Password='$password'");
           
    

if($resultado = mysqli_fetch_array($consulta)){
	$login="Cerrar Sesion";
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
  <form action="/action_page.php">
  <div class="container">
    <h1>Registrarse!</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="Nombre"><b>Nombre</b></label>
    <input type="text" placeholder="Ingresa tu Nombre" name="nombre" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repite el Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Registrarse</button>
  </div>
  
  <div class="container-signin">
    <p>Tienes una cuenta? <a href="Log-in.html">Inicia sesion</a>.</p>
  </div>
</form>
</div>
</div>
</body>

</html>