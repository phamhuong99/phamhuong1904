<?php
//bắt buộc phải khởi động session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>khởi động session</h1>
<?php
//$_SESSION là 1 mảng
$_SESSION["user_name"]="admin";
$_SESSION["user_email"]="admin@gmail.com";


$location["user_location"]="Hưng Yên";

$_SESSION["user_location"]=$location;

//xem tất cả session đang hoạt động

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

?>
</body>
</html>
