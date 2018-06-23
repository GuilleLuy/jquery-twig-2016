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
  include APP_PATH . '/inc/_'.$lang.'_.php';

} else { 
  $lang = 'en';
  include APP_PATH . '/inc/_'.$lang.'_.php';
}

require_once '../config.php';


if (!defined('APP_NAME')) {
    trigger_error('APP_NAME is not defined in: ' . __FILE__ . '.', E_USER_ERROR);
}

$template = $twig->loadTemplate($app['template'] . $template_twig_secciones . basename(__FILE__, '.php') . '.twig');
