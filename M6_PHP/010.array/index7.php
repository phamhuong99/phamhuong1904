<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
   Mảng kết hợp là mảng mà key là 1 chuỗi và số hoặc chuỗi
</pre>
<?php
//cách 1
$array2= array();
$array2["hn"] = "Hà Nội";
$array2["dn"] = "Đà Nẵng";
$array2["hy"] = "Hưng Yên";
$array2["hcm"] = "Hồ Chí Minh";
$array2[12] = "long an";

echo "<pre>";
print_r($array2);
echo "</pre>";

/*
 * truy xuất vào mảng kết hợp*/
echo "<br>".$array2["hn"];
echo "<br>".$array2["dn"];
echo "<br>".$array2["hy"];
echo "<br>".$array2["hcm"];

//thay đổi giá trị của phần tử
$array2["hn"] = "thủ đô hà nội";
echo "<pre>";
print_r($array2);
echo "</pre>";
?>
</body>
</html><?php
