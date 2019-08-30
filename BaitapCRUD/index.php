<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
//nạp kết nối CSDL
include_once "config.php";

$sqlSelect = "SELECT * FROM product ";

/*thực hiện
 câu truy vấn và trả data cho biến $result */
$result = $connection->query($sqlSelect);

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liệt kê danh sách sản phẩm</h1>
            <h1>
                <a href="created.php" class="btn btn-success">Thêm mới sản phẩm</a>
            </h1>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>product_title</th>
                    <th>product_desc</th>
                    <th>created</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>status</th>
                    <th>hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0){
                    while($row=$result->fetch_assoc()){
                        echo "<pre>";
                        print_r($row);
                        echo"</pre>";
                        ?>
                <tr>
                    <td><?php echo $row["id"] ?> </td>
                    <td><?php echo $row["product_title"] ?> </td>
                    <td><?php echo $row["product_desc"] ?> </td>
                    <td><?php echo $row["created"] ?> </td>
                    <td><?php echo $row["price"] ?> </td>
                    <td><?php echo $row["quantity"] ?> </td>
                    <td><?php echo $row["status"] ?> </td>
                    <td>
                        <p><a href="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Sửa nhân viên</a> </p>
                        <p><a href="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa nhân viên</a> </p>
                    </td>
                </tr>
                <?php
                    }
                }else{
                    echo "Không tồn tại sản phẩm nào";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
