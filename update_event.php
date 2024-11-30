<?php

include("connection.php");
$con = connection();

$id = $_POST["id"];
$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];

$sql = "UPDATE mat1 SET title='$title', description='$description', date='$date' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {

}

?>