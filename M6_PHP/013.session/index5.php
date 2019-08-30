<?php
//bắt buộc phải khởi động session
session_start();
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    <h1>Chỉnh sửa session trong php</h1>

    <?php
//$_SESSION là 1 mảng
$_SESSION["user_name"]="admin";

//xem tất cả session đang hoạt động
    echo "<br>In ra session trc khi sửa";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    //sửa session
    $_SESSION["user_name"]="mod";

    //xem tất cả các sesion đang hoạt động
    echo "<br> In ra session sau khi sửa";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>
    </body>
    </html><?php
