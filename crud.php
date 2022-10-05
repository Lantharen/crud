<?php

$connect =mysqli_connect('127.0.0.1', 'root', '','site');

$query = "SELECT * FROM names";
$result = mysqli_query($connect,$query);

$names = mysqli_fetch_all($result);

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
    <title>Ebus' 16 dney</title>
</head>
<body>
<h1>Names</h1>


<?php

foreach ($names as $key => $name){
    //print_r($name);
    echo '<a href="edit.php?id=' . $name[0] . '"> ' . $name[1] . ' ' . $name[2] . ' </a> <br>';
    //echo "<a href=\"edit.php?id=$name[0]\">$name[1] $name[2]</a></br>";
}


?>
<form action="insert.php" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Create">



</form>



</body>
</html>
