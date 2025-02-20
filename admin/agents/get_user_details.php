<?php
include(__DIR__ . '/../../database/db.php');  // Assuming db.php connects to your database

// Check if the user ID is set in the query string
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    
    // Prepare the SQL query to fetch user details
    $sql = "SELECT id, name, email, phone, alternate_number, aadhaar, occupation, pan_number, 
            rera_registration_number, company_name, house, street, state, country, city, 
            pin_code, status, user_img, role, user_description, facebook_link, twitter_link, 
            linkedin_link, rating, offer, place_count 
            FROM users WHERE id = $userId";
    
    // Execute the query and check for errors
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Fetch the user details and return as JSON
        $userDetails = $result->fetch_assoc();
        echo json_encode($userDetails);
    } else {
        echo json_encode(["error" => "User not found"]);
    }
} else {
    echo json_encode(["error" => "Invalid user ID"]);
}

// Close the database connection
$conn->close();
?>
