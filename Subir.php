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
                <form action="search.php" method="POST">
              <input class="mdl-textfield__input" type="text" placeholder="Buscar" id="search-field" name="buscado"/>
                    <input class="mdl-textfield__input" type="submit"  name="buscar" value=""/>
                </form>
                
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
              <a class='mdl-navigation__link mdl-typography--text-uppercase' href='contact.php'>Contacto</a>
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

  </div>
         </div>

 <div class="container">
     <form method="post" action="subir2.php" enctype="multipart/form-data">


  <h1 style="padding-left: 35%;">Sube tu producto!</h1>
    <p style="padding-left: 35%;">Por favor llena los datos correctamente para poder subir el producto.</p><br>

    <label for="Nombre"><b >Nombre del Producto:</b></label><br>
    <input type="text"   placeholder="Producto" name="Nombre" required >
    <label for="Descripcion" ><b>Descripcion del Producto:</b></label><br>
    <textarea class="input-contact"    name="Descripcion" cols="90" rows="10" placeholder="Descripcion"></textarea> <br>
    <label for="Precio" ><b>Precio:</b></label><br>
    <input type="text"  placeholder="Precio$$$" name="Precio" required >
    <br>

      <label for="Seccion" ><b>Tipo de Producto:(Salas,Sofa, Sillones, Mesas, Sillas, Bancos, Credensas, Lamparas, Cojines, Cuadros o Decoracion)   </b></label>
       
         <input type="text"  placeholder="Seccion" name="Seccion" required >
  <br>
  <br>  

                <div class="file-field input-field">
                  <div class="btn">
                    <b>Seleccion imagen:</b>
                    <br>
                    <br>
                    <input type="file" name="myfile" />
                  </div>
                  <div class="file-path-wrapper">
                   
                  </div>
                </div>
          <input type="submit" value="Enviar">
              </form>
              <br>
              <br>
     
     

    

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


 
    <script src="js/material.min.js"></script>
</div>



       

</body>
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


</html>