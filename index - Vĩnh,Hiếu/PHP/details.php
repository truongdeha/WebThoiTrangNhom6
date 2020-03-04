<?php
include '../connect.php';
$connect = checkConnect();
$query = "SELECT * FROM products WHERE item='Đông' LIMIT 0,4";
$result = mysqli_query($connect,$query);
$query2 = "SELECT * FROM products WHERE item='Hè' LIMIT 0,8";
$result2 = mysqli_query($connect,$query2);
$row=mysqli_fetch_assoc($result);



if($connect){
    $id = $_GET['id'];
    $search = " SELECT * FROM products WHERE id = $id ";
    $result1 = mysqli_query($connect, $search);
    $row1 = mysqli_fetch_array($result1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Details Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style2.css">
    <link rel="stylesheet" href="../CSS/details.css">
</head>
<body>

<div class="container-fluid">
    <div class="row bgHeader">
        <div class="col-sm-3 headerLogo">
            <a href="../index.php"><span>LOGO</span></a>
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
                            <a class="dropdown-item" href="../productsList.php">Danh sách sản phẩm</a>
                            <a class="dropdown-item" href="../../Danhsachtaikhoan%20-%20Trường/index1.php">Danh sách tài khoản</a>
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
    <div class="row" style="padding-top: 100px">
        <div class="col-md-10 offset-1 box-DT">
            <div class="col-md-6 col-sm-12 box-1">
                <div class="img-list">
                    <div class="img1">
                        <img src="data:image/png;base64,<?php echo base64_encode($row1['image']) ?>">
                    </div>
                    <div class="img2">
                        <img src="data:image/png;base64,<?php echo base64_encode($row1['image']) ?>">
                    </div>
                    <div class="img3">
                        <img src="data:image/png;base64,<?php echo base64_encode($row1['image']) ?>">
                    </div>
                </div>
                <div class="img-avatar">
                    <img src="data:image/png;base64,<?php echo base64_encode($row1['image']) ?>">                </div>
            </div>
            <div class="col-md-6 col-sm-12 box-2">
                <div class="box-txt-1">
                    <h2><?php echo $row1["productName"]?></h2>
                    <span class="price"><?php echo $row1["price"]?>đ</span>
                    <p>
                        Mẫu áo bomber trần bông dáng béo của Hollister với các màu cực đẹp và dễ mặc.
                    </p>
                    <div class="txt-kk">
                        <h6>Kích cỡ</h6>
                        <button class="btn btn-primary my-btn active">S</button>
                        <button class="btn btn-primary my-btn">M</button>
                        <button class="btn btn-primary my-btn">L</button>
                    </div>
                    <div class="my-modal">
                        <a href="#">
                            <span data-toggle="modal" data-target="#myModal">
                           Hướng dẫn chọn size
                        </span>
                        </a>

                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <img style="width: 700px;height: 500px" src="data:image/png;base64,<?php echo base64_encode($row1['image'])?>">
                            </div>
                        </div>
                    </div>

                    <div class="txt-SL">
                        <h6>Số Lượng</h6>
                        <button class="btn btn-primary minus">-</button>
                        <button class="btn btn-danger value">1</button>
                        <button class="btn btn-primary plus">+</button>
                    </div>
                    <div>
                        <p>
                            <button style="width: 100%" class="btn btn-lg btn-primary ed-btn">Thêm Vào Giỏ</button>
                        </p>
                        <button style="width: 100%" class="btn btn-lg btn-primary ed-btn" >Mua Ngay</button>
                    </div>
                </div>
                <div class="">
                    <h2>Sản Phẩm Mới</h2>
                    <div class="img-list">
                        <?php while($row=mysqli_fetch_assoc($result)) { ?>
                        <div class="edit-new ">
                            <img src="data:image/png;base64,<?php echo base64_encode($row['image']) ?>">
                            <div class="txt">
                                <span style="color: #4e555b"><?php echo $row["productName"]?></span>
                                <span style="color: red"><?php echo $row["price"]?>đ</span>
                                <a href="#"><span style="color: #0c5460">Đặt Mua</span></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <h2>Chi Tiết Sản Phẩm</h2>
        </div>
        <div class=" details-content">
            <div class="details-img col-md-6 aos-item"data-aos="fade-up"data-aos-duration="1500">
                <img class="edit-img" src="data:image/png;base64,<?php echo base64_encode($row1['image']) ?>">
            </div>
            <div class="txt-details col-md-6 aos-item"data-aos="fade-up"data-aos-duration="2000" data-aos-delay="1000">
                <h4>H for highly respected.</h4>
                <p>Welcome to the Club of Classics: vehicles can be assigned the coveted “H” number plate if they were first registered at least 30 years ago and are in good, original condition – the H plate is an expression of an owner's high esteem for a classic cultural asset.</p>
                <p>
                    The decisive factor for allocation of an H plate is not merely the age of the vehicle but also a history assessment. In January 2019, there were 536,515 classic cars throughout Germany that had successfully passed this test. The number one brand among those historical vehicles was Mercedes-Benz.
                </p>
            </div>
        </div>
        <div class=" details-content">
            <div class="txt-details col-md-6 aos-item"data-aos="fade-up"data-aos-duration="1500"data-aos-delay="1000">
                <h4>H for highly respected.</h4>
                <p>Welcome to the Club of Classics: vehicles can be assigned the coveted “H” number plate if they were first registered at least 30 years ago and are in good, original condition – the H plate is an expression of an owner's high esteem for a classic cultural asset.</p>
                <p>
                    The decisive factor for allocation of an H plate is not merely the age of the vehicle but also a history assessment. In January 2019, there were 536,515 classic cars throughout Germany that had successfully passed this test. The number one brand among those historical vehicles was Mercedes-Benz.
                </p>
            </div>
            <div class="details-img col-md-6 aos-item"data-aos="fade-up"data-aos-duration="1500">
                <img class="edit-img" src="data:image/png;base64,<?php echo base64_encode($row1['image']) ?>">
        </div>
    </div>
    <div class=" details-content">
        <div class="details-img col-md-6 aos-item"data-aos="fade-up"data-aos-duration="1500">
            <img class="edit-img" src="data:image/png;base64,<?php echo base64_encode($row1['image']) ?>">
    </div>
    <div class="txt-details  col-md-6 aos-item"data-aos="fade-up"data-aos-duration="1500"data-aos-delay="1000">
        <h4>H for highly respected.</h4>
        <p>Welcome to the Club of Classics: vehicles can be assigned the coveted “H” number plate if they were first registered at least 30 years ago and are in good, original condition – the H plate is an expression of an owner's high esteem for a classic cultural asset.</p>
        <p>
            The decisive factor for allocation of an H plate is not merely the age of the vehicle but also a history assessment. In January 2019, there were 536,515 classic cars throughout Germany that had successfully passed this test. The number one brand among those historical vehicles was Mercedes-Benz.
        </p>
    </div>
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
<script src="../../lib/css/jquery-3.2.1.js"></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="../JS/js.js"></script>
<script>
    AOS.init();
</script>
</html>