<?php


session_start();
include("./includes/header.php");
include("./database/db.php");




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $prop_id = intval($_POST['property_id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

  

    // Insert query
    $sql = "INSERT INTO enquiry (property_id, name, email, phone, message) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issss", $prop_id, $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Enquiry submitted successfully!');</script>";
        // Optionally redirect to thank you page
    } else {
        echo "<script>alert('Something went wrong!');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
