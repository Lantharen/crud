<?php
$id = "";
$firstname = "";
$lastname = "";

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
if (isset($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (isset($_POST['lastname'])) {
    $lastname = ($_POST['lastname']);
}


$connect =mysqli_connect('127.0.0.1', 'root', '','site');
$query = 'UPDATE names SET firstname = "'. $firstname .'", lastname = "'. $lastname .'" WHERE id = '.$id;
$result = mysqli_query($connect,$query);
mysqli_close($connect);


echo "
<script type=\"text/javascript\">
    window.location.href = \"crud.php\";
</script>
";


?>