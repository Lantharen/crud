<?php

if (!isset($_GET['id'])) {
    die('No ID :(');
}

$id = (int) $_GET['id'];

$connect = mysqli_connect('127.0.0.1', 'root', '', 'site');

$query  = 'SELECT * FROM `names` WHERE `id` = '.$id;
$result = mysqli_query($connect, $query);

$name = mysqli_fetch_assoc($result);

if (null === $name) {
    die('User not found!');
}

mysqli_close($connect);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database</title>
</head>
<body>


<h1>
    <?php
    echo $name['firstname'].' '.$name['lastname'];
    ?>
</h1>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($name['id']); ?>">
    <input type="text" name="firstname" value="<?php echo htmlspecialchars($name['firstname']); ?>">
    <input type="text" name="lastname" value="<?php echo htmlspecialchars($name['lastname']); ?>">
    <input type="submit" value="Refresh">
</form>
<form action="delete.php" method="GET">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($name['id']); ?>">
    <input type="submit" value="Delete">
</form>



</body>
</html>