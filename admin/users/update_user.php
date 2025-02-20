<?php
 include(__DIR__ . '/../../database/db.php'); 
 
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id";
if ($conn->query($sql)) {
    echo "User Updated Successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
