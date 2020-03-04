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
            <a href="index1.php"><span>LOGO</span></a>
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
<?php
	require_once("connectTV.php");
	$sql="select * from taikhoan";
	$query=mysqli_query($conn, $sql);
	$resuilt = array();
	while($row = mysqli_fetch_assoc($query))
			{
				array_push($resuilt,$row);	
			};
?>
	<form method="post" action="xulythemmoi.php" id="table2">
    	<table border="1px" cellpadding="1px" cellspacing="1px" width="1100px;">
        	<tr>
                <td colspan="5" align="center">
                        <?php
                    echo "Tài khoản -* ".$us." *- đang đăng nhập hệ thống"." - ";
                    ?> <a href="logout.php">Đăng xuất hệ thống</a>
                </td>               
    			<td rowspan="2" colspan="2" align="center" style="background:#F00">
                	<div class="container">
                    	<div class="row">
                        	<div class="col-md-12">
                            	<div class="modal fade" id="myModal">
                                	<div class="modal-dialog modal-sm">
                                    	<div class="modal-content">
                                        	<div class="modal-header">
                                            	<h2 style="color:#0C0">Thêm account</h2>
                                            </div>
                                            <div class="modal-body"  style="color:#0C0">
                                            	<div><i class="fas fa-users"></i> Tên đăng nhập</div>
                                                <div><input type="text" name="usermodal" style="width:200px;"></div>
                                                <div><i class="fas fa-envelope-square"></i> Email </div>
                                                <div><input type="text" name="emailmodal" style="width:200px;"></div>
                                                <div><i class="fas fa-home"></i> Nơi ở </div>
                                                <div><input type="text" name="noiomodal" style="width:200px;"></div>
                                                <div><i class="fas fa-unlock-alt"></i> Mật khẩu </div>
                                                <div><input type="password" name="passmodal" style="width:200px;"></div>
                                            </div>
                                            
                                            <div class="modal-footer">
                                            	<input type="submit" name="them" value="Ok men" style="border-radius:3px;color:#0C0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#myModal" style="color:#FFF"><i class="fas fa-plus-square"></i> Thêm tài khoản</a>
                            </div>
                        </div>
                    </div>
                </td>                               
   			 </tr>
            <tr>
            	<td colspan="5" align="center" style="background:#333; color:#FFF">Quản lý tài khoản</td>                             	                
            </tr>
            <tr>
            	<td align="center" style="background:#0C0; color:#FFF">Mã id</td> 
                <td align="center" style="background:#0C0; color:#FFF">Tên đăng nhập</td>
                <td align="center" style="background:#0C0; color:#FFF">Email</td>
                <td align="center" style="background:#0C0; color:#FFF">Nơi ở</td>
                <td align="center" style="background:#0C0; color:#FFF">Mật khẩu</td>
                <td colspan="2" align="center" style="background:#0C0; color:#FFF">Chức năng</td>             	                
            </tr>
 <?php foreach($resuilt as $item)
{?>
<tr>
	<td align="center"><?php echo $item['id'];?></td>
	<td align="center"><?php echo $item['user'];?></td>
    <td align="center"><?php echo $item['email'];?></td>
    <td align="center"><?php echo $item['noio'];?></td>
    <td align="center"><?php echo $item['pass'];?></td>
    <td align="center" style="background:#333"><a href="update.php?id=<?php echo $item['id']?>" style="color:#FFF">Sửa</a></td>
     <td align="center" style="background:#333"><a href="delete.php?id=<?php echo $item['id']?>"onclick="if(confirm('Bạn có chắc chắn muốn xóa?'))return true; else return false;" style="color:#FFF">Xóa</a></td>
</tr>
<?php }?>
        </table>
    </form>
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