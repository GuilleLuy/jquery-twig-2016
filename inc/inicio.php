<?php 
// conecta a destacados
function db_trab_dest(){
	$data= array();
	$con = Db::connect();
//	mysql_query("SET NAMES 'utf8'");
	$query = $con->query("SELECT * FROM trab_dest ORDER BY id DESC");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data[]=$r;
		}
	}
	return $data;
}
$trabajos_dest = db_trab_dest();

require_once $path_twig.'autoload.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem();
$loader->addPath( APP_PATH . $templates_twig_path, 'theme' );
$loader->addPath( APP_PATH . $templates_twig_path );
$twig = new Twig_Environment($loader);
$template = $twig->loadTemplate(  $template_twig_secciones . basename(__FILE__, '.php') . '.twig');
require_once '/_global_vars.php';