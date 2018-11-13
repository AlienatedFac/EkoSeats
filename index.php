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
          <span class="mdl-navigation__link" >Salas</span>
          <a class="mdl-navigation__link" href="salas.html">Salas </a>
          <a class="mdl-navigation__link" href="sillones.html">Sillones</a>
          <a class="mdl-navigation__link" href="">Sofa</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Comedores</span>
          <a class="mdl-navigation__link" href="">Mesas</a>
          <a class="mdl-navigation__link" href="">Sillas</a>
          <a class="mdl-navigation__link" href="">Bancos</a>
          <a class="mdl-navigation__link" href="Credensas.html">Credensas</a>
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
<?php
date_default_timezone_set("America/New_York");
$dia = date("l");
            echo "<div class='android-screens'>";
            echo"<div class='android-wear android-screen'>";
             echo "<a class='android-image-link' href=''>";
               echo "<img class='android-screen-image' src='images/wear.jpg'>";
                
              echo"</a>";
            echo"<a class='android-link mdl-typography--font-regular mdl-typography--text-uppercase' href=''>$dia</a>";
            echo"</div>";
            
            echo"<div class='android-phone android-screen'>
              <a class='android-image-link' href=''>
                <img class='android-screen-image' src='images/silla.jpg'>
              </a>
              <a class='android-link mdl-typography--font-regular mdl-typography--text-uppercase' href=''>$dia</a>
            </div>
            <div class='android-tablet android-screen'>
              <a class='android-image-link' href=''>
                <img class='android-screen-image' src='images/si2.jpg'>
              </a>
              <a class='android-link mdl-typography--font-regular mdl-typography--text-uppercase' href=''>$dia</a>
            </div>
            <div class='android-tv android-screen'>
              <a class='android-image-link' href=''>
                <img class='android-screen-image' src='images/mesa.jpg'>
              </a>
              <a class='android-link mdl-typography--font-regular mdl-typography--text-uppercase' href=''>$dia</a>
            </div>
            <div class='android-auto android-screen'>
              <a class='android-image-link' href=''>
                <img class='android-screen-image' src='images/mueble5.jpg'>
              </a>
              <a class='android-link mdl-typography--font-regular mdl-typography--text-uppercase mdl-typography--text-left' href=''>$dia</a>
            </div>
          </div>
        </div>";
                ?>
        <div class="android-wear-section">
          <div class="android-wear-band">
            <div class="android-wear-band-text">
              <div class="mdl-typography--display-2 mdl-typography--font-thin">Recomendado</div>
              <p class="mdl-typography--headline mdl-typography--font-thin">
               Credensa de Madera Con Puerta Corredisa
              </p>
              <p>
                <a class="mdl-typography--font-regular mdl-typography--text-uppercase android-alt-link" href="credensas.html">
                  VER PRODUCTO&nbsp;<i class="material-icons">chevron_right</i>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="android-customized-section">
          <div class="android-customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">OTROS PRODUCTOS</div>
            <p class="mdl-typography--font-light">
              Descripciones
              <br>
              <a href="" class="android-link mdl-typography--font-light">Enlace</a>
            </p>
          </div>
          <div class="android-customized-section-image"></div>
        </div>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">Mas de Ekoseats</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/salas1.jpg">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Tipo madera</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Sala color madera reciclada</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="salas.html">
                   VER
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/sala2.jpg">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Sala Color Blanco</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Sala de Madera Reciclada con tres piezas</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="salas.html" target="_blank">
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/salas6.jpg">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Sala Redonda</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Sala Color Azul con 4 piezas </span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="salas.html">
                   VER
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="images/salas4.jpg">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Sala Junta</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">Sala Baja Con 4 Cojines, incluye una pequeña mesa</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="salas.html">
                   VER
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
          </div>
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
