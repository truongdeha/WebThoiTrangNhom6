<?php
/**
 * Created by PhpStorm.
 * User: TLD
 * Date: 04/03/2020
 * Time: 4:02
 */
include "connect.php";
$connect = checkConnect();
//Load data
$queryLoad = "SELECT * FROM products ORDER BY id DESC";
$resultLoad = mysqli_query($connect,$queryLoad);
$output = "";
while ($row=mysqli_fetch_assoc($resultLoad)) {
    $output .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['productName'].'</td>
            <td>'.$row['item'].'</td>
            <td>'.$row['producer'].'</td>
            <td>'.$row['price'].'</td>
            <td><img width="50px" src="data:image/png;base64,'.base64_encode($row["image"]).'"></td>
            <td><a href="update.php?id='.$row['id'].'"><button type="submit" name="btnEdit" class="btn btn-primary">Sửa</button></a></td>
            <td><button class="btn btn-danger btnDelete" data-delete="'.$row['id'].'">Xóa</button></td>
        </tr>
    ';
}; echo $output;

//Delete data
if(isset($_POST["idDel"])) {
    $idDel = $_POST["idDel"];
    $queryDel = "DELETE FROM products WHERE id='$idDel' ";
    $resultDel = mysqli_query($connect,$queryDel);
} else echo "Không thể xóa.";



?>

