<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Mảng là gì? Mảng là kiểu dữ liệu trong PHP
    lưu trữ đc nhiều giá trị
    Trong PHP có 3 kiểu mảng:;
    1- mảng chỉ số
    2- mảng kết hợp
    3- mảng đa chiều ( mảng lồng mảng)
    Trong mảng 2 khái niệm cần nắm đc
    trong mảng gồm nhiều phần tử
    key : là chỉ số của các phần tử trong mảng
    value là giá trị của phần tử trong mảng
    không echo được mảng
    Phần tử trong mảng bao gồm cả keu và value là 1 cặp

    mảng chỉ số là mảng mà có các key là các số
    chú ý mặc định key trong mảng bắt đầu từ 0
</pre>
<?php
$salary2= array();
$salary2["hn"] = "Hà Nội";
$salary2["dn"] = "Đà Nẵng";
$salary2["hy"] = "Hưng Yên";
$salary2["hcm"] = "Hồ Chí Minh";

echo "<pre>";
print_r($salary2);
echo "</pre>";
?>
</body>
</html><?php
