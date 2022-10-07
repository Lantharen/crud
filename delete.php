<?php


$id = $_GET['id'] ?? null;

$id = (int)$id;


$connect = mysqli_connect('127.0.0.1', 'root1', '', 'site');

$query = "SELECT * FROM `names` WHERE `id` = '$id'";
//echo $query;
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));
if (mysqli_num_rows($result) > 0) {
    echo "Строка найдена. Удаляем...";
    $query = "DELETE FROM `names` WHERE `id`  = '$id'";
    mysqli_query($connect, $query) or die (mysqli_error($connect));
    $query = "SELECT * FROM `names` WHERE `id` = '$id'";
    $result = mysqli_query($connect, $query) or die (mysqli_error($connect));
    if (mysqli_num_rows($result) === 0) {
        echo "</br>Строка удалена.";
    }
}


echo "</br></br><a href='crud.php'>Вернуться</a>";


mysqli_close($connect);
