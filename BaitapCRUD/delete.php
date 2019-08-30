<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
include_once "config.php";

$id =(int) $_GET["id"];

var_dump($id);

$sqlSelect= "SELECT * FROM product WHERE id=".$id;

$result= $connection->query($sqlSelect);

$row = $result->fetch_assoc();
echo "<pre>";
print_r ($row);
echo "</pre>";
?>

<?php
if(isset($_POST) && !empty($_POST) && isset($_POST["product_id"])){
    $errors = array();
    if(!isset($_POST["product_id"]) || empty($_POST["product_id"])){
        $errors[] = "ID san pham khong hop le";
    }

    if(empty($errors)){
        $id = (int) $_POST["product_id"];

        $sqlDelete = "DELETE FROM product WHERE id=$id";
        //thực hiện câu lệnh sql

        echo $sqlDelete;
        $result = $connection->query($sqlDelete);

        if($result==true){
            echo "<div class='alert alert-success'>
Xóa nhân viên thành công ! <a href='index.php'> Trang chủ</a>
</div>";
        }else{
            echo"<div class='alert alert-danger'>
Xóa nhân viên thất bại!
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
            <h1>Xóa san phẩm</h1>
            <form name="delete" action="" method="post">
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

                <button type="submit" class="btn btn-primary">Xóa sản phẩm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>