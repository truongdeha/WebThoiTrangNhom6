<?php
/**
 * Created by PhpStorm.
 * User: TLD
 * Date: 04/03/2020
 * Time: 5:25
 *
 */
include "connect.php";
$connect = checkConnect();
    $id = $_GET["id"];
    $query = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_assoc($result);

if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['item'])
&& !empty($_POST['producer']) && !empty($_POST['price']) && !empty($_FILES['image'])) {
    $name = $_POST['name'];
    $item = $_POST['item'];
    $producer = $_POST['producer'];
    $price = $_POST['price'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $queryUpdate = "UPDATE products SET productName='$name',item='$item',producer='$producer',price='$price',image='$image'
    WHERE id='$id'";
    $resultUpdate = mysqli_query($connect,$queryUpdate);
    header('Location:productsList.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
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
            <h2 class="title">THAY ĐỔI SẢN PHẨM</h2>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tên sản phẩm:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['productName']?>" required>
                </div>
                <div class="form-group">
                    <label for="producer">Loại:</label>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="item" value="Hè" required>Hè
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="item" value="Đông">Đônng
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Giá bán:</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $row['price']?>" required>
                </div>
                <div class="form-group">
                    <label for="producer">Hãng sản xuất:</label>
                    <select class="form-control" id="producer" name="producer">
                        <option>ADIDAS</option>
                        <option>HERMES</option>
                        <option>CHANEL</option>
                        <option>GUCCI</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Ảnh:</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary btnStyle">Thực hiện</button>
            </form>
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
</html>
