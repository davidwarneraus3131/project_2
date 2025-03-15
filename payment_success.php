<?php
session_start();
include("./database/db.php");
header("Content-Type: application/json");

// Get payment details from the request
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['payment_id'], $data['amount'], $data['plan'], $data['username'], $data['payment_method'])) {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
    exit();
}

$payment_id = $conn->real_escape_string($data['payment_id']);
$amount = $conn->real_escape_string($data['amount']);
$plan = $conn->real_escape_string($data['plan']);
$username = $conn->real_escape_string($data['username']);
$payment_method = $conn->real_escape_string($data['payment_method']); 
$status = "Completed";

// Insert payment record into database, including payment method
$sql = "INSERT INTO payments (payment_id, username, amount, plan, status, payment_method) 
        VALUES ('$payment_id', '$username', '$amount', '$plan', '$status', '$payment_method')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Payment recorded successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Database error"]);
}

$conn->close();
?>
