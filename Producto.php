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
<link rel="stylesheet" href="css/indexcosaconflechas.css" media="screen">
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
              <input class="mdl-textfield__input" type="text" placeholder="Buscar" id="search-field" />
            </div>
          </div>
              <!-- Menú -->
        <?php
error_reporting(0);
$user=$_POST['user'];
$password=$_POST['password']; 
            $var1="";
            $proveedor="proveedor";
            $usuario="usuario";
session_start();
            if(empty($user and $password))
{
   $user=$_SESSION['usuario'];
$password=$_SESSION['password'];
    
}

$conexion = mysqli_connect("localhost", "root", "", "EkoBDD");
$consulta =$conexion->query("SELECT * from ACCESO WHERE Nombre='$user' AND Password='$password'");       
if($resultado = mysqli_fetch_array($consulta)){
$var1=$resultado['Tipo'];    
    $_SESSION['usuario']=$user;
    $_SESSION['tipo']=$var1;
    $_SESSION['password']=$password;
    if($var1=="usuario")
    {
    $registro="logout.php";
    $regis="Logout";
    $sesion="index.php";
    $ses=$user;
        $cata="Carrito";
        $catalink="carrito.php";
    }
    else
        
    if($var1=="proveedor"){
    $registro="logout.php";
    $regis="Logout";
    $sesion="subidos.php";
    $ses=$user; 
         $cata="Subir";
        $catalink="subir.php";
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
              
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='informacion.php'>Nosotros</a>";
            }
           
            echo"
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='contact.php'>Contacto</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='$catalink'>$cata</a>
            <a class='mdl-navigation__link mdl-typography--text-uppercase' id='open-modal-login' href='$registro'>$regis</a>
             <a class='mdl-navigation__link mdl-typography--text-uppercase' id='open-modal-login' href='$sesion' >$ses</a>
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

      
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("images/mueblec.jpg");

    min-height: 550px;
    width: 800px;
left: 50px;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Add styles to the form container */
.container {

    position: relative;
left:  805px;
    margin: 20px;
    max-width:650px;
    height: 600px;
    padding: 70px;
    background-color: #ecffe1;
    background-position: center; 
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {

    
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: 54%;
    border-radius: 50px;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 2.5;
}

</style>

<?php
    $valor=$_POST['variable'];
    $conexion = mysqli_connect("localhost", "root", "", "ekobdd" );
$consulta =$conexion->query("SELECT * from $Nombre WHERE id= $valor");
if($resultado = mysqli_fetch_array($consulta)){
 
   $var1 = $resultado["id"];
    $var2 = $resultado["Nombre"];
    $var3 = $resultado["Descripcion"];
    $var4 = $resultado["Precio"];
    $var5 = $resultado["Existencia"];
    $var6 = $resultado["Vendedor"];
    

    echo"$valor si esta pasando variable";}
    echo"

<br>
<br>
<br>
<br>
<br>

        

<h2 align='center'>Descripcion de Producto</h2>
<br>
<div class='bg-img'>
    
  <form class='container' align='center'>
    <h1 >$var2</h1>

    <label for='email'><b>$var3</b></label>
    <br>
    <br>
    <label for='psw'><b>Precio: $var4 MXN</b></label>
    <label for='ven'><b>Vendedor: $var6</b></label>

    <button type='submit' class='btn'>Agregar al carrito</button>
  </form>
</div>

";
?>



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
           
         
            
            <a class="android-link mdl-typography--font-light" href="">Blog</a>
            <a class="android-link mdl-typography--font-light" href="">Política de Privacidad</a>
          </div>

        </footer>
      


    <script src="js/material.min.js"></script>

</body>
</html>
