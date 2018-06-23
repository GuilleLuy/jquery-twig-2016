<?php
/**
* @author evilnapsis
* @website http://evilnapsis.com
* @date 2015-11-09
**/
class Db{
	public static function connect(){
		$host="localhost";
		$user="root";
		$password="";
		$db="guillelo_2018_es";
		return new mysqli($host,$user,$password,$db);
	}
}
?>