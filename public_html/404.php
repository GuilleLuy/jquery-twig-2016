<?php
require_once __DIR__ . '/../config.php';
include APP_INCLUDE_PATH . '/no-twig/head-inc.php';

$error_n = $err_404;
$texto_e = $err_404_t_e;
$texto_e_2 = $err_404_t_e_2;
$texto_largo = $err_404_t_largo;

include APP_INCLUDE_PATH . '/no-twig/header.php';
include APP_INCLUDE_PATH . '/no-twig/body.php';
include APP_INCLUDE_PATH . '/no-twig/js.php';
?>