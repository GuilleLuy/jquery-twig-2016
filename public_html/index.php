<?php 

function getUserLanguage() {  
	global $idioma;
  $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
  return $idioma;  
}
$user_language=getUserLanguage(); 
global $lang;
if($user_language=='es'){ 
  $lang = 'es';
  header('location: /bienvenido/' );

} else { 
  $lang = 'en';
  header('location: /welcome/' );
}
?>