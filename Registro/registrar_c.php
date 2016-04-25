<?php  
include("conexion.php");
include("funciones.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw']) &&
isset($_POST['email']) && !empty($_POST['email'])) 

{

	
	$con=mysql_connect($host,$user,$pw)
	or die("problemas al conectar server");

	mysql_select_db($db,$con)
	or die("problemas al conectar db");

	mysql_query("INSERT INTO registro (NOMBRE,USER,PW,EMAIL)
VALUES ('$_POST[nombre]','$_POST[user]','$_POST[pw]','$_POST[email]')",$con);
	echo "datos insertados";

	echo "Nombre".$_POST['nombre']."<br>";
	echo "Usuario".$_POST['user']."<br>";
	echo "Password".$_POST['pw']."<br>";
	echo "E-mail".$_POST['email']."<br>";

}	

?>