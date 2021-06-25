<?php

include 'connection.php';

if (isset($_POST['name'], $_POST['class'], $_POST['hobby'], $_POST['address'])) {
    
    $name = $_POST['name'];
    $class = $_POST['class'];
    $hobby = $_POST['hobby'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students (name, class, hobby, address)
    VALUES ('$name', '$class', '$hobby', '$address')";

    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

} else {
    echo "Insert gagal!";
}