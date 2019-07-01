<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Kiểu dữ liệu dạng mảng (array)
    Kiểu dl dạng mảng dùng để chứ nhiều giá tị
    Khác với kiểu số nguyên, số thực, chuỗi, boolean chỉ chứa 1 giá trị đơn
    thì mảng có thwr chứa đc nhiều giá trị
    để khai báo mảng sẽ sử dụng từ khoa array()
    hoặc [] (ngoặc vuông chỉ sử dụng trong php 7)
    chú ý: không thể echo đc mảng
    nếu muốn xem mảng sử dụng hàng var_dump()
    hoặc sử dụng hàm print_r() hàm này thì thường đc dùng với thẻ pre của html
</pre>
<?php
$arr1 =array(1,2,3,4);
$arr2 =array("A","B","C","D", "E", "F");
$arr3 =array(true, false, false, true);

var_dump($arr1);

echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "<pre>";
print_r($arr2);
echo "</pre>";

echo "<pre>";
print_r($arr3);
echo "</pre>";
?>
</body>
</html>
