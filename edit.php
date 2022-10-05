<?php


$id = "";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
}



$connect =mysqli_connect('127.0.0.1', 'root', '','site');

$query = 'SELECT * FROM names WHERE id = ' . $id;
$result = mysqli_query($connect,$query);

$names = mysqli_fetch_row($result);

mysqli_close($connect);
//print_r($names);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebus' 3 dnya</title>
</head>
<body>
<h1>

    <?php
    echo "$names[1] $names[2]";

    ?>
</h1>


<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $names[0]?>">
    <input type="text" name="firstname" value="<?php echo $names[1]?>">
    <input type="text" name="lastname" value="<?php echo $names[2]?>">
    <input type="submit" value="Refresh">
</form>

</body>
</html>

