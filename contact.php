<!DOCTYPE html>
<html lang="en">
<head>
   
    
    
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EkoSeatS</title>

     <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/estilos.css" media="screen">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="icono.ico" />
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
          <div class='android-navigation-container'>
            <nav class='android-navigation mdl-navigatio'>

              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='index.php'>Home</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='catalogo.php'>Catalogo</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='contact.php'>Contactanos</a>
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='informacion.php'>Nosotros</a>
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

       
        

    <div class="main flex">
        <div class="column">

            <div class="white-space-64"></div>

            <div class="contact-info justify-center">
                <div class="container">
                    <div class="row-responsive">
                        <div class="phone">
                            <div class="row align-center">
                                <div class="icon justify-center">
                                    <a href="tel:9983460666"><i class="fas fa-mobile-alt"></i></a>
                                </div>
                                <div class="info auto">
                                    <a href="tel:9983460666">9983460666</a>
                                </div>
                            </div>
                        </div>
                        <div class="email">
                            <div class="row align-center">
                                <div class="icon justify-center">
                                    <a href="mailto:ejemplo@hotmail.com"><i class="fas fa-envelope-open-text"></i></a>
                                </div>
                                <div class="info auto">
                                    <a href="mailto:ejemplo@hotmail.com">ejemplo@hotmail.com</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tel">
                            <div class="row align-center">
                                <div class="icon justify-center">
                                    <a href="tel: 8938291"><i class="fas fa-phone"></i></a>
                                </div>
                                <div class="info auto">
                                    <a href="tel: 8938291">8938291</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="white-space-64"></div>

            <div class="send justify-center">
                <div class="container">
                    <label class="text">ENVIAR UN MENSAJE</label>
                </div>
            </div>

            <div class="namemail justify-center">
                <div class="container">
                    <div class="row-responsive">
                        <div class="input-name">
                            <input class="input-contact" type="text" placeholder="Nombre">
                        </div>
                        <div class="input-email">
                            <input class="input-contact" type="email" placeholder="Correo">
                        </div>
                    </div>
                </div>
            </div>

            <div class="asunto justify-center">
                <div class="container">
                    <div class="row-responsive">
                        <div class="input-asunto">
                            <input class="input-contact" type="text" placeholder="Asunto">
                        </div>
                    </div>
                </div>
            </div>

            <div class="message justify-center">
                <div class="container">
                    <div class="row-responsive">
                        <div class="input-message">
                            <textarea class="input-contact" name="Message" cols="30" rows="10" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="white-space-16"></div>

            <div class="message justify-center">
                <div class="container">
                    <div class="row-responsive">
                        <button class="btn btn-black">ENVIAR</button>
                    </div>
                </div>
            </div>

            <div class="white-space-32"></div>

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
    </div>

    
 
    <script src="js/material.min.js"></script>


</body>
</html>