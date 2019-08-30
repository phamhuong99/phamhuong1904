<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cú pháp:
    mktime(hour, minute,second,day,year)
    hàm này sẽ tạo ra tiem ở dạng linux timestamp

    -> để chuyển tgian dạng linux về dạng time đọc đc thì sẽ sự dụng date("định dạng time","tgian linux");
</pre>

<?php
$time1 = mktime(12,12,00,1,2000);
echo "<br> time1: ".$time1;
$human_time = date("Y-m-d H-i-s", $time1);
echo "<br> chuyển tgian linux về dạng đọc đc".$human_time;

/*
 * hàm strtotime(time, now)
 * chuyển 1 tgian đọc đc về tgian linux*/
 echo "<br> Chuyển tgian ng đọc về lại dạng linux timestamp ".strtotime($human_time);
?>
</body>
</html>
