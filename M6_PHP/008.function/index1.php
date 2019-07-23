<?php
function tinhluong ($luongthang='10000000',$songaycong='24'){
    if($songaycong=6) {
        echo $luongthang * ($songaycong / 24);
    }
}
echo "<brlương thực nhận là: ".tinhluong();


//
function tinhluong($luongthang,$songaycong) {
    $luongthuclinh = ($luongthang*$songaycong)/24;
    return $luongthuclinh;
}
// gọi hàm
echo "<br> Lương tháng của bạn là : " . tinhluong(10000000, 1);
?>
?>
