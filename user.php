<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
</head>

<body>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php
        include("db.php");
        $result = mysqli_query($conn, "SELECT id, name, email FROM users");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td><a href='cv.php?id={$row['id']}'>Generate CV</a></td>
            </tr>";
        }
        ?>
    </table>

</body>

</html>