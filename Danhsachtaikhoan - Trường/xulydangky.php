<?php
	include('connectTV.php');
?>
<?php
if(isset($_POST['dangky']))
{
	$us = $_POST['txtuser'];
	$em = $_POST['txtemail'];
	$noi = $_POST['txtnoio'];
	$pas = $_POST['txtpass'];
	$sql = "insert into taikhoan(user,email,noio,pass)value('$us','$em','$noi','$pas')";
	$query=mysqli_query($conn,$sql);
		if($query) {echo"<script>confirm('Bạn đã đăng ký thà	nh công')</script>";
			header('location:dangnhapthanhvien.php');
		}
	    else echo "<script> alert ('them moi khong thanh cong!')</script>";			
}
?>