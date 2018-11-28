<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="description" content="Web Developing">
      <meta name="keyword" content="Bio, Eco, Nature, Eckoseats">
      <meta name="author" content="Araujo, Tejeda, Garza">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>EkoSeatS</title>

    <!-- Estilos -->
 
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet"media="screen">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"media="screen">
    <link rel="stylesheet" href="css/material.min.css"media="screen">
    <link rel="stylesheet" href="CSS/styles.css" media="screen">
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
          <!-- Menú -->
        <?php
error_reporting(0);
$user=$_POST['user'];
$password=$_POST['password']; 
if(empty($user and $password))
{
   echo ""; 
}
session_start();
$conexion = mysqli_connect("localhost", "root", "", "EkoBDD");
$consulta =$conexion->query("SELECT * from ACCESO WHERE Nombre='$user' AND Password='$password'");       
if($resultado = mysqli_fetch_array($consulta)){
  $_SESSION['u']=$user;
            echo "<script type=\"text/javascript\">alert(\"Bienvenido $user\");</script>";
    $registro="index.php";
    $regis="Logout";
    $sesion="index.php";
    $ses=$user;
    
}
            else{
                $registro="regis.php";
                $regis="Registrate";
                $sesion="Log-in.html";
    $ses="Login";
                
            }
            
 echo"
          <div class='android-navigation-container'  >
            <nav class='android-navigation mdl-navigatio' >

              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='index.php' >Home</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='catalogo.php'>Catalogo</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='contact.php'>Contactanos</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='informacion.php'>Nosotros</a>
            <a class='mdl-navigation__link mdl-typography--text-uppercase' id='open-modal-login' href='$registro'>$regis</a>
             <a class='mdl-navigation__link mdl-typography--text-uppercase' id='open-modal-login' href='$sesion'>Cuenta</a>
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
  
  <div class="container">
      <form action="registrado.php" method="POST">
    <h1>Registrarse!</h1>
    <p>Por favor llena los datos para registrarte.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    <label for="Nombre"><b>Nombre</b></label>
    <input type="text" placeholder="Ingresa tu Nombre" name="nombre" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repite el Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw-repeat" required>
      <label for="psw-repeat"><b>Tipo de usuario:   </b></label>
       <select name="combo">
    <!-- Opciones de la lista -->
    <option value="1" name="proveedor">Proveedor</option>
    <option value="2" name="usuario"selected>Usuario</option> <!-- Opción por defecto -->
  </select>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <input class="btn" type="submit" name=" " value="Registrarse" style="border-radius: 50px; background: #cbffad;" >
      </form>
  </div>
  
  <div class="container-signin">
    <p>Tienes una cuenta? <a href="Log-in.html">Inicia sesion</a>.</p>
  </div>
<style >
body {
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding-left: 300px;
width:75%;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: black;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}

</style>
    
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
    </div>

 
    <script src="js/material.min.js"></script>
</div>


       

</body>

</html>