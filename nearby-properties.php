<?php
$data = json_decode(file_get_contents("php://input"), true);
$lat = $data['lat'];
$lng = $data['lng'];

include("./database/db.php");

$radius = 10; // km radius to search for properties

$sql = "
SELECT properties.*, users.name, users.user_img,
(6371 * ACOS(
    COS(RADIANS($lat)) * COS(RADIANS(latitude)) * 
    COS(RADIANS(longitude) - RADIANS($lng)) + 
    SIN(RADIANS($lat)) * SIN(RADIANS(latitude))
)) AS distance
FROM properties
JOIN users ON properties.agent_id = users.id
WHERE latitude IS NOT NULL AND longitude IS NOT NULL
HAVING distance <= $radius
ORDER BY distance ASC
";

$result = mysqli_query($conn, $sql);
$properties = [];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $properties[] = $row;
    }
}

// If no properties are found, print a debug message
if (empty($properties)) {
    echo json_encode(['message' => 'No properties found near you.']);
} else {
    header('Content-Type: application/json');
    echo json_encode($properties);
}
?>
