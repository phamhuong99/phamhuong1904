<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    câu lệnh rẽ nhánh có nhiều điều kiện
    cú pháp:
    if(điều kiện 1){
        các câu lệnh sẽ chạy khi điều kiện 1 đúng
    }else (điều kiện 2){
         các câu lệnh sẽ chạy khi điều kiện 2 đúng
    }else (điều kiện 3){
        các câu lệnh sẽ chạy khi điều kiện 3 đúng
    }else {
        các câu lệnh sẽ chạy khi mà các điều kiện đều sai
    }
</pre>
<?php
$tuoi =20;
if(($tuoi>0) && ($tuoi <18)){
    echo "<br> tuổi con nít";
}elseif(($tuoi >=18) && ($tuoi<=30)){
    echo "<br> Bạn đang trong thanh xuân";
}elseif(($tuoi >30) && ($tuoi<=50)){
    echo "<br> Bạn sắp già rồi";
}else{
    echo "<br> chia buồn bạn đã già";
}
?>
</body>
</html>
