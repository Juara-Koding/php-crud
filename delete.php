<?php
include 'connection.php';
    
$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header('location: index.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}