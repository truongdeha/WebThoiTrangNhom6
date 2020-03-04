<?php
/**
 * Created by PhpStorm.
 * User: TLD
 * Date: 01/03/2020
 * Time: 18:02
 */
include "connect.php";
$connect = checkConnect();
if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['item'])
    && !empty($_POST['producer']) && !empty($_POST['price']) && !empty($_FILES['image'])) {
    $name = $_POST['name'];
    $item = $_POST['item'];
    $producer = $_POST['producer'];
    $price = $_POST['price'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $query = "INSERT INTO products (productName, item, producer, price, image) 
              VALUE (N'$name', N'$item',N'$producer','$price','$image')";
    $result = mysqli_query($connect,$query);
    header("Location:addProduct.php");
}else header("Location:addProduct.php");
?>