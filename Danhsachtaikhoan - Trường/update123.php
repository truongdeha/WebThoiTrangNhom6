<?php
	session_start();
	require_once('connectTV.php');
	$us=$_SESSION['user'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
	require_once("connectTV.php");
	$id = $_REQUEST['id'];
	$sql="select * from taikhoan where id =".$id;
	$query=mysqli_query($conn,$sql);
	$item = mysqli_fetch_array($query);
?>
<?php
		echo "".$us;
	?><a href="dangnhap.php"> thoát </a>
<form method="post">
	<table border="1px" cellpadding="1" cellspacing="1">
    	<tr>
        	<td colspan="2" align="center">thông tin hiển thị</td>
        </tr>
        <tr>
        	<td>mã id:</td>
            <td> <input type="text" name="id" value="<?php echo $item['id'];?>"></td>
        </tr>
        <tr>
             <td>Tên đăng nhập</td>
             <td> <input type="text" name="txtu" value="<?php echo $item['user'];?>"></td>
        </tr>
        <tr>
             <td>Email</td>
             <td> <input type="text" name="txte" value="<?php echo $item['email'];?>"></td>
        </tr>
         <tr>
             <td>Nơi ở</td>
             <td> <input type="text" name="txto" value="<?php echo $item['noio'];?>"></td>
        </tr>
         <tr>
             <td>Pass</td>
             <td> <input type="text" name="txtp" value="<?php echo $item['pass'];?>"></td>
        </tr>
        </tr>
            <td colspan="2" align="center"><input type="submit" value="Sửa" name="okup" style="width:80px"></td>
        </tr>
</table>
</form>
	<?php
		if(isset($_POST['okup']))
		{
			
			$u=$_POST['txtu'];
			$e=$_POST['txte'];
			$o=$_POST['txto'];
			$p=$_POST['txtp'];		
				$sql1="update taikhoan set user='$u', 
				email='$e',
				noio='$o', 
				pass='$p' where id ='$id'";
				$query1 = mysqli_query($conn,$sql1);
				if($query1)
				{
				header('location:quanlytaikhoan.php');
				}
			else {
				echo "<script language='javascript'> alert('Cập Nhật Không Thành Công')</script>";}
		}
	?>
</body>
</html>