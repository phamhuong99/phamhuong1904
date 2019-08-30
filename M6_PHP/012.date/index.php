<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Timezone là múi giờ
    giờ việt nam múi giờ là : "Asia/Ho_Chi_Minh


    Nếu muốn lấy giwf hiện tại chính xác thì cần đặt đúng giờ của
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    nếu muốn chuyển múi giờ thì cần thay đổi tham số 
</pre>
<?php
  date_default_timezone_set('Asia/Ho_Chi_Minh');

  echo"<brr> Giờ cho người đọc: ".date("H:i:s d/m/Y");
  echo "<br> Giờ của linux (timestamp): ".time();
?>
</body>
</html><?php
