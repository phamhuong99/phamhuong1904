<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$salary2= array();
$salary2["hn"] = "Hà Nội";
$salary2["dn"] = "Đà Nẵng";
$salary2["hy"] = "Hưng Yên";
$salary2["hcm"] = "Hồ Chí Minh";
$salary2[12] = "long an";

echo "<pre>";
print_r($salary2);
echo "</pre>";


foreach( $salary2 as $value){
    echo "<br>".$value;
}

foreach($salary2 as $key => $value){
    echo "<br>".$key."-".$value;
}

//cú pháp ít dùng

foreach ($salary2 as $key => $value){
    echo "<br>".$key."-".$salary2[$key];}
?>
</body>
</html><?php
