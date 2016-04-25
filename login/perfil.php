<?php
 session_start();
include ('conexion.php');
 $con =  mysql_connect($host,$user,$pw) or ('Problemas con server.');
    mysql_select_db($db,$con) or die ('Problemas con db');
// Recogemos el usuario en un Array($usuario)
$result = mysql_query('SELECT USER FROM registro WHERE USER = "' . $_SESSION['username'] . '"',$con)
  or die(mysql_error());
$sesion = mysql_fetch_array($result);
mysql_free_result($result);
if(isset($_SESSION['username'])) {
echo $_SESSION['username'];  
echo "<br><a href=destruir.php>Cerrar Sesion</a>";
}else{
echo "no puedes ver esta pagina, registrate e inicia sesion";
}

?>
<!doctype html>
<html>
	<head>
		<title>Subir imagen a la base de datos</title>
	</head>
	<body>
		<form action="subir.php" method="POST" enctype="multipart/form-data">
		    <label for="imagen">Imagen:</label>
		    <input type="file" name="imagen" id="imagen" />
		    <input type="submit" name="subir" value="Subir"/>
		</form>
	</body>
</html>
