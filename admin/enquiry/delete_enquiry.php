<?php
 include(__DIR__ . '/../../database/db.php'); 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$sql = "DELETE FROM enquiry WHERE id=$id";
if ($conn->query($sql)) {
    echo "Enquiry Deleted Successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
