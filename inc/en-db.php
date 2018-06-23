<?php 
class Db{
	public static function connect(){
		$host="localhost";
		$user="root";
		$password="";
		$db ="guillelo_2018_en";
		return new mysqli($host,$user,$password,$db);
	}
}

// ARRIBA
// class Db{
// 	public static function connect(){
// 		$host="localhost";
// 		$user="guillelo_db_user";
// 		$password="Oj3t3n4l94";
// 		$db ="guillelo_2018_en";
// 		return new mysqli($host,$user,$password,$db);
// 	}
// } 
?>
