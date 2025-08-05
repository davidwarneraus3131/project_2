<?php
include("./database/db.php");
session_start();

$user_id = $_SESSION['user_id'] ?? 0;
$cities = isset($_POST['cities']) ? implode(',', $_POST['cities']) : '';
$min_budget = $_POST['min_budget'];
$max_budget = $_POST['max_budget'];
$property_types = isset($_POST['property_types']) ? implode(',', $_POST['property_types']) : '';

$sql = "INSERT INTO user_preferences (user_id, cities, min_budget, max_budget, property_types) 
        VALUES (?, ?, ?, ?, ?) 
        ON DUPLICATE KEY UPDATE 
            cities = VALUES(cities), 
            min_budget = VALUES(min_budget),
            max_budget = VALUES(max_budget),
            property_types = VALUES(property_types)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("isdss", $user_id, $cities, $min_budget, $max_budget, $property_types);
$stmt->execute();

header("Location: thankyou.php");
exit;
?>
