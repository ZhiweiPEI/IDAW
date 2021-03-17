<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "tp3";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO user1 (id, login1, password1)
VALUES ('xxx', 'xxxx', 'xxxxx');";


if ($conn->multi_query($sql) === TRUE) {
    echo "successfully insert";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>