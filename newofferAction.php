<?php 
if(isset($_POST['offer']))
{
	include 'conn.php';
	$oname = $_POST['oname'];
	$description = $_POST['description'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$bid = $_POST['bid'];
	$poff = $_POST['poff'];

	$insert = mysqli_query($con, "INSERT INTO `offers`(oname, description, sdate , edate, bid,poff) VALUES('$oname', '$description', '$sdate' ,'$edate', '$bid','$poff')");
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