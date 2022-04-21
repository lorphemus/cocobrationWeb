<?php
/* Seçme */
function select($table_name, $setting){
	include("connect.php");
	$query=$db->prepare("SELECT * FROM $table_name WHERE id=?");
	$query->execute(array(0));
	$get_set=$query->fetch(PDO::FETCH_ASSOC);
	return $get_set["$setting"];
}
?>