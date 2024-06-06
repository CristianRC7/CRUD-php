<?php
include 'conexion.php';

$response = [];

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM personal_information WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
        $response['message'] = 'User deleted successfully';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error deleting user: ' . $conn->error;
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'User ID not specified';
}

$conn->close();
echo json_encode($response);
?>
