<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
   Cú pháp thay thế cho lệnh if else
    cú pháp này đc thường đc sử dụng cho pháp gán giá trị
    $a = (điều kiện)? giá trị 1:giá trị 2;
    điều kiện là true sẽ lấy sau ? là giá tị 1 gán cho $a
    điều kiện là false sẽ lấy giá trị sau : gan cho $a
</pre>
<?php
$luong=200000000;
$thue = ($luong > 90000000)?($luong*5/100):0;
echo "<br>thuế: ".$thue;
?>
</body>
</html>
