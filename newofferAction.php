<?php 
if(isset($_POST['offer']))
{
	include 'conn.php';
	$b_Name = $_POST['business'];
	$o_name = $_POST['o_name'];
	$discount = $_POST['discount'];
	$s_date = $_POST['s_date'];
	$e_date = $_POST['e_date'];
	$description = $_POST['description'];
	// $type = $_POST['userType'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "INSERT INTO `newoffer`(s_business , o_name, discount, s_date , e_date, description) VALUES('$b_Name', '$o_name', '$discount', '$s_date' ,'$e_date', '$description')");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:newoffers.php");
	}

}
?>