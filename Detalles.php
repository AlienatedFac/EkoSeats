<?php
//  START_SESSION();
?>


<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="description" content="Web Developing">
      <meta name="keyword" content="Bio, Eco, Nature, Eckoseats">
      <meta name="author" content="Araujo, Tejeda, Garza">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Carrito</title>

      <link rel="stylesheet" type="text/css" href="Carro.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=es" rel="stylesheet"media="screen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"media="screen">
    <link rel="stylesheet" href="css/material.min.css"media="screen">
    <link rel="stylesheet" href="css/indexcosaconflechas.css" media="screen">
    <link rel="stylesheet" href="css/styles.css" media="screen">
    <link rel="shortcut icon" href="icono.ico" media="screen">
  </head>

 <body>
      <div class="wrapper">
            <header>
                  <nav>
                        <div class="menu-icon">
                           <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              LOGO
                        </div>

                        <div class="menu">

                            <ul>
                              <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li> 
                              <li><a href=""><i class="fa fa-suitcase" aria-hidden="true"></i> Trabajos</a></li>
                              <li><a href=""><i class="fa fa-cubes" aria-hidden="true"></i> Proyectos</a></li>
                              <li><a href=""><i class="fa fa-desktop" aria-hidden="true"></i> Servicios</a></li>
                              <li><a href=""><i class="fa fa-truck" aria-hidden="true"></i> Entregas</a></li>
                              <li><a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i> Pedidos</a></li>
                              <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> Contacto</a></li>
                                	<div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" placeholder="Buscar" id="search-field" />
            </div>
          </div>
                         </ul>
                    </nav>
             </header>
            
  <section>
  <?php
  
    $conexion=mysqli_connect("localhost", "root", "", "Ekoseat");
    $Re=$conexion->query("select * from Productos WHERE Id=".$_GET['Id'])or die(mysqli_error());
    while ($F=mysqli_fetch_array($Re)) {
    ?>


      <center>
        <img src="./Productos/<?php echo $F['Imagen'];?>"><br>
        <span><?php echo $F['Nombre'];?></span><br>
        <span>Precio: <?php echo $F['Precio'];?></span><br>
        <a href="./CarritodeCompras.php?Id=<?Php $F['Id'];?>">Añadir al Carro</a>
      </center>

  <?php
    }
  ?>
</section>

  
            </div>
      </div>
      <script type="text/javascript">
      // Menu-toggle button
      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");

            });
      });
      // Scrolling Effect
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
      </script>
 </body>