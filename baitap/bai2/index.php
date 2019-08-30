<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$location =10;
$gender=1;
?>
<form name="demo" action="" method="post">
<p>
    <label>Địa Điểm</label>
    <select name="location">
        <option value="">Chọn địa điểm</option>
        <option value="1" <?php if($location ==1 ) {echo "selected"; }else {echo ""; }?>>Bắc Ninh</option>
        <option value="1" <?php if($location ==2 ) {echo "selected"; }else {echo ""; }?>>Bắc Giang</option>
        <option value="1" <?php if($location ==3 ) {echo "selected"; }else {echo ""; }?>>Quảng Ninh</option>
        <option value="1" <?php if($location ==4 ) {echo "selected"; }else {echo ""; }?>>Hải Phòng</option>
        <option value="1" <?php if($location ==5 ) {echo "selected"; }else {echo ""; }?>>Nam Định</option>
        <option value="1" <?php if($location ==6 ) {echo "selected"; }else {echo ""; }?>>Thanh Hóa</option>
        <option value="1" <?php if($location ==7 ) {echo "selected"; }else {echo ""; }?>>Nghệ An</option>
        <option value="1" <?php if($location ==8 ) {echo "selected"; }else {echo ""; }?>>Lào Cai</option>
        <option value="1" <?php if($location ==9 ) {echo "selected"; }else {echo ""; }?>>Hà Nam</option>
        <option value="1" <?php if($location ==10 ) {echo "selected"; }else {echo ""; }?>>Hà Nội</option>
    </select>
</p>
    <p>
    <label>Giới tính</label>
    <input type="radio" name="gender" value="0" <?php if($gender ==  0 ) {echo "checked"; }else {echo ""; }?>>Nữ
    <input type="radio" name="gender" value="1" <?php if($gender == 1 ) {echo "checked"; }else {echo ""; }?>>Nam
    </p>
</form>
</body>
</html>