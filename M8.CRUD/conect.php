<?php
$severname = "locahost";
$username =" root";
$password = "";

//tạo 1 kết nối đến csdl
$connection =new mysqli($severname, $username, $password);
if($connection -> connect_errno)
{
    die("không thể kết nối đến csdl");
}
echo"kết nối đến csdl thành công";
?>
