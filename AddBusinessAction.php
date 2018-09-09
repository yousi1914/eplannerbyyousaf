<?php 
if(isset($_POST['business']))
{
	include 'conn.php';
	$name = $_POST['b_name'];
	$city = $_POST['city'];
	$area = $_POST['area'];
	$blocation = $_POST['blocation'];
	$bcontact = $_POST['bcontact'];
	$bookingFee = $_POST['bookingFee'];
	$ownerId = $_POST['ownerId'];
	$openDays = $_POST['openDays'];
	$bstatus= $_POST['bstatus'];
	$Paid = $_POST['Paid'];
	$insert = mysqli_query($con, "INSERT INTO `business`(bname , bcity, barea,blocation,bcontact , bookingFee , ownerId,openDays,bstatus,Paid) VALUES('$name', '$city', '$area', '$blocation','$bcontact','$bookingFee','$ownerId','$openDays','$bstatus','$Paid')");
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