<?php 
if(isset($_POST['business']))
{
	include 'conn.php';
	$name = $_POST['b_name'];
	$city = $_POST['city'];
	$area = $_POST['area'];
	$location = $_POST['location'];
	$opendays = $_POST['opendays'];
	$services = $_POST['services'];
	$bookingcharges = $_POST['bookingcharges'];
	$bookingcontact = $_POST['b_contact'];
	$image = $_POST['image'];
	$insert = mysqli_query($con, "INSERT INTO `addbusiness`(b_name , City, Area , Location , o_days, Services ,
		b_charges,b_contact,Image) VALUES('$name', '$city', '$area', '$location' ,'$opendays', '$services', '$bookingcharges', 
		'$bookingcontact','$image')");
	if($insert)
	{
		$_SESSION['msg'] = 'Data Insert Successfully';
		header("location:dashboard.php");
	}
	else
	{
		$_SESSION['msg'] = 'Error in Sign Up due to reason > '.mysqli_error($con);
		header("location:Addbusiness.php");
	}

}
?>