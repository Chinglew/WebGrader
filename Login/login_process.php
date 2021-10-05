<?php
session_start();
	$con = mysqli_connect("localhost","root","","test2");
	$uid = $_POST['id'];
	$pwd = $_POST['password'];
	$sql = "SELECT * FROM member WHERE email = '".$uid."' and password = '".$pwd."'";
	$sql2 = "SELECT status,name,userID,groupfarmer FROM member WHERE email = '".$uid."'";

	$sqlq = mysqli_query($con,$sql);
	$sqlq2 = mysqli_query($con,$sql2);
	$result = mysqli_fetch_array($sqlq2);
	if (mysqli_num_rows($sqlq)==1) {
		$_SESSION["status"] = $result["status"];
		$_SESSION["username"] = $result['name'];
		$_SESSION["userID"] = $result['userID'];
		$_SESSION["group"] = $result['groupfarmer'];
		header("location:index.php");

	}else{
		echo "ควย";
		session_destroy();
	}

?>