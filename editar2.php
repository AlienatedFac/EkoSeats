
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
        <?php
error_reporting(0);
            $var1="";
            $proveedor="proveedor";
            $usuario="usuario";
session_start();     
if($_SESSION['usuario'] and $_SESSION['password']){    
    if($_SESSION['tipo']=="usuario")
    {
    $registro="logout.php";
    $regis="Logout";
    $sesion="index.php";
    $ses=$_SESSION['usuario'];
        $cata="Carrito";
        $catalink="carrito.php";
    }
    else
        
    if($_SESSION['tipo']=="proveedor"){
    $registro="logout.php";
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
              
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='informacion.php'>Nosotros</a>";
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
           </div>
        </div>
";
            $Nombre=$_POST['Nombre'];
$Descripcion=$_POST['Descripcion'];
$Precio=$_POST['Precio'];
$Seccion=$_POST['Seccion'];
$Anterior=$_POST['para'];
$id=$_POST['metros'];
            
session_start(); 
$Vendedor=$_SESSION['usuario'];
$conexion = mysqli_connect("localhost", "root", "", "EkoBDD");
    if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
} 
$Existencia=15;
$sql = "update $Anterior set Nombre='$Nombre', Descripcion='$Descripcion', Precio='$Precio' where id=$id";

if ($conexion->query($sql) === TRUE) {
      echo "
      <div class='android-content mdl-layout__content'>
        <a name='top'></a>
        <div class='android-be-together-section1 mdl-typography--text-center'>
          <div class='android-font android-slogan'>EkoSeats.</div>
          <div class='android-font android-sub-slogan'>Tu producto ha sido actualizado satisfactoriamente
</div>";
    
  
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}


    
				
}
   
}
 
   
            ?>
         
          
      </div>
 
    <script src="js/material.min.js"></script>

  </body>
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
</html>
     