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
    //phương thức khởi tạo
    public function __construct()
    {
        echo "<br>".__METHOD__;
    }


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

?>

