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
    public function changeInfo($name_param, $age_param)
    {
        echo "<br>".__METHOD__;
        $this->name = $name_param;
        $this->age = $age_param;
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
$huong->changeInfo("pham khanh vi", 20);

echo "<pre>";
print_r($huong);
echo "</pre>";

?>

