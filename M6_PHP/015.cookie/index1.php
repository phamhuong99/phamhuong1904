<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cookie ddc sử dụng để nhận diện ng dùng
    cookie là 1 file nhỏ đ
    c sever nhúng ào máy tính của ng dùng

    mỗi lần máy tính đó gửi

    cú pháp:
     setcookie (name, value, expire, path, domain, secure, httponly);
    chỉ có tham số name đầu tiên là bắt buộc paỉ truyền vào
     còn lại các tham số sau đó như value, expire, path,... có thể truyền hoặc không
</pre>
<?php
    /*thời gian 1 ngày là 86400 giây
    cookie bên dưới sẽ sống trong 30 ngày
    */
    $cookie_name ="username";
    $cookie_value= "admin";
    setcookie($cookie_name, $cookie_value, time() + (86400*30)); //86400 = 1 day;
?>
<?php
/*xem tất cả các cookie*/
echo "<pre>";
print_r($_COOKIE);
echo"</pre>";

?>

<?php
/*truy cập vào 1 cookie*/
if(!isset($_COOKIE["username"])){
    echo'<br> Cookie $_COOKIE["username"] chưa đc tạo';

}else {
    echo '<br> giá trị của $_COOKIE["username"] là : '.$_COOKIE["username"];
}
?>
</body>
</html>
