<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<pre>
    BT3 : dùng vòng lặp for in ra 1 bảng table gồm có 20 dòng tiêu đề từ 1 đến 20
</pre>

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
            </tr>
            </thead>
            <tbody>

            <?php
            $i=1;
            do{
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>Bản ghi số $i</td>";
                echo "</tr>";
                $i++;

            }while($i <= 20)
            ?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
