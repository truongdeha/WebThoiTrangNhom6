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
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
	<link rel="stylesheet" href="fontawesome-free-5.8.2-web/css/all.css" type="text/css">
<body>
<div class="container-fluid">
    <div class="row bgHeader">
        <div class="col-sm-3 headerLogo">
            <a href="#"><span>LOGO</span></a>
        </div>
        <div class="col-sm-9 headerMenu">
            <ul>
                <li>
                    <a href="#">THỜI TRANG</a>
                </li>
                <li>
                    <a href="#">TIN TỨC</a>
                </li>
                <li>
                    <a href="#">GIỚI THIỆU</a>
                </li>
                <li>
                    <a href="#">LIÊN HỆ</a>
                </li>
                <li>
                    <div class="dropdown">
                        <button type="button" class="dropdown-toggle myCss" data-toggle="dropdown">
                            DANH MỤC
                        </button>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="../index%20-%20Vĩnh,Hiếu/productsList.php">Danh sách sản phẩm</a>
                            <button type="button" class="dropdown-toggle myCss" data-toggle="dropdown">
                            <font style="font-weight:normal; margin-left:24px;">DANH SÁCH TÀI KHOẢN</font>
                        </button>
                        	<div class="dropdown-menu dropdown-menu-lef">
                            <a class="dropdown-item" href="dangnhapthanhvien.php" style="width:200px">TRANG LOGIN</a>                           
                            </div>
                            <a class="dropdown-item" href="#">Danh sách nhà cung cấp</a>
                            <a class="dropdown-item" href="#">Link 4</a>
                            <a class="dropdown-item" href="#">Link 5</a>
                        </div>
                    </div>
                </li>
                <li>
                    <input class="boxSearch" type="text" id="search"><label for="search"><i class="fas fa-search iconSearch"></i></label>
                </li>
            </ul>
        </div>
    </div>

<div id="total2">
<div class="background">
<div style="background:#FFF; width:1100px; height:500px; position:absolute; top:100px; left:400px">
<?php
	require_once("connectTV.php");
	$id = $_REQUEST['id'];
	$sql="select * from taikhoan where id =".$id;
	$query=mysqli_query($conn,$sql);
	$item = mysqli_fetch_array($query);
?>
<?php
		echo "Tài khoản - ".$us." - Đang update - ";
	?><a href="logout.php">Đăng xuât khỏi hệ thống </a>
<form method="post">
	<table border="1px" cellpadding="1" cellspacing="1" width="1100px">
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
</div>
</div>
<div class="clearfix"></div>
 <div class="row bgFooter">
            <div class="col-sm-3 footer">
                <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
                <p>Địa chỉ</p>
                <div style="width:200px; margin-left:80px;">
                    5F, Intracom building, 82 Dịch Vọng Hậu, Cầu Giấy, Hà Nội
                </div>
            </div>
            <div class="col-sm-3 footer">
                <span class="icon"><i class="far fa-question-circle"></i></span>
                <p>Câu hỏi thường gặp</p>
            </div>
            <div class="col-sm-3 footer">
                <span class="icon"><i class="fas fa-phone"></i></span>
                <p>Liên hệ hỗ trợ</p>
                <div style="margin-left:70px;">Hotline:(+84)336826259
                Email: duongvinhad@gmail.com</div>
            </div>
            <div class="col-sm-3 footer">
                <span class="icon"><i class="fas fa-heart"></i></span>
                <p>Theo dõi chung tôi</p>
                <div class="follow">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>