<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$tuoi =20;
if(($tuoi>0) && ($tuoi <18)):
    echo "<br> tuổi con nít";
elseif(($tuoi >=18) && ($tuoi<=30)):
    echo "<br> Bạn đang trong thanh xuân";
elseif(($tuoi >30) && ($tuoi<=50)):
    echo "<br> Bạn sắp già rồi";
else:
    echo "<br> chia buồn bạn đã già";
endif;
?>
</body>
</html>
