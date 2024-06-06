<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="../frontend/add_data.css">
</head>
<body>
    <h1>Add User</h1>
    <form action="../backend/create.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="hobby">Hobby:</label>
        <textarea id="hobby" name="hobby"></textarea>

        <button type="submit">Submit</button>
        <button type="button" class="cancel-button" onclick="goToIndex()">Cancel</button>
    </form>

    <script>
        function goToIndex() {
            window.location.href = '../index.php';
        }
    </script>
</body>
</html>
