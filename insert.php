<?php


$firstname = "";
$lastname = "";

if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = ($_POST['lastname']);
}


$connect =mysqli_connect('127.0.0.1', 'root', '','site');

$query = "INSERT INTO names (`firstname`, `lastname`) VALUES ('$firstname' , '$lastname')";
$result = mysqli_query($connect,$query);


mysqli_close($connect);

echo "
<script type=\"text/javascript\">
    window.location.href = \"crud.php\";
</script>
";


?>

