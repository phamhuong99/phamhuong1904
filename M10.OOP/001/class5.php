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

    /*
     * Phương thức
     * */

    public function printInfo() {
        echo "<br>" . __METHOD__;
        echo "<br>Tên : " . $this->name;
        echo "<br>Tuổi : " . $this->age;
        echo "<br>Địa chỉ : " . $this->location;
        echo "<br>Điểm tổng kết : " . $this->point;
    }

}

//khởi tạo đối tượng từ class
$huong = new Student();

/*
 * muốn in ra cấu trúc của 1 đối tượng
 * */

echo "<pre>";
print_r($huong);
echo "</pre>";

//gọi đến 1 method trong class
$huong->printInfo();

//gọi đến các thuộc tính của cas từ bên ngoài class
echo "<br>---".$huong->name;
echo "<br>---".$huong->age;
echo "<br>---".$huong->location;
echo "<br>---".$huong->point;
?>

