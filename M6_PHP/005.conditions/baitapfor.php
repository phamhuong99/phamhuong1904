<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
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
            <tr>
               <td> <?php
                   for($i=1;$i<=20;$i++){
                       echo '' . $i . '<br/>';
                   }
                   ?>
               </td>
                <td>
                    <?php
                    for($j=1;$j<=20;$j++){
                        echo 'Tiêu đề số ' . $j . '<br/>';
                    }
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<div class="container1">
    <div class="row1">
        <table class="table1">
            <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
            </tr>
            </thead>
            <tbody>

            <?php
            for($i = 1;$i <= 20;$i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>Bản ghi số $i</td>";
                echo "</tr>";

            }
            ?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
