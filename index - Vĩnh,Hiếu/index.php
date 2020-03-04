<?php
include 'connect.php';
$connect = checkConnect();
$query = "SELECT * FROM products WHERE item='Đông' LIMIT 0,4";
$result = mysqli_query($connect,$query);
$query2 = "SELECT * FROM products WHERE item='Hè' LIMIT 0,8";
$result2 = mysqli_query($connect,$query2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../lib/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/js/bootstrap.js">
    <link rel="stylesheet" href="CSS/style2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
    <div class="row bgHeader">
        <div class="col-sm-3 headerLogo">
            <a href="index.php"><span>LOGO</span></a>
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
                            <a class="dropdown-item" href="productsList.php">Danh sách sản phẩm</a>
                            <a class="dropdown-item" href="../Danhsachtaikhoan - Trường/index1.php">Danh sách tài khoản</a>
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


    <div class="row">
        <div class="col-sm-12 bgSlider">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active slider">
                        <img src="images/bespoke-business-suits-savile-row-1400x788.jpg" alt="Los Angeles">
                    </div>
                    <div class="carousel-item slider">
                        <img src="images/bg2.jpg" alt="Chicago">
                    </div>
                    <div class="carousel-item slider">
                        <img src="images/bgsiler.jpg" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div>
    </div>


    <div class="row producer" >
        <h1 class="title">HÃNG SẢN XUẤT</h1>
        <div class="col-sm-12 logo">
            <div><p><a href="#"><img src="images/adidas-icon.png" alt=""></a></p></div>
            <div><p><a href="#"><img src="images/hermes-icon.png" alt=""></a></p></div>
            <div><p><a href="#"><img src="images/chanel-icon.png" alt=""></a></p></div>
            <div><p><a href="#"><img src="images/gucci-icon.png" alt=""></a></p></div>
        </div>
    </div>


    <div class="row product">
        <h1 class="title">ÁO VEST NAM</h1>
        <div class="col-sm-12 helmet">
            <?php while($row=mysqli_fetch_assoc($result)) { ?>
            <div class="box">
                <div class="img">
                    <img src="data:image/png;base64,<?php echo base64_encode($row['image']) ?>">
                </div>
                <div class="info">
                    <span><?php echo $row['productName'] ?></span>
                    <span><?php echo $row['producer'] ?></span>
                    <span>Giá:<?php echo $row['price'] ?></span>
                </div>
                <a href="PHP/details.php?id=<?php echo $row['id']?>">
                    <button class="buy" type="button">Mua</button>
                </a>
                <a href="PHP/details.php?id=<?php echo $row['id']?>">
                    <button class="detail" type="button"><i class="fas fa-search"></i></button>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>


    <div class="row product">
        <h1 class="title">ÁO THỂ THAO NAM</h1>
        <div class="col-sm-12 helmet">
            <?php while ($row2=mysqli_fetch_assoc($result2)) { ?>
            <div class="box">
                <div class="img">
                    <img src="data:image/png;base64,<?php echo base64_encode($row2['image']) ?>">
                </div>
                <div class="info">
                    <span><?php echo $row2['productName'] ?></span>
                    <span><?php echo $row2['producer'] ?></span>
                    <span>Giá:<?php echo $row2['price'] ?></span>
                </div>
                <a href="PHP/details.php?id=<?php echo $row2['id']?>">
                    <button class="buy" type="button">Mua</button>
                </a>
                <a href="PHP/details.php?id=<?php echo $row2['id']?>">
                    <button class="detail" type="button"><i class="fas fa-search"></i></button>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>


    <div class="row bgFooter">
        <div class="col-sm-3 footer">
            <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
            <p>Địa chỉ</p>
            <div>
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
            <span>Hotline:(+84)336826259</span>
            <span>Email: duongvinhad@gmail.com</span>
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
</body>
<script src="../lib/css/jquery-3.2.1.js"></script>
<script src="../lib/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="bosstrap4/js/bootstrap.bundle.js"></script>
<script src="JS/action.js"></script>
</html>
