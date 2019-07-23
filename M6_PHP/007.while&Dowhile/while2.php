<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

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

            <?php
            $i=1;
            while($i <= 20) {?>
                <tr>
                    <td><?php  echo $i ."<br>"; ?></td>
                    <td><?php  echo 'Tiêu đề số '.$i . "<br>";
                    $i++; ?></td>>
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>

