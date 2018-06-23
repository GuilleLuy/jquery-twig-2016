<?php

define('APP_NAME', 'Yeloy');
define('APP_PATH', __DIR__);
define('APP_INCLUDE_PATH', __DIR__ . '\inc');

$www = '/public_html/';
$path_twig = '../vendor/';
$templates_twig_path ='/templates/twig/';
$templates_php_path ='/templates/php/';
$template_twig_secciones = ''; // /secciones/';

$templates_php_mod_path = '/templates/php/modules/';

$img_url = '/media/img/';
$img_trab_url = '/media/img/trabajos/';
$img_gal_url = '/media/img/trabajos/gal/';

$video_url = '/media/video/';
$video_trab_url = '/media/video/trabajos/';

define ('THUMB_SIZE', '-192x108');
define ('MED_SIZE', '-900x506');
define ('BIG_SIZE', ''); // -1366x768

define ('AUTOR_WEB','http://www.luy.com.ar/');
define ('CLIENTE_WEB','www.luy.com.ar');
define ('CLIENTE_NOMBRE','Guillermo Luy');
define ('CLIENTE_DIRECCION','Pasaje Pasteur 6535');
define ('CLIENTE_CP','S3004KBA ');
define ('CLIENTE_CIUDAD','Santa Fe');
define ('CLIENTE_PROVINCIA','Provincia de Santa Fe');
define ('CLIENTE_CIUDAD_MIN','Santa Fe');
define ('CLIENTE_PROV_MIN','Santa Fe');
define ('CLIENTE_TEL_PREFIJO', '+540342');
define ('CLIENTE_TEL1','155003958');
/* HTML ENTITIES hecho con:   http://wbwip.com/wbw/emailencoder.html    https://mothereff.in/html-entities */
/* email 1: guillermo@luy.com.ar */
$cliente_mail_1 = '&#103;&#117;&#105;&#108;&#108;&#101;&#114;&#109;&#111;&#064;&#108;&#117;&#121;&#046;&#099;&#111;&#109;&#046;&#097;&#114;';
/* email 2: guillermoluy@gmail.com */
$cliente_mail_2 = '&#103;&#117;&#105;&#108;&#108;&#101;&#114;&#109;&#111;&#108;&#117;&#121;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;';
$telefono = '543425033958';

?>