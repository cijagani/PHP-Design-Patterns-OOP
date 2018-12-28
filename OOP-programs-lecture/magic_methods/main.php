<?php  
	require_once('__constructor2.php');

	$con=new DBConnection();

	d($con);

	$table="users";
	//$fields='id, name';
	echo $con->select($table);

?>