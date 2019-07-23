<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Mảng đa chiều là mảng mà phần tử trong mảng là 1 mảng
    Mảng đa chiều là mảng lồng mảng
</pre>
<?php
$array3 = array();
$array3["china"]=array("name" => "Trung Quốc", "city" => "Hồng Kong", "Đài Bắc", "Thành Đô");
$array3["korea"]=array("name" => "Korea", "city" => "Seul");
$array3["japan"]=array("name" => "Japan", "city" => "Tokyo", "Kyoto");
$array3["vn"]=array("name" => "Việt Nam", "city" => "Hà Nội", "Hưng Yên", "Hồ Chí Minh");

echo "<pre>";
print_r($array3);
echo "</pre>";
?>
</body>
</html><?php
