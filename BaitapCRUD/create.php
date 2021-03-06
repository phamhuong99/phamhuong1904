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

$product_title="";
$product_desc="";
$created="";
 $price="";
$quantity="";
  $status="";

  if(isset($_POST) && empty($_POST)){
      $errors =array();

      if(!isset($_POST["product_title"]) || empty($_POST["product_title"])){
          $errors[] ="tên sản phẩm không hợp lệ";
      }
      if(!isset($_POST["$product_desc"]) || empty($_POST["$product_desc"])){
          $errors[] ="mô tả sản phẩm không hợp lệ";
      }
      if(!isset($_POST["$created"]) || empty($_POST["$created"])){
          $errors[] ="thời gian sản phẩm không hợp lệ";
      }
      if(!isset($_POST["$price"]) || empty($_POST["$price"])){
          $errors[] ="giá sản phẩm không hợp lệ";
      }
      if(!isset($_POST["$quantity"]) || empty($_POST["$quantity"])){
          $errors[] ="mô tả sản phẩm không hợp lệ";
      }
      if(!isset($_POST["$status"]) || empty($_POST["$status"])){
          $errors[] ="trạng thái sản phẩm không hợp lệ";

      }

      if(empty($errors)){
          $product_title= $_POST['product_title'];
          $product_desc=$_POST['product_desc'];
          $created=$_POST['created'];
          $price=$_POST['price'];
          $quantity=$_POST['$quantity'];
          $status=$_POST['$status'];

          $sqlInsert = "INSERT INTO product ( product_title, product_desc, created, price, quantity, status) VALUES ('$product_title','$product_desc', '$created', '$price','$quantity','$status')";

          $result = $connection->query($sqlInsert);
          if($result == true){
              echo "<div class='alert alert-success'>
Thêm mới nhân viên thành công! <a href='index.php'>Trang chủ</a>
</div>";

          }else{
              echo "<div class='alert alert-danger'>
Thêm mới nhân viên thất bại !
</div>";
          }
      }else{
          $errors_string = implode("<br>", $errors);
          echo "<div class= 'alert alert-danger'>$errors_string</div>";
      }
  }
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>tạo sản phẩm mới</h1>
            <form name="create" action="" method="post">
                <div class="form-group">
                    <label>Tên sản phẩm: </label>
                    <input type="text" name="product_title" class="form-control" value="<?php echo $product_title?>">
                </div>

                <div class="form-group">
                    <label>Mô tả sản phẩm: </label>
                    <input type="text" name="product_desc" class="form-control" value="<?php echo $product_desc?>">
                </div>

                <div class="form-group">
                    <label>Thời gian tạo sản phẩm: </label>
                    <input type="text" name="created" class="form-control" value="<?php echo $created?>">
                </div>

                <div class="form-group">
                    <label>Giá bán sản phẩm: </label>
                    <input type="text" name="price" class="form-control" value="<?php echo $price?>">
                </div>

                <div class="form-group">
                    <label>Số lượng sản phẩm: </label>
                    <input type="text" name="quantity" class="form-control" value="<?php echo $quantity?>">
                </div>

                <div class="form-group">
                    <label>Trạng thái sản phẩm: </label>
                    <input type="radio" name="status" class="form-control" value="0">unpublish
                    <input type="radio" name="status" class="form-control" value="1">publish
                </div>
                <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
