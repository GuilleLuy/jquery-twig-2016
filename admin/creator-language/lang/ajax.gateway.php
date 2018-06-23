<?php 
require_once("../cnx.php");
require_once("../rutinas.inc.php");

 $updateSQL = sprintf("UPDATE idiomas SET valorES=%s, valorEN=%s WHERE idiomaID=%s", // , valorCA=%s, valorPO=%s, valorFR=%s
                       GetSQLValueString($_POST['valorES'], "text"),
                       GetSQLValueString($_POST['valorEN'], "text"),
                       // GetSQLValueString($_POST['valorCA'], "text"),
                       // GetSQLValueString($_POST['valorPO'], "text"),
                       // GetSQLValueString($_POST['valorFR'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_cnx, $cnx);
  $Result1 = mysql_query($updateSQL, $cnx) or die(mysql_error());

$resultado[]="0";
$resultado=json_encode($resultado);
echo  $resultado;
?>