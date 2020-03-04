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
	<form method="post" action="xulydangky.php">
    	<table id="table3">
        	<tr>
            	<td width="1100px">
                <div style="margin-left:300px; color:#FFF; width:600px; height:500px;">
                	<div><font style="font-size:36px; margin-left:100px;">Đăng ký tài khoản</font></div>
                    <div style="margin-top:30px;"><i class="fas fa-user-tie" id="icon"></i> Tên đăng nhập</div>
                    <div id="cachdeu1"><input type="text" name="txtuser" style="width:500px; height:40px;"></div>
                    <div id="cachdeu"><i class="fas fa-envelope-open-text" id="icon"></i> Email</div>
                    <div id="cachdeu1"><input type="text" name="txtemail" style="width:500px; height:40px;"></div>
                    <div id="cachdeu"><i class="fas fa-lock" id="icon"></i> Nơi ở</div>
                    <div id="cachdeu1"><input type="text" name="txtnoio" style="width:500px; height:40px;"></div>
                    <div id="cachdeu"><i class="fas fa-home" id="icon"></i> Mật khẩu</div>
                    <div id="cachdeu1"><input type="password" name="txtpass" style="width:500px; height:40px;"></div>
                    <div style="margin-top:30px;margin-left:200px;"><input type="submit" name="dangky" value="Đăng ký" style="width:100px; height:40px;"></div>
                </div>
                </td>              
            </tr>
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
</html>