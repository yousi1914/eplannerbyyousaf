<?php 
if(isset($_POST['signup']))
{
	include 'conn.php';
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['c_password'];
	$type = $_POST['type'];
	$insert = mysqli_query($con, "INSERT INTO `users`(F_name, L_name, Email, Password,Type,c_password) VALUES('$fname', '$lname', 
		'$email', '$password','$type',$cpassword)");
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