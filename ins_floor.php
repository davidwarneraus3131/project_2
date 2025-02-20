<?php
include("./database/db.php");


// Check if form is submitted
if (isset($_POST['submit'])) {
    $property_name = $conn->real_escape_string($_POST['property_name']);
    $floor_plans = $conn->real_escape_string($_POST['floor_plans']);

    // Validate JSON format
    json_decode($floor_plans);
    if (json_last_error() !== JSON_ERROR_NONE) {
        die("Invalid JSON format. Please check your input.");
    }

    // Insert query
    $query = "INSERT INTO properties (property_name, floor_plans) VALUES ('$property_name', '$floor_plans')";
    
    if ($conn->query($query) === TRUE) {
        echo "Property added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
