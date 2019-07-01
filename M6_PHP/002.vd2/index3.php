<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Biến trong php
    Biến là thứ, cái, khái niệm, đối tượng...dùng để chứa giá trị như số hoặc chuỗi
    và biến có đặc điểm là thay đổi trong qua trình chạy
    Biến trong PHP bắt đầu $
    Tên biến trong PHP phải bắt đầu bằng 1 chữ cái
    Tên biến thì chỉ nên chứa chữ số hoặc chữ cái hay ký tự_mà ko chứa
    những ký tự đặc biệt
    Tên bến ko được phép chép chứa dấu tiếng việt hay dấu cách
    trong PHP nối chuỗi thì dùng dấu .
</pre>

<?php
$ten = "Pham Thi Huong";
$tuoi = 20;
$quehuong = "Hung Yen";

echo "<br> tên là : " .$ten;
echo "<br> tuổi là : " .$tuoi;
echo "<br> Quê hương là : " .$quehuong;

?>

<pre>
    Nếu trong "" mà in ra tên của biến
    thì php sẽ hiểu trong nháy kép đó là biến
    Nếu trong '' mà in ra tên của biến
    thì php sẽ hiểu trong nháy đơn đó đơn thuần chỉ là 1 chuỗi bình thường
</pre>

<?php echo "<br> $ten";?>
<?php echo '<br> $ten';?>
</body>
</html>
