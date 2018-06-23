<?php

/**
* @author evilnapsis
* @website http://evilnapsis.com/
**/

if(isset($_GET["do"]) && $_GET["do"]!=""){
	include "conexion.php";
		$action = $_GET["do"];
		if($action=="new"){
			if(!empty($_POST)){
				$con = Db::connect();
				$name = $_POST["name"];
				$category_id = $_POST["category_id"]!=""? $_POST["category_id"]:"NULL";
				$sql = "insert into category (name,category_id) value (\"$name\",$category_id)";
				$con->query($sql);
			}
			header("Location: ../");
		}else if($action=="delete"){
			$con = Db::connect();
			$sql = "delete from category where id=$_GET[id]";
			$con->query($sql);
			header("Location: ../");
		}else if($action=="update"){
			if(!empty($_POST)){
				$con = Db::connect();
				$id = $_POST["id"];
				$name = $_POST["name"];
				$category_id = $_POST["category_id"]!=""? $_POST["category_id"]:"NULL";
				$sql = "update category set name=\"$name\", category_id=$category_id where id=$id";
				$con->query($sql);
			}
			header("Location: ../");
		}

}


?>