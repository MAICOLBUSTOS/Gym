<?php
 
session_start();
 
mysql_connect('localhost','root');
mysql_select_db('casuringa');
 
// Recogemos el usuario en un Array($usuario)
$result = mysql_query('SELECT * FROM usuarios WHERE usuario = "' . $_SESSION['k_username'] . '"')
  or die(mysql_error());
$usuario = mysql_fetch_array($result);
mysql_free_result($result);
 
// Ahora tenemos que recoger las variables que ha enviado el formulario
// Puedes hacerlo con el método que quieras. Yo por experiencia suelo usar
// este porque en caso de que haya fallos en el envio, protege de errores en el servidor
 
$nuevo_nick = empty($_POST['nick']) ? '' : $_POST['nick'];
 
// Traducción: comprobamos si $_POST['nick'] está vacío, si lo está ponemos una cadena
// vacia para evitar errores, si no ponemos lo que nos hayan enviado.
 
$nueva_password = empty($_POST['password']) ? '' : $_POST['password'];
 
if(empty($nuevo_nick)) {
  echo 'Debes escribir un nick o dejar el que tenías.';
  die();
}
 
if($nuevo_nick != $usuario['usuario']) { // Si el nick ha cambiado....
  mysql_query('UPDATE usuarios SET usuario = "' . $nuevo_nick . '" WHERE usuario = "' . $_SESSION['k_username'] . '"')
    or die(mysql_error());
  echo 'El nick se ha guardado. No te olvides de actualizar $_SESSION para que ';
  echo 'refleje los cambios y podamos seguir encontrando al usuario mediante su nick.<br>';
  $_SESSION['k_username'] = $nuevo_nick;
}
 
if(!empty($nueva_password)) { // Si el usuario ha escrito alguna contraseña...
  mysql_query('UPDATE usuarios SET password = "' . $nueva_password . '" WHERE usuario = "' . $_SESSION['k_username'] . '"')
    or die(mysql_error());
  echo 'La contraseña se ha guardado correctamente.<br>';
}
 
?>
<br><br>
<a href="perfil.php">Volver a Mi Perfil</a>