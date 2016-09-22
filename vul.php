<?php
	$id = $_POST['id'];
	$id = base64_decode($id);
	$conn = mysqli_connect("127.0.0.1","root","","test");
	if(!$conn){
		die("Connect failed");
	}
	mysqli_query($conn, "SET NAMES UTF8");
	$query = "SELECT user FROM `admin` WHERE id = ".$id;
	$result = mysqli_query($conn, $query);
	if ($result){
		@$num_results = mysqli_fetch_assoc($result);
	}
	print_r($num_results);
