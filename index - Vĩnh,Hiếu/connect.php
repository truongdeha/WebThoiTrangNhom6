<?php
/**
 * Created by PhpStorm.
 * User: TLD
 * Date: 22/11/2019
 * Time: 11:42
 */
function checkConnect () {
    $hostName = 'localhost';
    $userName = 'root';
    $passWord = '';
    $nameDatabase = 'thuctapdeha';
    $connect = mysqli_connect($hostName, $userName, $passWord, $nameDatabase);
    mysqli_set_charset($connect,"UTF8");
    return $connect;
}
?>