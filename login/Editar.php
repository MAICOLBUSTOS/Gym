<?php
 
session_start();
 
mysql_connect('localhost','root');
mysql_select_db('casuringa');
 
// Recogemos el usuario en un Array($usuario)
$result = mysql_query('SELECT * FROM usuarios WHERE usuario = "' . $_SESSION['k_username'] . '"')
  or die(mysql_error());
$usuario = mysql_fetch_array($result);
mysql_free_result($result);
 
?>
 
<h1>Editando Mi Perfil</h1>
 
<p>Mostramos los campos de formulario para que editen las cosas.</p>
<p>Fíjate especialmente en que nick y otros ya están rellenados mientras que la 
  contraseña por seguridad NO.</p>
 
<form action="guardar.php" method="post">
  <b>Nick: </b>
  <input type="text" name="nick" id="nick" value="<?php echo $usuario['user']; ?>">
 
  <br>
 
  <b>Contraseña: </b>
  <input type="password" name="password" id="password" value="">
  
  <br><br>
  <input type="submit" value="Guardar datos">
</form>
 
<br />
<i>En una situación perfecta aquí debería haber dos campos de contraseña para que el usuario
  la reescribiese para confirmarla.</i>
 
<br><br>
 
<a href="perfil.php">Cancelar</a>
