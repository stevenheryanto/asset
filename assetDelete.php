<?php 
	require_once 'meekrodb.2.1.class.php';
	$id = $_POST['id'];
	DB::delete('asset', "id=%s", $id);
?>