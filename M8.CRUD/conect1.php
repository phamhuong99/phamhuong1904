<?php
$severname = "localhost";
$username =" root";
$password = "";
$dataname ="db1";

//tạo 1 kết nối đến csdl
$connection =new mysqli($severname, $username, $password, $dataname);
if($connection->connect_error)
{
    die("không thể kết nối đến csdl");
}
echo"kết nối đến csdl thành công";
?>
