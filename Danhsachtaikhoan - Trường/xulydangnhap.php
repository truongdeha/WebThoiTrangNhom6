<?php 
session_start();
?>
<?php
if(isset($_POST['oke']))
	{
		include('connectTV.php');
		$ten = $_POST['username'];	
		$pw = $_POST['password'];		
		$sql = "select * from taikhoan where user = '$ten' and pass = '$pw'";
		$query = mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$_SESSION['user']=$ten;
			$_SESSION['pass']=$pw;
			header ('location:quanlytaikhoan.php');
		}
		else 
		{
			echo"bạn bạn chưa đăng nhập <a href='javascript: history.go(-1)'>Trở lại</a>";
		}
	}
?>