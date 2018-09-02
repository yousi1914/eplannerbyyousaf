<?php 
session_start();
if(isset($_POST['login']))
{
	include 'conn.php';
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$chek = mysqli_query($con, "SELECT * FROM `users` WHERE Email='$email' AND Password='$password'");
	if(mysqli_num_rows($chek)>0)
	{
		$allData = mysqli_fetch_assoc($chek);
		$_SESSION['user'] = $allData;
		header("location:dashboard.php");
	}
	else
	{
		echo $_SESSION['msg'] = 'Invalid Login Cardentials';
		header("location:login.html");
	}
}
?>