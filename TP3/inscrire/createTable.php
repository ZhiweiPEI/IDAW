<?php
$servername = "localhost";
$username = "root";
$password = "962095";
$dbname = "tp3";

$conn = new mysqli($servername, $username, $password,$dbname);

$sql = "CREATE TABLE MyGuests (
    
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    user_login VARCHAR(30) NOT NULL,
    user_password VARCHAR(30) NOT NULL,
    pseudo VARCHAR(50) NOT NULL
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}
$conn->close();
?>