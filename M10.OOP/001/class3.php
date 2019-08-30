<?php
//khai báo class
class Student {

    /*
     * khai báo các thuộc tính
     * của class
     * thuộc tính chỉ tính chất đặc điểm
     * của class đó
     * */

    public  $name = "pham thi huong";

    public  $age = 20;

    public $location = "hung yen";

    public  $point = 8;

}

//khởi tạo đối tượng từ class
$huong = new Student();

/*
 * muốn in ra cấu trúc của 1 đối tượng
 * */

echo "<pre>";
print_r($huong);
echo "</pre>";
?>

