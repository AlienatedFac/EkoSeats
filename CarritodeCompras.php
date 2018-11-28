<?php
  SESSION_START();
  $conexion=mysqli_connect("localhost", "root", "", "Ekoseat");
     if(isset($_SESSION['Carrito'])){

     if(isset($_GET['Id'])){

      $Arreglo=$_SESSION['Carrito'];
      $Encontro=False;
      $Numero=0;
      for($i=0;$i<count($Arreglo);$i++){
        if($Arreglo[$i]['Id']==$_GET['Id']){
          $Encontro=True;
          $Numero=$i;
        }
      }

      if($Encontro==True){
        $Arreglo[$Numero]['cantidad']=$Arreglo[$Numero]['cantidad']+1;
        $_SESSION['Carrito']=$Arreglo;
      }else{
              if(isset($_GET['Id'])){
        $Nombre="";
        $Precio=0;
        $Imagen="";
        $Re=$conexion->query("select * from Productos WHERE Id=".$_GET['Id']);
         while ($F=mysqli_fetch_array($Re)) {
          $Nombre=$F['Nombre'];
          $Precio=$F['Precio'];
          $Imagen=$F['Imagen'];
          } 
          $datosnuevos=array('Id'=>$_GET['Id'],
                            'nombre'=>$Nombre,
                            'precio'=>$Precio,
                            'imagen'=>$Imagen,
                            'cantidad'=>1);
          array_push($Arreglo, $datosnuevos);
                  $_SESSION['Carrito']=$Arreglo;

     }
   }
 }else{
      if(isset($_GET['Id'])){
        $Nombre="";
        $Precio=0;
        $Imagen="";
        $Re=$conexion->query("select * from Productos WHERE Id=".$_GET['Id']);
         while ($F=mysqli_fetch_array($Re)) {
          $Nombre=$F['Nombre'];
          $Precio=$F['Precio'];
          $Imagen=$F['Imagen'];
          } 
          $Arreglo[]=array('Id'=>$_GET['Id'],
                            'nombre'=>$Nombre,
                            'precio'=>$Precio,
                            'imagen'=>$Imagen,
                            'cantidad'=>1);
      $_SESSION['Carrito']=$Arreglo;
    }
  }
}

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

      <title>Carrito de Compras</title>

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
            <div class="content">
                  

<section>
    <?php
      $Total=0;
      if(isset($_SESSION['Carrito'])){
        $datos=$_SESSION['Carrito'];
        $Total=0;
        for($i=0;$i<count($datos);$i++){
          ?>
          <div class="Producto">
            <CENTER>
              <img src="./Productos/<?php echo $datos[$i]['imagen'];?>"><br>
              <span><?php echo $datos[$i]['nombre']?></span><br>
              <span>Precio: <?php echo $datos[$i]['precio']?></span><br>
              <span>Cantidad <input type="text" value="<?php echo $datos[$i]['Cantidad']?>"></span><br>
        <span>Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>         
            </CENTER>
          </div>
          <?php
          $Total=($datos[$i]['Cantidad']+$datos[$i])+$Total;
        }
      }else{
        echo "<center><h2>¡Aún no has añadido productos!</h2></center>";
      }
      echo '<center><h2>Total: '.$Total.' </h2></center>';
    ?>
    <center><a href="./">Ver catalogo</a></center>

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