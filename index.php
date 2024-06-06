<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php</title>
    <link rel="stylesheet" href="frontend/style.css">
</head>
<body>
    <h1>User List</h1>
    <a href="page/add_data.php" class="add-button">Add Data</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Hobby</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody id="userTable">
            <?php
            include 'backend/conexion.php';

            $sql = "SELECT id, name, email, hobby FROM personal_information";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["hobby"] . "</td>";
                    echo '<td class="actions">
                            <a href="page/edit_data.php?id=' . $row["id"] . '"><button>Edit</button></a>
                            <button onclick="deleteUser(' . $row["id"] . ')">Delete</button>
                          </td>';
                    echo "</tr>";
                }
            } else {
                echo '<tr><td colspan="5" class="center-text">No data available</td></tr>';
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <script>
        function deleteUser(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                fetch('backend/delete.php?id=' + id)
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        if (data.status === 'success') {
                            window.location.href = 'index.php';
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>
</body>
</html>
