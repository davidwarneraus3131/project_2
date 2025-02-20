<?php
 include(__DIR__ . '/../../database/db.php'); 

// Function to upload images
function uploadFile($fileInputName) {
    if (!empty($_FILES[$fileInputName]['name'])) {
        $targetDir = "../../assets/images/property/";
        $fileName = time() . "_" . basename($_FILES[$fileInputName]['name']);
        $targetFilePath = $targetDir . $fileName;
        
        if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath)) {
            return $fileName; 
        }
    }
    return null;
}

// Get form data
$property_name = $_POST['property_name'];
$price = $_POST['price'];
$location = $_POST['location'];
$description = $_POST['description'];
$beds = $_POST['beds'];
$baths = $_POST['baths'];
$square_feet = $_POST['square_feet'];
$country = $_POST['country'];
$state_county = $_POST['state_county'];
$city = $_POST['city'];
$address = $_POST['address'];
$zip_postal_code = $_POST['zip_postal_code'];
$rooms = $_POST['rooms'];
$garage_size = $_POST['garage_size'];
$year_built = $_POST['year_built'];
$property_type = $_POST['property_type'];
$status = $_POST['status'];

// Upload images
$property_img1 = uploadFile('property_img1');
$property_img2 = uploadFile('property_img2');
$property_img3 = uploadFile('property_img3');
$property_img4 = uploadFile('property_img4');
$property_img5 = uploadFile('property_img5');
$property_img6 = uploadFile('property_img6');

// Insert into database
$sql = "INSERT INTO properties (property_name, price, location, description, beds, baths, square_feet, country, state_county, city, address, zip_postal_code, rooms, garage_size, year_built, property_type, status, property_img1, property_img2, property_img3, property_img4, property_img5, property_img6) 
VALUES ('$property_name', '$price', '$location', '$description', '$beds', '$baths', '$square_feet', '$country', '$state_county', '$city', '$address', '$zip_postal_code', '$rooms', '$garage_size', '$year_built', '$property_type', '$status', '$property_img1', '$property_img2', '$property_img3', '$property_img4', '$property_img5', '$property_img6')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["status" => "success", "message" => "Property added successfully!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
}

$conn->close();
?>
