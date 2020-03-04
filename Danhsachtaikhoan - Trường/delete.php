<?php
	require_once("connectTV.php");
	$id = $_GET['id'];
	$sql = "delete from taikhoan where id = '$id'";
	$query = mysqli_query($conn,$sql);
	if($query)
	{
	header('location:quanlytaikhoan.php');	
}
?>