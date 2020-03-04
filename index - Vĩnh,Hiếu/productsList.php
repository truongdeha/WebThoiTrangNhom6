<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
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
                            <a class="dropdown-item" href="../Danhsachtaikhoan%20-%20Trường/index1.php">Danh sách tài khoản</a>
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
        <div class="offset-2 col-sm-8">
            <h2 class="title">Danh sách sản phẩm</h2>
            <div class="boxAdd">
                <a href="addProduct.php"><button type="button" class="btn btn-primary">Thêm sản phẩm</button></a>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Loại</th>
                    <th>Hãng sản xuất</th>
                    <th>GIá bán</th>
                    <th>Ảnh</th>
                    <th colspan="2">Chức năng</th>
                </tr>
                </thead>
                <tbody id="result">

                </tbody>
            </table>
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
