<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "daovanphuoc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Lỗi kết nối: " . $conn->connect_error);
}
echo "";
?>