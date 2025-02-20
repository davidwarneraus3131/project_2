<?php
 include(__DIR__ . '/../../database/db.php'); if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$sql = "SELECT * FROM properties WHERE id = $id";
$result = $conn->query($sql);
echo json_encode($result->fetch_assoc());
$conn->close();
?>
