<?php 
class Db{
	public static function connect(){
		$host="localhost";
		$user="root";
		$password="";
		$db ="guillelo_2018_es";
		
		return new mysqli($host,$user,$password,$db);

		
	}
}
mysql_query("SET NAMES 'utf8mb4'");

// ARRIBA
// class Db{
// 	public static function connect(){
// 		$host="localhost";
// 		$user="guillelo_db_user";
// 		$password="Oj3t3n4l94";
// 		$db ="guillelo_2018_es";
// 		return new mysqli($host,$user,$password,$db);
// 	}
// } 
?>
