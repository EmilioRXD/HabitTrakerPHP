<?php
include("connection.php");
$con = connection();

$title = $_POST['title'];
$description = $_POST['description'];
$date = $_POST['date'];

$sql = "INSERT INTO mat1 (title, description, date) VALUES('$title', '$description', '$date')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {

}

?>