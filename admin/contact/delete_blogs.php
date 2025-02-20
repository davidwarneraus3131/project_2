<?php
 include(__DIR__ . '/../../database/db.php'); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$sql = "DELETE FROM contact_messages WHERE id=$id";
if ($conn->query($sql)) {
    echo "Messages Deleted Successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
