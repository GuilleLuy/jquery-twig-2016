<?php
if (!defined('APP_NAME')) {
    trigger_error('APP_NAME is not defined in: ' . __FILE__ . '.', E_USER_ERROR);
}
function getUserLanguage() {  
	global $idioma;
  $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
  return $idioma;  
}
$user_language=getUserLanguage(); 
global $lang;
if($user_language=='es'){ 
	$lang = 'es';
  include '../inc/_es_.php';

} else { 
  $lang = 'en';
  include '../inc/_en_.php';
} 
?>