<?php

$dbUser = 'root';
$dbPass = '';
$dbName = 'cv_generator';
$dbServer = 'localhost';

$conn = new mysqli($dbServer, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection Error" . $conn->connect_error);
}
