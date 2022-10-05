<?php

$id        = $_POST['id'] ?? null;
$firstName = $_POST['firstname'] ?? null;
$lastName  = $_POST['lastname'] ?? null;

if (null === $id || null === $firstName || null === $lastName) {
    die('Missing data!');
}

$id        = (int) $id;
$firstName = htmlspecialchars($firstName);
$lastName  = htmlspecialchars($lastName);

$connect = mysqli_connect('mysql', 'root', 'root', 'default');
$query   = 'UPDATE `names` SET `firstname` = "'.$firstName.'", `lastname` = "'.$lastName.'" WHERE `id` = '.$id;

$result  = mysqli_query($connect, $query);

if (false === $result) {
    die('Error!');
}

mysqli_close($connect);

header('Location: /crud/crud.php');
die();
