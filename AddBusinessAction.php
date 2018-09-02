<?php 
if(isset($_POST['business']))
{
	include 'conn.php';
	$Name = $_POST['name'];
	$city = $_POST['city'];
	$area = $_POST['area'];
	$location = $_POST['location'];
	$opendays = $_POST['opendays'];
	$services = $_POST['services'];
	$bookingcharges = $_POST['bookingcharges'];
	$bookingcontact = $_POST['contact'];
	$image = $_POST['image'];
	// $type = $_POST['userType'];
	// if($type=='for Event Booking')
	// 	$userType = 'User';
	// else if($type=='as a Business Partner')
	// 	$userType = 'Admin';
	// else
	// 	$userType='dummy';
	$insert = mysqli_query($con, "INSERT INTO `addbusiness`(b_name , City, Area , Location , o_days, Services ,
		b_charges,b_contact,Image) VALUES('$Name', '$city', '$area', '$location' ,'$opendays', '$services', '$bookingcharges', 
		'$bookingcontact',$image)");
	if($insert)
	{
		$_SESSION['msg'] = 'Sign Up Successfully';
		header("location:dashboard.html");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:profile.html");
	}

}
?>