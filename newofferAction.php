<?php
session_start(); 
if(isset($_POST['offer']))
{
	include 'conn.php';

	$bid = $_POST['bid'];
	$poff = $_POST['poff'];
	$oname = $_POST['oname'];
	$description = $_POST['odesc'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];

	$q = mysqli_query($con, "INSERT INTO `offers`(oname, description, sdate, edate, bid, poff) VALUES('$oname', '$description', '$sdate', '$edate', '$bid', '$poff')");
	if($q){
		$_SESSION['msg'] = 'Offer Created Successfully';
		header("location:dashboard.php");
	}


}
 ?>
