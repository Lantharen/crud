<?php

$firstName = $_POST['firstname'] ?? null;
$lastName  = $_POST['lastname'] ?? null;

if (null === $firstName || null === $lastName) {
    die('Missing data!');
}

$firstName = htmlspecialchars($firstName);
$lastName  = htmlspecialchars($lastName);

$connect = mysqli_connect('127.0.0.1', 'root', '', 'site');

$query  = "INSERT INTO `names` (`firstname`, `lastname`) VALUES ('$firstName' , '$lastName')";
$result = mysqli_query($connect, $query);

mysqli_close($connect);

header('Location: crud.php');
die();