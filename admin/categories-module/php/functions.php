<?php
/**
* @author evilnapsis
* @website http://evilnapsis.com/
**/

function get_base_categories(){
	$data= array();
	$con = Db::connect();
	$query = $con->query("select * from category where category_id is NULL ");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data[]=$r;
		}
	}
	return $data;
}

function get_cat_by_id($id){
	$data= array();
	$con = Db::connect();
	$query = $con->query("select * from category where id = $id ");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data=$r;
		}
	}
	return $data;
}

function edit_btn($id){
	return "<a href=\"./edit.php?id=$id\"><i class='glyphicon glyphicon-pencil'></i></a>";
}

function del_btn($id){
	return "<a href=\"./php/actions.php?do=delete&id=$id\"><i class='glyphicon glyphicon-trash'></i></a>";
}

function get_cats_by_cat_id($id){
	$data= array();
	$con = Db::connect();
	$query = $con->query("select * from category where category_id = $id ");
	if($query->num_rows>0){
		while ($r=$query->fetch_array()) {
			$data[]=$r;
		}
	}
	return $data;
}

function list_tree_cat_id($id){
	$subs = get_cats_by_cat_id($id);
	if(count($subs)>0){
		echo "<ul>";
		foreach($subs as $s){
			echo "<li> $s[name] ".edit_btn($s["id"])." ".del_btn($s["id"])."</li>";
			list_tree_cat_id($s["id"]);
		}
		echo "</ul>";
	}
}

function select_tree_cat_id($id,$level){
	$subs = get_cats_by_cat_id($id);
	if(count($subs)>0){
		foreach($subs as $s){
			echo "<option value=\"$s[id]\" > ".str_repeat("-", $level)."$s[name] </option>";
			select_tree_cat_id($s["id"],$level+1);
		}
	}
}
function selected_tree_cat_id($id,$level,$curr_id,$selected_id){
	//echo $selected_id;
	$subs = get_cats_by_cat_id($id);
	if(count($subs)>0){
		foreach($subs as $s){
			if($s["id"]!=$curr_id){
				$selected = "";
				if($s["id"]==$selected_id){ $selected= "selected"; }
				echo "<option value=\"$s[id]\" $selected>".str_repeat("-", $level)."$s[name] </option>";
				selected_tree_cat_id($s["id"],$level+1,$curr_id,$selected_id);
			}
		}
	}
}
?>