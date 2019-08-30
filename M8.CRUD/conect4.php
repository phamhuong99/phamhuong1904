<?php
$severname = "localhost";
$username ="root";
$password = "";

//tạo 1 kết nối đến csdl
$connection =mysqli_connect($severname, $username, $password);
if(!$connection)
{
    die("không thể kết nối đến csdl");
}
echo"kết nối đến csdl thành công";
?>
