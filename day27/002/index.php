<?php
/*
 * chuyển mảng trong php thành json
 */

$mang1 =[
    ["ten"=>"hà nội","gpd"=>"10 tỷ USD"],
["ten"=>"hồ chí minh","gpd"=>"15 tỷ USD"],
    ["ten"=>"bắc ninh","gpd"=>"5 tỷ USD"],
];

$json1=json_encode($mang1);

echo "<pre>";
print_r($mang1);
echo"</pre>";

echo "<pre>";
print_r($json1);
echo "</pre>";


?>