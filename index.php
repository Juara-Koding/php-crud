<?php

include 'connection.php';

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
    <a href="create.php">Tambah</a>
    <table border=1>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Class</td>
            <td>Hobby</td>
            <td>Address</td>
            <td>Actions</td>
        </tr>
        <?php
            $students = [];
            if (mysqli_num_rows($result) > 0) {
                while($student = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td>".$student['id']."</td>";
                        echo "<td>".$student['name']."</td>";
                        echo "<td>".$student['class']."</td>";
                        echo "<td>".$student['hobby']."</td>";
                        echo "<td>".$student['address']."</td>";
                        echo "<td>
                            <a href='edit.php?id=".$student['id']."'>Edit</a> | 
                            <a href='delete.php?id=".$student['id']."'>Delete</a>
                        </td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>