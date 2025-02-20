<?php
include(__DIR__ . '/../../database/db.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function uploadFile($fileInputName) {
    if (!empty($_FILES[$fileInputName]['name'])) {
        $targetDir = "../../assets/images/users/";
        $fileName = time() . "_" . basename($_FILES[$fileInputName]['name']);
        $targetFilePath = $targetDir . $fileName;
        
        if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath)) {
            return $fileName; 
        }
    }
    return null;
}



// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
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
$status = $_POST['status'];




// Upload images
$user_img = uploadFile('user_img');

// Insert data into database
$sql = "INSERT INTO users 
        (name, email, phone, password, alternate_number, aadhaar, occupation, pan_number, 
         rera_registration_number, company_name, house, street, state, country, city, 
         pin_code, status, user_img, role) 
        VALUES 
        ('$name', '$email', '$phone', '$password', '$alternate_number', '$aadhaar', '$occupation', 
         '$pan_number', '$rera_registration_number', '$company_name', '$house', '$street', 
         '$state', '$country', '$city', '$pin_code', '$status', '$user_img','agent')";

// Debugging step: Check the query
// echo "SQL Query: " . $sql . "<br>"; 

if ($conn->query($sql)) {
    echo "User Added Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
