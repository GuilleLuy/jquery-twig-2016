<?php 
require_once("../cnx.php");
require_once("../rutinas.inc.php");
header('Content-Type: text/html; charset=utf-8'); 
//
// Variables
//
$idiomas=array("ES", "EN");
//
// Recorrer por idiomas
//
for ($i=0; $i<count($idiomas); $i++) {
	$contenido="";
	//
	// Crear un RS
	//
	mysql_select_db($database_cnx, $cnx);
	$query_rs = "SELECT * FROM idiomas ORDER BY pagina, clave";
	$rs = mysql_query($query_rs, $cnx) or die(mysql_error());
	$pagina_actual="-1";
	while ( $row_rs = mysql_fetch_assoc($rs) ) {
			
		//$valor=str_replace( '"', "'", $row_rs["valor".$idiomas[$i]] );
		
		$valor=$row_rs["valor".$idiomas[$i]];

			$contenido.=sprintf( '$lang["%s"]="%s";'
										, $row_rs["clave"]
										, $valor);
			// 							 

			// $contenido=

			//   fopen("./idioma".$idiomas[$i].".php", "a");
   //      fwrite($contenido, 'Ponele' . PHP_EOL);
        // '$lang["%s"]="%s";'
										//, $row_rs["clave"]
										//, $valor
										//)
			 //. PHP_EOL);

			$contenido.="\r\n";
	}


	$archivo="./idioma".$idiomas[$i].".php";
	@unlink($archivo);
	$header="<?php\r\n";
	$header.="/*\r\n";
//	$header.="Archivo de Lenguaje: ".$idiomas[$i]."\r\n";
	// $header.="produced by: MultiLang Loader 1.0\r\n";	
	// $header.="timestamp: ".date("Ymd H:i:s")."\r\n";		
	$header.="*/\r\n";	
	$trailer="\r\n/*";
	$trailer.="\r\nEnd Of File";	
	$trailer.="\r\n*/";		
	$trailer.="\r\n?>";
	$contenido=$header.$contenido.$trailer;
	error_log( $contenido, 3, $archivo);
	echo "Generado el archivo del idioma: <a href='".$archivo."' target='_blank'>".$idiomas[$i]."</a><br />" ;
}
?>