<?php
session_start();
include ('conexion.php');
if(isset($_POST['user']) && !empty($_POST['user']) &&
isset($_POST['pw']) && !empty($_POST['pw'])) {
    
$con=mysql_connect($host,$user,$pw) or die ('Problemas con server.');
    mysql_select_db($db,$con) or die ('Problemas con db');
$sel =mysql_query("SELECT USER,PW FROM registro WHERE USER='$_POST[user]'",$con);
$sesion = mysql_fetch_array($sel);
if($_POST['pw'] == $sesion['PW']){
$_SESSION['username'] = $_POST['user'];
echo '<meta http-equiv="Refresh" content="0;URL=http://localhost:8000/proyecto/login/perfil.php">';
print '<div><a href="perfil.php">click para empezar a entrenar y estar saludable</a><br/></div>';
 
} else {
    print 'Contrasena o usuario incorrectos.<br />';
    print '<a href="http://localhost:8000/proyecto/inicio.html">Prueba de nuevo!</a>';    
    
}
} else {
    echo 'Tienes que rellenas todos los campos!<br />';
    print '<a href="proyecto/inicio.html">Intenta lo de nuevo!</a>';    
    
}
?>
<style type="text/css">
		body{
		background-color: #0DAED7;
		text-align: center;
		}
		h1{
			background-color: #FFF;
			width: 800px;
			height: 100px;
			border-radius: 100px;
			margin-top: 100px;
			margin: 200px;
		}
		div{
			background-color: #FFF;
			border-radius: 20px 100px 100px 20px;
			width: 600px;
			height: 50px;
			margin: 300px;
			margin-top: 0px;
		}
		div a{
			color: #000;
			text-decoration: none;
			margin: 4px;
		}
		img{

	</style>
