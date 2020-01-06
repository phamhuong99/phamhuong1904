<?php
/*
 * chuyển json về mảng
 */

$json1 ='[{"ten":"hà nội","gpd":"10 tỷ USD"},{"ten":"hồ chí minh","gpd":"15 tỷ USD}]';

$mang1 =json_decode($json1);

echo "<pre>";
print_r($json1);
echo "</pre>";

echo "<pre>";
print_r($mang1);
echo "</pre>";
?>
