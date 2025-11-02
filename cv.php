<?php
include("db.php");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            color: #333;
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .cv-container {
            background: white;
            width: 700px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 5px;
        }

        h2 {
            color: #0056b3;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }

        p {
            margin: 5px 0 15px;
        }
    </style>
</head>

<body>
    <div class="cv-container">
        <h1><?= $user['name'] ?></h1>
        <p><strong>Email:</strong> <?= $user['email'] ?></p>
        <p><strong>Phone:</strong> <?= $user['phone'] ?></p>
        <p><strong>Address:</strong> <?= $user['address'] ?></p>

        <hr>

        <h2>About Me</h2>
        <p><?= nl2br($user['about']) ?></p>

        <h2>Education</h2>
        <p><?= nl2br($user['education']) ?></p>

        <h2>Experience</h2>
        <p><?= nl2br($user['experience']) ?></p>

        <h2>Skills</h2>
        <p><?= nl2br($user['skills']) ?></p>
    </div>
</body>

</html>