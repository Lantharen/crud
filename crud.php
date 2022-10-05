<?php

$connect = mysqli_connect('mysql', 'root', 'root', 'default');

$query  = "SELECT * FROM `names`";
$result = mysqli_query($connect, $query);

$names = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($connect);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ebus' 16 dney</title>
</head>
<body>
<h1>Names</h1>

<ul>
    <?php foreach ($names as $key => $name): ?>
        <li>
            <a href="edit.php?id=<?php echo htmlspecialchars($name['id']); ?>">
                <?php echo $name['firstname'].' '.$name['lastname']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<form action="insert.php" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Create">
</form>
</body>
</html>
