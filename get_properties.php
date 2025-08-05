<?php
include("./database/db.php");

header('Content-Type: application/json');

$query = "SELECT *
          FROM properties 
          WHERE latitude IS NOT NULL AND longitude IS NOT NULL";

$result = mysqli_query($conn, $query);
$properties = [];

while ($row = mysqli_fetch_assoc($result)) {
   $properties[] = [
    'id' => $row['id'],
    'property_name' => $row['property_name'],
    'price' => $row['price'],
    'location' => $row['location'],
    'description' => $row['description'],
    'beds' => $row['beds'],
    'baths' => $row['baths'],
    'square_feet' => $row['square_feet'],
    'featured' => $row['featured'],
    'is_premium' => $row['is_premium'],
    'picks' => $row['picks'],
    'buy' => $row['buy'],
    'property_img1' => $row['property_img1'] ? 'assets/images/property/'.$row['property_img1'] : '',
    'property_img2' => $row['property_img2'],
    'property_img3' => $row['property_img3'],
    'property_img4' => $row['property_img4'],
    'property_img5' => $row['property_img5'],
    'property_img6' => $row['property_img6'],
    'property_id' => $row['property_id'],
    'country' => $row['country'],
    'state_county' => $row['state_county'],
    'zip_postal_code' => $row['zip_postal_code'],
    'city' => $row['city'],
    'address' => $row['address'],
    'latitude' => (float)$row['latitude'],
    'longitude' => (float)$row['longitude'],
    'rooms' => $row['rooms'],
    'garage_size' => $row['garage_size'],
    'property_price' => $row['property_price'],
    'year_built' => $row['year_built'],
    'property_type' => $row['property_type'],
    'status' => $row['status'],
    'rating' => $row['rating'],
    'views' => $row['views'],
    'created_at' => $row['created_at'],
    'updated_at' => $row['updated_at'],
    'property_status' => $row['property_status'],
    'property_size' => $row['property_size'],
    'garage' => $row['garage'],
    'amenities_1' => $row['amenities_1'],
    'amenities_2' => $row['amenities_2'],
    'amenities_3' => $row['amenities_3'],
    'amenities_4' => $row['amenities_4'],
    'amenities_5' => $row['amenities_5'],
    'amenities_6' => $row['amenities_6'],
    'nearbyscl_1' => $row['nearbyscl_1'],
    'nearbyres_1' => $row['nearbyres_1'],
    'nearbyhos_1' => $row['nearbyhos_1'],
    'agent_id' => $row['agent_id'],
    'user_id' => $row['user_id'],
    'batch' => $row['batch'],
    'floor_plan_1_description' => $row['floor_plan_1_description'],
    'floor_plan_1_image' => $row['floor_plan_1_image'],
    'floor_plan_2_description' => $row['floor_plan_2_description'],
    'floor_plan_2_image' => $row['floor_plan_2_image'],
    'floor_plan_3_description' => $row['floor_plan_3_description'],
    'floor_plan_3_image' => $row['floor_plan_3_image'],
    'total_floors' => $row['total_floors'],
    'property_now_status' => $row['property_now_status'],
    'furnished' => $row['furnished'],
    'semi_furnished' => $row['semi_furnished'],
    'ac' => $row['ac'],
    'balcony' => $row['balcony'],
    'refrigerator' => $row['refrigerator']
];

}

echo json_encode($properties);
?>