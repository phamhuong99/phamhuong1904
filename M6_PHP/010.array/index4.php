<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
//cách khai báo mảng kiểu 1
/*
 * áp dun gj cho mảng chỉ só
 * mảng chỉ số sẽ tự tạo key khi truyền value của phần tử*/
$cities = array("Hà Nội", "Hung Yên", "Đà Nẵng", "Hồ Chí Minh");

//cách số 2
/*
 * Khai báo key cho mảng chỉ số*/
$cities = array(0 => "Hà Nội", 1 => "Hung Yên", 2 => "Đà Nẵng", 3 => "Hồ Chí Minh");

//cách số 3
$cities =array();
$cities[]="hà nội";
$cities[]="thanh hóa";
$cities[]="hưng yên";
$cities[]="hồ chí minh";

//cách số 4
$cities =array();
$cities[0]="hà nội";
$cities[1]="thanh hóa";
$cities[2]="hưng yên";
$cities[3]="hồ chí minh";
?>
</body>
</html>
