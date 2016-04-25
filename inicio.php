<?php 
include('funciones.php'); 

if(usuarioUnico($_POST['usuario'])) 
{ 
die("El usuario ya existe!"); 
} 

elseif(emailUnico($_POST['email'])) 
{ 
die("Ese email ya esta en uso! Utiliza otro."); 
} 

// Resto de tu código.... 

?> 
<!DOCTYPE html>
<html>
<head>
	<title>My Gim</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="css/gym.css">
	<link  rel= "stylesheet"  href= "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >
</head>
<body>
	<style type="text/css">
		body{
		background-image: url(fondo.jpg);
  		background-size: 100% 60em;
  		background-repeat: no-repeat;
}
	</style>
<input type="checkbox" id="spoiler1"></input>
<label for="spoiler1"><i class="fa fa-bars"></i>Login</label>
<div class="spoiler">
	
<form action="login/verificar.php" method="post">
		
<input class="corre" type="text" name="user" placeholder="&nbsp Usuario" required> 
		
<input class="pas" type="password" name="pw" placeholder="&nbsp Contraseña"  maxlength="16" required>
		
<input class="login" type="submit" name="enviar" value="login" >  
		
<img src="img/login.png" class="facebook" type="submit">   
</form>
</div>

<div id="form">
<h1>Registrate</h1>

<form id="myfrom" action="Registro/registrar_c.php" method="post" name="frm"> 

<input class="nombre" type="text" name="nombre" placeholder="&nbsp Nombre" required> 

<input class="apellidos" type="text" name="user" placeholder="&nbsp Usuario" required> 

<input class="correo" type="text" name="email" placeholder="&nbsp Tu correo electrónico" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  required> 

<input class="pass" type="password" name="pw" placeholder="&nbsp Contraseña" maxlength="16" required> 

<div class="acepto"> 
<p>Al hacer clic en Unirme, aceptas las 
<a href="#">Condiciones</a> y que has leído la 
<a href="#">Política de uso de datos</a>, incluido el 
<a href="#">Uso de cookies</a>. 
</p>
</div>
<input class="registrar" type="submit" name="enviar" value="Unirme" >  
</form> 
</div>
</body>
</html>