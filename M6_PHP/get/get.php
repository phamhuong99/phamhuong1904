<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    echo 'Tên: ' . $_GET['name'] . '<br>';
    echo 'Tuổi: ' . $_GET['age'];
}