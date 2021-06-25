<?php

include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$class = $_POST['class'];
$hobby = $_POST['hobby'];
$address = $_POST['address'];

$sql = "UPDATE students SET name='$name', class='$class', hobby='$hobby', address='$address'
WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('location: index.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}