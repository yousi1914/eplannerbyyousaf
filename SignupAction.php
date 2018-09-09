<?php 
if(isset($_POST['signup']))
{
	include 'conn.php';
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$regplan = $_POST['regplan'];
	$password = $_POST['password'];
	$type = $_POST['userType'];
	$insert = mysqli_query($con, "INSERT INTO `users`(fullName,email,password,contact,userType,regPlan)
	 VALUES('$fname','$email','$password','$contact','$type','$regplan')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:login.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:signup.php");
	}

}
?>