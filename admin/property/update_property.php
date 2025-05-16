<?php
 include(__DIR__ . '/../../database/db.php'); 

// Get form data
$id = $_POST['id'];
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
$rating = $_POST['rating'];
$amenities_1 = $_POST['amenities_1'];
$amenities_2 = $_POST['amenities_2'];
$amenities_3 = $_POST['amenities_3'];
$amenities_4 = $_POST['amenities_4'];
$amenities_5 = $_POST['amenities_5'];
$amenities_6 = $_POST['amenities_6'];
$floor_plan_1_description = $_POST['floor_plan_1_description'];
$floor_plan_2_description = $_POST['floor_plan_2_description'];
$floor_plan_3_description = $_POST['floor_plan_3_description'];

// add homepage filters
$featured = isset($_POST['featured']);
$premium = isset($_POST['premium']);
$picks = isset($_POST['picks']);



// Function to handle file uploads
function uploadFile($fileInputName) {
    if (!empty($_FILES[$fileInputName]['name'])) {
        $targetDir = "../../assets/images/property/"; 
        $fileName = time() . "_" . basename($_FILES[$fileInputName]['name']);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath);
        return $fileName;
    }
    return null;
}

// Upload files and update only if a new file is provided
$property_img1 = uploadFile('property_img1');
$property_img2 = uploadFile('property_img2');
$property_img3 = uploadFile('property_img3');
$property_img4 = uploadFile('property_img4');
$property_img5 = uploadFile('property_img5');
$property_img6 = uploadFile('property_img6');
$floor_plan_1_image = uploadFile('floor_plan_1_image');
$floor_plan_2_image = uploadFile('floor_plan_2_image');
$floor_plan_3_image = uploadFile('floor_plan_3_image');

// Update query
$sql = "UPDATE properties SET 
            property_name = '$property_name', 
            price = '$price', 
            location = '$location', 
            description = '$description', 
            beds = '$beds', 
            baths = '$baths', 
            square_feet = '$square_feet',
            featured = '$featured', 
            is_premium = '$premium',
            picks = '$picks',
            country = '$country', 
            state_county = '$state_county', 
            city = '$city', 
            address = '$address', 
            zip_postal_code = '$zip_postal_code', 
            rooms = '$rooms', 
            garage_size = '$garage_size', 
            year_built = '$year_built', 
            property_type = '$property_type', 
            status = '$status', 
            rating = '$rating', 
            amenities_1 = '$amenities_1', 
            amenities_2 = '$amenities_2', 
            amenities_3 = '$amenities_3', 
            amenities_4 = '$amenities_4', 
            amenities_5 = '$amenities_5', 
            amenities_6 = '$amenities_6', 
            floor_plan_1_description = '$floor_plan_1_description',
            floor_plan_2_description = '$floor_plan_2_description',
            floor_plan_3_description = '$floor_plan_3_description'
            ";

// Append file updates only if a new file is uploaded
if ($property_img1) $sql .= ", property_img1 = '$property_img1'";
if ($property_img2) $sql .= ", property_img2 = '$property_img2'";
if ($property_img3) $sql .= ", property_img3 = '$property_img3'";
if ($property_img4) $sql .= ", property_img4 = '$property_img4'";
if ($property_img5) $sql .= ", property_img5 = '$property_img5'";
if ($property_img6) $sql .= ", property_img6 = '$property_img6'";
if ($floor_plan_1_image) $sql .= ", floor_plan_1_image = '$floor_plan_1_image'";
if ($floor_plan_2_image) $sql .= ", floor_plan_2_image = '$floor_plan_2_image'";
if ($floor_plan_3_image) $sql .= ", floor_plan_3_image = '$floor_plan_3_image'";

$sql .= " WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Property updated successfully!";
} else {
    echo "Error updating property: " . $conn->error;
}

$conn->close();
?>
