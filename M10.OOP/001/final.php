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
     * phương thức đầu tiên của class
     * phương thức khởi tạo __construct()
     * phương thức này nó sẽ chạy ngay khi khởi tạo đối tượng
     * từ class mà ko cần gọi trực tiếp
     * hàm thì nằm ngoài class
     * còn phương thức method nằm trong class
     * method chính là hàm bên trong class
     * */
    public function __construct($name_param, $age_param, $location_param)
    {
        /*
         * gán tham số truyền vào thuộc tính cảu clas
         *
         *
         * trong class để gọi đến chính class thì ta dùng từ khóa $this
         * để gọi thuộc tính $this->>tên_thuộc_tính nhg chú ý tên thuộc tính
         * không có $
         **/
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;

        /*
         * __METHOD__ là magic method cho ta biết
         * phương thức nào đang đc gọi*/
        echo "<br>__METHOD__".__METHOD__;
    }

    //xây dựng phương thức khác
    public function printInfo() {
        echo "<br>__METHOD__" . __METHOD__;
        echo "<br>tên : " . $this->name;
        echo "<br>tuổi : " . $this->age;
        echo "<br>địa điểm : " . $this->location;
    }

    /*phương thức tính điểm trung bình
    @param $point_arr_param
    @return bool
    */
    public function calculatePoint($point_arr_param){
        /*
         * is_array() kiểm tra biến có phả 1 mảng hay không
         * !empty( check không rỗng
         * empty() check rỗng
         * ! toán tử ! phủ định ngược lại
         * */

        if(is_array($point_arr_param) && !empty($point_arr_param)){
            $count =0;
            $total =0;
            foreach ($point_arr_param as $key => $value){
                //$total = $total + value;
                $total += $value;
                $count++;
            }
            $point = $total/$count;
            $this->point = $point;
        }
        return false;
    }
}//kết thúc class


// khởi tạo đối tượng từ class
//sử dụng từ khóa new tên_class();
$huong = new Student("hương", "20", "Hưng Yên");

echo "<br> Gọi đến method printInfo()";
/*gọi 1 phương thức
*/

$huong->printInfo();

/*
 * gọi 1 số thuộc tính bên trong class
 * */
echo "<br> In ra tên của sinh viên bên ngoài class ". $huong->name;
echo "<br> In ra tuổi của sinh viên bên ngoài class". $huong->age;
echo "<br> In ra quê quán của sinh viên bên ngoài class". $huong->location;

echo "<br> In ra cấu trúc của class";

/*
 * xem cấu trúc của 1 clas
 * thì sử dụng hàm print_r()
 *
 * */

echo "<pre>";
print_r($huong);
echo "</pre>";


//gọi đến phương thức calculateoint()
$point = array(
    'java'=>5,
    'database' => 3,
    'php' => 6,
    'html' => 2,
    'oop' => 7,
    '.net' =>9
);

//gọi đến phương thức của class
$huong->calculatePoint($point);
echo "<br> Diem trung binh : ". $huong->point;

?>

