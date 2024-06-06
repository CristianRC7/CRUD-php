<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="../frontend/edit_data.css">
</head>
<body>
    <h1>Edit User</h1>
    <?php
    include '../backend/conexion.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM personal_information WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>
            <form action="../backend/edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required>
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>">
                <label for="hobby">Hobby:</label>
                <input type="text" name="hobby" value="<?php echo $row['hobby']; ?>">
                <button type="submit">Save Changes</button>
                <button type="button" class="cancel-button" onclick="goToIndex()">Cancel</button>
            </form>
            <?php
        } else {
            echo "No user found with this ID.";
        }
    } else {
        echo "No ID specified.";
    }

    $conn->close();
    ?>
    <script>
        function goToIndex() {
            window.location.href = '../index.php';
        }
    </script>
</body>
</html>
