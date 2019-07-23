<?php
session_start();
// code
//thêm giá trị của session
$_SESSION['user'] = 'Pham Thi Huong';
$array = [5, 8, 6, 4, 7, 5];
$_SESSION['user1'] = $array;
//hàm kiểm tra sự tồn tại của session
if (isset($_SESSION['user'])) {
    echo $_SESSION['user'];
}
//lấy giá trị session
$_SESSION['user'];
$_SESSION['user1'];
?>