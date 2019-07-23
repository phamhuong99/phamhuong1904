<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$salary1= array("hà nội","thanh hóa","Hưng yên", "Đà Nẵng");

echo "<pre>";
print_r($salary1);
echo "</pre>";

/*
 * truy xuất vào các phần tử của mảng thông qua key*/
echo "<br>".$salary1[0];
echo "<br>".$salary1[1];
echo "<br>".$salary1[2];
echo "<br>".$salary1[3];

/*
 * gán lại value cho 1 phần tử trong mnagr
 * thông qua key*/

$array1[0] = "thủ đô hà nội";
$array1[2] = "Hưng yên quê tôi";

echo "<pre>";
print_r($array1);
echo "</pre>";
?>
</body>
</html>
