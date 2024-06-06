<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $hobby = $_POST['hobby'];

    $sql = "INSERT INTO personal_information (name, last_name, email, hobby) 
            VALUES ('$name', '$last_name', '$email', '$hobby')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php');
        exit; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
