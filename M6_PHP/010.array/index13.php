<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Loop mảng đa chiều
    yêu cầu in ra tên các thành phố trong mảng
</pre>
<?php
$array3 = array();
$array3["china"]=array("name" => "Trung Quốc", "city" => "Hồng Kong", "Đài Bắc", "Thành Đô");
$array3["korea"]=array("name" => "Korea", "city" => "Seul");
$array3["japan"]=array("name" => "Japan", "city" => "Tokyo", "Kyoto");
$array3["vn"]=array("name" => "Việt Nam", "city" => "Hà Nội", "Hưng Yên", "Hồ Chí Minh");

echo "<pre>";
print_r($array3);
echo "</pre>";
/*foreach ($array3 as $keyCountry => $country) {
    foreach($country as $keyCities => $cities) {
        if ($keyCities == "city") {
            foreach($cities as $keyCity => $city){
                echo "<br>". $city;
            }
        }
    }
}*/
foreach($array3 as $keyCountry => $country) {
    foreach ($country as $keyCities => $cities) {
        if ($keyCities == "city") {
            foreach ($cities as $keyCity => $city) {
                echo "<br> " . $city;
            }
        }
    }
}
?>
</body>
</html>
