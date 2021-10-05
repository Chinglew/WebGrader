<?php
session_start();
	$con = mysqli_connect("localhost","root","","grader");
	$uid = $_POST['User_ID'];
	$pwd = $_POST['User_Pass'];
	$sql = "SELECT * FROM user WHERE User_ID = '".$uid."' and User_Password = '".$pwd."'";
	$sql2 = "SELECT * FROM member WHERE User_ID = '".$uid."'";

	$sqlq = mysqli_query($con,$sql);
	$sqlq2 = mysqli_query($con,$sql2);
	$result = mysqli_fetch_array($sqlq2);
	if (mysqli_num_rows($sqlq)==1) {
		
		header("location:index.php");

	}else{
		echo "ควย";
		session_destroy();
	}

?>