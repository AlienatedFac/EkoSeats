<?php

$user=$_POST['user'];
$password=$_POST['password'];

session_start();

$conexion = mysqli_connect("localhost", "root", "", "EkoBDD");
$consulta =$conexion->query("SELECT * from ACCESO WHERE Nickname='$user' AND Password='$password'");

if($resultado = mysqli_fetch_array($consulta)){
	$_SESSION['u']=$user;
	echo"Bienvenido,  ";
	echo $_SESSION['u'];
	echo"<br>";
	echo'<a href="Cerrar_Sesion.php">Cerrar Sesion</a>';
}
else{
	header("location:index.html");
	alert("El usuario o contraseña que has introducido son incorrectos.");
	function alert($msg){
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
}
?>