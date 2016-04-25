<?php 
function usuarioUnico($user) 
{ 
$user=$user; 
$consulta = "SELECT USER FROM registro WHERE USER = '" . $usuario ."' "; 
$res = mysql_query($consulta); 
$num = mysql_num_rows($res); 

if ($num > 0) 
return true; 
return false;	
} 

function emailUnico($email) 
{ 
$email=$email; 
$consulta = "SELECT COUNT(*) as NUMBER FROM registro WHERE email = '" . $email ."' "; 
$res = mysql_query($consulta); 
$num = mysql_result($res,0,"NUMBER"); 

if ($num > 0) 
return true; 
return false;	
} 
?> 




