<?php

// url switch
$en_url=$url_works_switch;

// $host= $_SERVER["HTTP_HOST"];
// $url= $_SERVER["REQUEST_URI"];


function db_categories($cat_db_id){
	global $cat_db_id;
	$cat_db_id = $cat_db_id;
  $data= array();
	$con = Db::connect();
	$query = $con->query("SELECT * FROM category WHERE category_id is NULL");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data[]=$r;
			$cat_db_id=$r['id'];


		}
	}
	return $data;
}
$db_categories = db_categories($cat_db_id);


function db_trabajos(){
	$data= array();
	$con = Db::connect();
	$query = $con->query("SELECT * FROM trabajos ORDER BY fecha DESC");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {  
			$data[]=$r;
		}
	}
	return $data;
}
$db_trabajos = db_trabajos();


if (!defined('APP_NAME')) {
    trigger_error('APP_NAME is not defined in: ' . __FILE__ . '.', E_USER_ERROR);
}
$template = $twig->loadTemplate($app['template'] . $template_twig_secciones . basename(__FILE__, '.php') . '.twig');

?>