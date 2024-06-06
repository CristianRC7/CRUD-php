<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];

    $sql = "UPDATE personal_information SET name = '$name', last_name = '$last_name', email = '$email', hobby = '$hobby' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User updated successfully'); window.location.href = '../index.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
