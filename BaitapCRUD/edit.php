<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
/*
 * nạp file kết nối cơ sở dữ liệu
 */
include_once "config.php";
/**
 * Lấy id từ trên url xuống
 */
$id = (int) $_GET["id"];
var_dump($id);
$sqlSelect = "SELECT * FROM product WHERE id=".$id;
$result = $connection->query($sqlSelect);
$row = $result->fetch_assoc();


echo "<pre>";
print_r($row);
echo "</pre>";
?>

<?php

/**
 * kiểm tra xem dữ liệu có submit đi hay không
 */
if(isset($_POST) && !empty($_POST) && isset($_POST["product_id"])) {
    /*
     * tạo biến check lỗi mặc định là rỗng
     */
    $errors=array();

    if(!isset($_POST["product_title"]) || empty($_POST["product_title"])) {
        $errors[] = "Tên sản phẩm không hợp lệ";
    }
    if(!isset($_POST["product_desc"]) || empty($_POST["product_desc"])) {
        $errors[] = "Mô tả sản phẩm không hợp lệ";
    }
    if(!isset($_POST["created"]) || empty($_POST["created"])) {
        $errors[] = "Thời gian tạo sản phẩm không hợp lệ";
    }
    if(!isset($_POST["price"]) || empty($_POST["price"])) {
        $errors[] = "Giá sản phẩm không hợp lệ";
    }
    if(!isset($_POST["quantity"]) || empty($_POST["quantity"])) {
        $errors[] = "Số lượng sản phẩm không hợp lệ";
    }
    if(!isset($_POST["status"])) {
        $errors[] = "Trạng thái lưu trữ không hợp lệ";
    }
    if(empty($errors)) {
        $id=(int) $_POST["product_id"];
        $product_title=$_POST['product_title'];
        $product_desc=$_POST['product_desc'];
        $created=$_POST['created'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];
        $status=$_POST['status'];

        $sqlUpdate ="UPDATE product SET product_title='$product_title',product_desc='$product_desc',created='$created',price=$price,quantity=$quantity,status=$status WHERE  id=$id";
        // thực hiện câu lệnh SQL
        echo $sqlUpdate;
        $result=$connection->query($sqlUpdate);
        if ($result == true) {
            echo "<div class='alert alert-success'>
Sửa sản phẩm thành công ! <a href='index.php'>Trang chủ</a>
</div>";
        } else {
            echo "<div class='alert alert-danger'>
Sửa sản phẩm thất bại !
</div>";
        }
    }else{
        /**
         * Chuyển mảng $errors thành chuỗi = hàm implode()
         */
        $errors_string = implode("<br>", $errors);
        echo "<div class='alert alert-danger'>$errors_string</div>";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1> Sửa sản phẩm </h1>
            <form name="create" action ="" method="post">
                <input type="hidden" name="product_id" value="<?php echo $row["id"]?>">
                <div class="form-group">
                    <label>Tên sản phẩm: </label>
                    <input type="text" name="product_title" class="form-control" value="<?php echo $row["product_title"]?>">
                </div>
                <div class="form-group">
                    <label>Mô tả sản phẩm: </label>
                    <input type="text" name="product_desc" class="form-control" value="<?php echo $row["product_desc"]?>">
                </div>
                <div class="form-group">
                    <label>Thời gian tạo sản phẩm: </label>
                    <input type="datetime" name="created" class="form-control" value="<?php echo $row["created"]?>">
                </div> <div class="form-group">
                    <label>Giá sản phẩm: </label>
                    <input type="text" name="price" class="form-control" value="<?php echo $row["price"]?>">
                </div> <div class="form-group">
                    <label>Số lượng sản phẩm: </label>
                    <input type="text" name="quantity" class="form-control" value="<?php echo $row["quantity"]?>">
                </div>
                <div class="form-group">
                    <label>Trạng thái sản phẩm: </label>
                    <input type="radio" name="status" class="form-control" value="0">Unpublish
                    <input type="radio" name="status" class="form-control" value="1">Publish

                </div>

                <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>