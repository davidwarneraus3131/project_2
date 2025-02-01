<?php
include("./database/db.php"); 

// Get filter values from the GET request
$searchField = isset($_GET['search-field']) ? $_GET['search-field'] : '';
$minPrice = isset($_GET['min_price']) ? $_GET['min_price'] : 0;
$maxPrice = isset($_GET['max_price']) ? $_GET['max_price'] : 1000000; // Default max price
$beds = isset($_GET['beds']) ? $_GET['beds'] : 0;

// Base SQL query
$sql = "SELECT * FROM properties WHERE 1=1";

// Prepare the query
$stmt = $conn->prepare($sql);

// Flag for binding parameters dynamically
$bindTypes = ''; // Type string for binding params
$bindValues = []; // Array to hold bind values

// Apply search filter
if (!empty($searchField)) {
    $searchField = "%" . $searchField . "%"; // Add wildcard for LIKE query
    $sql .= " AND (property_name LIKE ? OR city LIKE ? OR address LIKE ?)";
    $bindTypes .= 'sss';
    $bindValues[] = $searchField;
    $bindValues[] = $searchField;
    $bindValues[] = $searchField;
}

// Apply price filter
if ($minPrice > 0) {
    $sql .= " AND price >= ?";
    $bindTypes .= 'i';
    $bindValues[] = $minPrice;
}
if ($maxPrice < 1000000) {
    $sql .= " AND price <= ?";
    $bindTypes .= 'i';
    $bindValues[] = $maxPrice;
}

// Apply bedrooms filter
if ($beds > 0) {
    $sql .= " AND beds = ?";
    $bindTypes .= 'i';
    $bindValues[] = $beds;
}

// Prepare the final query
$stmt = $conn->prepare($sql);

// Bind parameters dynamically based on the filters
if ($bindTypes) {
    $stmt->bind_param($bindTypes, ...$bindValues);
}

// Execute the query
$stmt->execute();
$result = $stmt->get_result();

// Process the result...
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Display each property
        echo '<div class="property-item">';
        echo '<h3>' . htmlspecialchars($row['property_name']) . '</h3>';
        echo '<p>' . htmlspecialchars($row['price']) . '</p>';
        echo '<p>' . htmlspecialchars($row['city']) . '</p>';
        echo '</div>';
    }
} else {
    echo "No properties found.";
}

// Close the statement
$stmt->close();
?>
