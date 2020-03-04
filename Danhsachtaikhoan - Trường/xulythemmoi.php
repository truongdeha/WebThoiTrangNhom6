<?php
	include('connectTV.php');
?>
<?php
if(isset($_POST['them']))
{
	$us = $_POST['usermodal'];
	$em = $_POST['emailmodal'];
	$noi = $_POST['noiomodal'];
	$pas = $_POST['passmodal'];
	$sql = "insert into taikhoan(user,email,noio,pass)value('$us','$em','$noi','$pas')";
	$query=mysqli_query($conn,$sql);
		if($query) {echo"<script>confirm('Bạn đã đăng ký thành công')</script>";
			header('location:quanlytaikhoan.php');
		}
	    else echo "<script> alert ('them moi khong thanh cong!')</script>";			
}
?>