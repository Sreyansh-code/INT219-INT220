<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landtax_portal"; // Make sure this database exists

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>