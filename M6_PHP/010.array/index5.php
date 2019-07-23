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


//cách 2
$array2 = array("hn" => "Hà Nội", "hy" => "Hưng Yên", "Dn" => "Đà Nẵng");
echo "<pre>";
print_r($array2);
echo "</pre>";
?>
</body>
</html><?php
