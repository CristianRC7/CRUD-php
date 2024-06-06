<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Data</title>
    <link rel="stylesheet" href="frontend/style.css">
</head>
<body>
    <h1>Add User Data</h1>
    <form action="../backend/create.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="hobby">Hobby:</label><br>
        <textarea id="hobby" name="hobby"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
