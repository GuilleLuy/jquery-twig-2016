<?php
include '__lang.php';
require_once '../config.php';
include APP_PATH . '/inc/_'.$lang.'_.php';

if (!defined('APP_NAME')) {
    trigger_error('APP_NAME is not defined in: ' . __FILE__ . '.', E_USER_ERROR);
}

$template = $twig->loadTemplate($app['template'] . $template_twig_secciones . basename(__FILE__, '.php') . '.twig');
