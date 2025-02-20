<?php
include(__DIR__ . '/../../database/db.php'); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alternate_number = $_POST['alternate_number'];
$aadhaar = $_POST['aadhaar'];
$occupation = $_POST['occupation'];
$pan_number = $_POST['pan_number'];
$rera_registration_number = $_POST['rera_registration_number'];
$company_name = $_POST['company_name'];
$house = $_POST['house'];
$street = $_POST['street'];
$state = $_POST['state'];
$country = $_POST['country'];
$city = $_POST['city'];
$pin_code = $_POST['pin_code'];


// Handle file upload securely (optional, if you're allowing file uploads)
function uploadFile($fileInputName) {
    if (!empty($_FILES[$fileInputName]['name'])) {
        $targetDir = "../../assets/images/users/"; 
        $fileName = time() . "_" . basename($_FILES[$fileInputName]['name']);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath);
        return $fileName;
    }
    return null;
}

// Upload new images if provided
$user_img = uploadFile('user_img');

// Update user data (Avoiding PDO, use MySQLi here)
$sql = "UPDATE users SET 
        name='$name', email='$email', phone='$phone', alternate_number='$alternate_number', aadhaar='$aadhaar', 
        occupation='$occupation', pan_number='$pan_number', rera_registration_number='$rera_registration_number', 
        company_name='$company_name', house='$house', street='$street', state='$state', 
        country='$country', city='$city', pin_code='$pin_code', user_img='$user_img' 
        WHERE id=$id";

if ($conn->query($sql)) {
    echo "Agent Updated Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
