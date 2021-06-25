<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    
    $name = $row['name'];
    $class = $row['class'];
    $hobby = $row['hobby'];
    $address = $row['address'];

    mysqli_close($conn);

} else {
    echo "Id tidak ditemukan";
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value=<?= $id ?>>

        <label>Name:</label><br>
        <input type="text" name="name" value=<?= $name ?>><br>

        <label>Class:</label><br>
        <input type="text" name="class" value=<?= $class ?>><br>

        <label>Hobby:</label><br>
        <input type="text" name="hobby" value=<?= $hobby ?>><br>

        <label>Address:</label><br>
        <input type="text" name="address" value=<?= $address ?>><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>