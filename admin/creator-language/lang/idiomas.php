<?php 
require_once("../cnx.php");
require_once("../rutinas.inc.php");

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_cnx, $cnx);
// if (isset( $_GET['tots'])) { 
	$query_rsIdiomas = "SELECT * FROM idiomas  order by idiomaID desc";
// } else {
// 	$query_rsIdiomas = "SELECT * FROM idiomas  where valorES='' or valorEN='' or valorCA='' or substring(valorEN,1,2)='EN' order by idiomaID desc";
//}
$rsIdiomas = mysql_query($query_rsIdiomas, $cnx) or die(mysql_error());
$row_rsIdiomas = mysql_fetch_assoc($rsIdiomas);
$totalRows_rsIdiomas = mysql_num_rows($rsIdiomas);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MultiLang Loader</title>
<style>
.rojo { color:#F00;}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
						   
	$('textarea').keyup(function() {	
		 id=this.id;
 		 auxiliar=$('#'+id).attr('label');		 								 
		  identificador='#txt_estado_' + auxiliar;
		  $(identificador).html('modificado').addClass('rojo');		
  		  identificador='#estado_' + auxiliar;
  		  $(identificador).val('1');
	});	
	
	$('input').click(function() {	
		id=this.id;
 		 auxiliar=$('#'+id).attr('rel');		 								 
		  identificador='#btnAceptar_' + auxiliar;
		 //_log(identificador);
		// update a la bbdd 
		valorES='#es_' + auxiliar;
		valorEN='#en_' + auxiliar;
//		valorDE='#de_' + auxiliar;
		
		valorES=$(valorES).val();
		valorEN=$(valorEN).val();
//		valorDE=$(valorDE).val();
		
		$datos="id="+auxiliar+"&valorES="+valorES+"&valorEN="+valorEN; //+"&valorDE="+valorDE;
		//_log($datos);
		$.post('ajax.gateway.php', $datos,
			function (resp) {
			//resp[0]
				if (resp[0]=="0") {
					identificador='#txt_estado_' + auxiliar;
					//_log(identificador)
					 $(identificador).html("...").removeClass('rojo');
					 identificador='#estado_' + auxiliar;
					 $(identificador).val('0');					
				}

			}, "json");	
		
		
		// Vaciar 


	});	
	

});

// function _log( que ) {
// 	if ( typeof loadFirebugConsole == 'function' ) { 	// Ver si existe la función que carga el consola
// 		console.log(que); // Mostrar el log
// 	} 
// }


</script>
</head>

<body>
<?php ?><p><?php echo $totalRows_rsIdiomas ;?></a></p><?php ?>
<form id="form1" name="form1" method="post" action="">
  <br />
  <table width="200" border="0" cellpadding="5" cellspacing="0">
    <tr>
      <td>KEY</td>
      <td>ES</td>
      <td>EN</td>

      <td>&nbsp;</td>
    </tr>
    <div id="contenido">
    <?php do  { 
 echo  $row_rsIdiomas['clave']; 
    	?>

      <tr>
        <td>
          <textarea name="es_<?php echo $row_rsIdiomas['clave']; ?>" id="es_<?php echo $row_rsIdiomas['clave']; ?>" cols="20" rows="3" label="<?php echo $row_rsIdiomas['clave']; ?>"><?php echo $row_rsIdiomas['clave']; ?></textarea>
        </td>
        <td><label>
          <textarea name="es_<?php echo $row_rsIdiomas['idiomaID']; ?>" id="es_<?php echo $row_rsIdiomas['idiomaID']; ?>" cols="20" rows="3" label="<?php echo $row_rsIdiomas['idiomaID']; ?>"><?php echo $row_rsIdiomas['valorES']; ?></textarea>
        </label></td>
        <td><textarea name="en_<?php echo $row_rsIdiomas['idiomaID']; ?>" id="en_<?php echo $row_rsIdiomas['idiomaID']; ?>" cols="20" rows="3" label="<?php echo $row_rsIdiomas['idiomaID']; ?>"><?php echo $row_rsIdiomas['valorEN']; ?></textarea></td>

        <td>
        <input name="estado_<?php echo $row_rsIdiomas['idiomaID']; ?>" type="hidden" value="" id="estado_<?php echo $row_rsIdiomas['idiomaID']; ?>"/>
          <div id="txt_estado_<?php echo $row_rsIdiomas['idiomaID']; ?>">...</div><br />        
        <input name="btnAceptar_<?php echo $row_rsIdiomas['idiomaID']; ?>" type="button" class="botones" id="btnAceptar_<?php echo $row_rsIdiomas['idiomaID']; ?>" value="Actualizar" rel="<?php echo $row_rsIdiomas['idiomaID']; ?>" /></td>
      </tr>
      <?php } 

      while ($row_rsIdiomas = mysql_fetch_assoc($rsIdiomas)); 

      ?>
    
    while

      </div>
  </table>

  <a href="generador-de-idiomas.php" target="_blank"> LISTO !</a>
</form>
</body>
</html>
<?php
mysql_free_result($rsIdiomas);
?>


