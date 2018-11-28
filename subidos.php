<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php
        
    echo"<title>Mis Articulos</title>"
      ?>
    <link rel="shortcut icon" href="icono.ico" />

    <!-- Prueba en GitHub desde StarPlatinumUwU -->
      
    <!-- Prueba en GitHub desde AlienatedFac -->
 
    <!-- Estilos -->
 
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/popup.css">
      <link rel="stylesheet" href="css/modal.css">
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
      
<?php
session_start();     
if($_SESSION['usuario'])
{
    $Nombre=$_SESSION['usuario'];
}
else
{
    $Nombre="ERROR";
}
echo"<div class='android-content mdl-layout__content'>
        <a name='top'></a>
        <div class='android-be-together mdl-typography--text-center'>
           
          <div class='android-font android-slogan'>$Nombre</div>
          <div class='android-font android-sub-slogan'>
              <div class='android-card-container mdl-grid'>";
date_default_timezone_set("America/New_York");
$variableejemplo = date("l");
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$secciones= array(Salas, Sillones, Sofa, Mesas, Sillas, Bancos, Credensas, Lamparas, Cojines, Cuadros, Decoracion);
        $salas=$secciones[0];
  
$conexion = mysqli_connect("localhost", "root", "", "EkoBDD");
        for($conatador=0;$conatador<11;$conatador++)
        {
           for($contador=1;$contador<16;$contador++)
                  {
$consulta =$conexion->query("SELECT * from $secciones[$conatador] where id=$contador and vendedor='$Nombre'");
if($resultado = mysqli_fetch_array($consulta)){
   //Guardo los datos de la BD en las variables de php
   $var1 = $resultado["id"];
    $var2 = $resultado["Nombre"];
    $var3 = $resultado["Descripcion"];
    $var4 = $resultado["Precio"];
    $var4 = $resultado["Tipo"];
    
}
               if($var1!="")
               {
                  $secc=$secciones[$conatador];
          echo"<div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
 <img src='images/$secc/$var1.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>$var2</h4>
              </div>
              <div class='mdl-card__supporting-text'>
                <span class='mdl-typography--font-light mdl-typography--subhead'></span>
              </div>
              
              <form  method='POST'>
              <div class='mdl-card__actions'>
               
             <button  type='submit' class='open-button' onclick='' name='borrar' value='$var1'>Eliminar</button>
            <label name='otro' value='$secc'><b></b></label>
             </form>
              <form action='editar.php' method='POST'>
             
             <button class='open-button' onclick=''>Editar</button>
             </form>
              </div>
            </div>            
            ";  
               }

                $var1 = "";
    $var2 = "";
    $var3 = "";
    $var4 = "";
    $var4 = "";
    
              
            }  
        }
          $borrar=$_POST['borrar'];
        $otro=$_POST['otro'];
        echo "<script type=\"text/javascript\">alert(\"$otro\");</script>";
        $sql = "DELETE FROM $otro WHERE id=$borrar";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
       
      echo"
      
      <script language='javascript' type='text/javascript'>
      // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its 'alt' text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
img.onclick = function(){
    modal.style.display = 'block';
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = 'none';
    </script>
    
}";

          
?>
              

</div>
<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
        
       <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="salas6.jpg" alt="Avatar" class="avatar">
      <h1 style="text-align:center">Sala Madera</h1>
    </div>

    <div class="container">
      <p  style="text-align:center" class="mdl-typography--font-light">Disfruta del mayor confort dentro de tu hogar con la Sala Elisa de 3 piezas, que te brindará una máxima experiencia en bienestar y descanso. Decora y complementa tu tranquilidad con la mejor opción que elektra.com.mx tiene para ti. Sólo venta en línea.
</p>
<p style="text-align:center" class="mdl-typography--font-light">Otra wea
</p>
                   
      <button type="submit">Realizar pedido</button>
         <button type="submit">Agregar al Carrito</button>
                 


    </div>
    
  </form>
  
</div>

<script>
// If user clicks anywhere outside of the modal, Modal will close
function openForm() {
    document.getElementById('myForm').style.display = "block";
}

function closeForm() {
    document.getElementById('myForm').style.display = "none";
}
</script>
 <!-- Aqui termina sala redonda-->      
        
          <div class="android-font android-create-character">
            <a href=""><img src="images/andy.png"> </a>
          </div>
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
 
    <script src="js/material.min.js"></script>


  </body>
</html>