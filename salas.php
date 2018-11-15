<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ejemplo de Material Design">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SALAS</title>
    <link rel="shortcut icon" href="icono.ico" />

    <!-- Prueba en GitHub desde StarPlatinumUwU -->
      
    <!-- Prueba en GitHub desde AlienatedFac -->
 
    <!-- Estilos -->
 
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css">
    <link rel="stylesheet" href="css/styles.css">
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
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="index.html">Home</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Entregas</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Uploads</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="informacion.html">Informacion</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="contactos.html">Contactos</a>
            </nav>
          </div>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">Cuenta</li>
            <li class="mdl-menu__item">Usuario</li>
            <li class="mdl-menu__item">Administrador</li>
            <li class="mdl-menu__item">Vendedor</li>
          </ul>
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
          <span class="mdl-navigation__link" href="">Salas</span>
          <a class="mdl-navigation__link" href="salas.html">Salas </a>
          <a class="mdl-navigation__link" href="Sillones.html">Sillones</a>
          <a class="mdl-navigation__link" href="">Sofa</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Comedores</span>
          <a class="mdl-navigation__link" href="">Mesas</a>
          <a class="mdl-navigation__link" href="">Sillas</a>
          <a class="mdl-navigation__link" href="">Bancos</a>
          <a class="mdl-navigation__link" href="credensas.html">Credensas</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Accesorios</span>
          <a class="mdl-navigation__link" href="">Lamparas</a>
          <a class="mdl-navigation__link" href="">Cojines</a>
          <a class="mdl-navigation__link" href="">Cuadros</a>
          <a class="mdl-navigation__link" href="">Decoracion</a>
        </nav>
      </div>

      <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together mdl-typography--text-center">
          <div class="android-font android-slogan">SALAS</div>
          <div class="android-font android-sub-slogan">
              <div class="android-card-container mdl-grid">
<?php
date_default_timezone_set("America/New_York");
$variableejemplo = date("l");

            
            echo"<div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas1.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>$variableejemplo</h4>
              </div>
              <div class='mdl-card__supporting-text'>
              </div>
              <div class='mdl-card__actions'>
               <button onclick='document.getElementById('modal-wrapper').style.display='block'' style='width:200px; margin-top:200px; margin-left:145px;'>
Ver producto</button>

              </div>
            </div>
            <!-- Aqui termina la tarjeta-->

            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/sala2.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>$variableejemplo</h4>
              </div>
              <div class='mdl-card__supporting-text'>
                
              </div>
              <div class='mdl-card__actions'>
                 <button onclick='document.getElementById('modal-wrapper').style.display='block'' style='width:200px; margin-top:200px; margin-left:145px;'>
Ver producto</button>
              </div>
            </div>

            <div class='ml-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas3.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>$variableejemplo</h4>
              </div>
              <div class='mdl-card__supporting-text'>
              </div>
              <div class='mdl-card__actions'>
                 <button onclick='document.getElementById('modal-wrapper').style.display='block'' style='width:200px; margin-top:200px; margin-left:145px;'>
Ver producto</button>
              </div>
            </div>



            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas4.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>$variableejemplo</h4>
              </div>
              <div class='mdl-card__supporting-text'>
              </div>
              <div class='mdl-card__actions'>
                 <button onclick='document.getElementById('modal-wrapper').style.display='block'' style='width:200px; margin-top:200px; margin-left:145px;'>
Ver producto</button>
              </div>
            </div>

            <br>
            <br>


            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas5.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>$variableejemplo</h4>
              </div>
              <div class='mdl-card__supporting-text'>
              </div>
              <div class='mdl-card__actions'>
               <button onclick='document.getElementById('modal-wrapper').style.display='block'' style='width:200px; margin-top:200px; margin-left:145px;'>
Ver producto</button>
              </div>
            </div>
 <!-- Aqui empieza SALA REDONDA-->
            <div class='mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp'>
              <div class='mdl-card__media'>
                <img src='images/salas6.jpg'>
              </div>
              <div class='mdl-card__title'>
                 <h4 class='mdl-card__title-text'>$variableejemplo</h4>
              </div>";
?>
              
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: auto;
  font-size:20px;
    border-radius: 25px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
  height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 120%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>
</style>

              <div class="mdl-card__actions">

<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:200px; margin-left:145px;">
Ver producto</button>

</div>
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

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
 <!-- Aqui termina sala redonda-->      
          
          
          </div>
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
