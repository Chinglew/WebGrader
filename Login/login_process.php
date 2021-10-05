<?php
session_start();   
	$con = mysqli_connect("localhost","root","","grader");
	$uid = $_POST['User_ID'];
	$pwd = $_POST['User_Pass'];
	$sql = "SELECT * FROM user WHERE User_ID = '".$uid."' and User_Password = '".$pwd."'";
	$sql2 = "SELECT * FROM member WHERE User_ID = '".$uid."'";

	$sqlq = mysqli_query($con,$sql);
	$sqlq2 = mysqli_query($con,$sql2);
	if (mysqli_num_rows($sqlq)==1) {
        $_SESSION["User_ID"] = $result["User_ID"];
		$_SESSION["User_Name"] = $result['User_Name'];
		$_SESSION["User_Surname"] = $result['User_Surname'];
		$_SESSION["User_Status"] = $result['"User_Status'];
        header("location:test.php");
	}else{
        echo "<script>alert('ชื่อผู้ใช้/รหัสผ่านผิด')</script>";
		header("location:Login.php");
        session_destroy();
	}
?>