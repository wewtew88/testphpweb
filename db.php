<?php
$host = getenv("MYSQLHOST");
$port = getenv("MYSQLPORT");
$dbname = getenv("MYSQLDATABASE"); // ✅ FIXED
$username = getenv("MYSQLUSER");
$password = getenv("MYSQLPASSWORD");

$conn = new mysqli($host, $username, $password, $dbname, (int)$port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>