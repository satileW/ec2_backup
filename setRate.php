<?php
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');  

	require_once('DB_individual.php');
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	$parameter = $_REQUEST;
	$star = $parameter["rate_star"];
	$comment = $parameter["rate_comment"];
	$product_id = $parameter["product_id"];

	
	$SQL = "insert into market_rate(username,product_id,rate,comment)
			VALUES('Anonymous','$product_id',$star,'$comment')";
	mysqli_query($conn, $SQL);
?>