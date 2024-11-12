<?php
echo "run: docker-compose up --build -d";

$servername = "db";
$username = "user";
$password = "root";
$dbname = "mydatabase";

$connect = new mysqli($servername, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
echo "<br> <br> Kết nối thành công tới MySQL!";
$connect->close();
?>