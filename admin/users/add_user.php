<?php
 include(__DIR__ . '/../../database/db.php'); 
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
if ($conn->query($sql)) {
    echo "User Added Successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
