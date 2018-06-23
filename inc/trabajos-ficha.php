<?php 
include '../config.php';
include '_'.$lang.'_.php';

 $host= $_SERVER["HTTP_HOST"];
 $url= $_SERVER["REQUEST_URI"];

function trabajos_ficha(){
	global $id;
	$id = $id;
	$data= array();
	$con = Db::connect();
	$query = $con->query("SELECT * FROM trabajos WHERE id=$id");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data[]=$r;
		}
	}
	return $data;
}
$trabajos_ficha = trabajos_ficha();
$ficha_link_es = trabajos_ficha();



class DbEN{
	    public static function connect(){
		    $host="localhost";
		    $user="root";
		    $password="";
		    $db ="guillelo_2018_en";
		    return new mysqli($host,$user,$password,$db);
	    }
    }

function ficha_link_en(){
	  global $id;
	  $id = $id;
	  $data= array();
	  $con = DbEN::connect();
	  $query = $con->query("SELECT * FROM trabajos WHERE id=$id");
	  if($query->num_rows>0){
		  while ($r=$query->fetch_array()) {
			  $data[]=$r;
		  }
	  }
	  return $data;
  }
$ficha_link_en = ficha_link_en();













function trabajos_gallery(){
	global $id;
	$id = $id;
	$data= array();
	$con = Db::connect();
	$query = $con->query("SELECT * FROM trabajos WHERE id=$id");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
      $contador = 1;
      $limite = $galeria = $r['galeria'] + '1';
      while($contador < $limite){
        $valor = $contador++;
        $data[]=$r;
	    }
    }
	return $data;
  }
}
$trabajos_gallery = trabajos_gallery();

if (!defined('APP_NAME')) {
    trigger_error('APP_NAME is not defined in: ' . __FILE__ . '.', E_USER_ERROR);
}
$template = $twig->loadTemplate($app['template'] . $template_twig_secciones . basename(__FILE__, '.php') . '.twig');

?>