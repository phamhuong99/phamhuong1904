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


/*cú pháp rút gọn*/
foreach($salary1 as $value){
    echo "<br>".$value;
}

/*cú pháp lặp mảng đầy đủ*/
foreach($salary1 as $key => $value){
    echo "<br>".$key . "-".$value;}

//cú pháp ít dùng

foreach($salary1 as $key => $value){
    echo "<br>".$key."-".$salary1[$key];
}
?>
</body>
</html><?php
