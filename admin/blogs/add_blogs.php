<?php
include(__DIR__ . '/../../database/db.php');

// Function to upload images
function uploadFile($fileInputName) {
    if (!empty($_FILES[$fileInputName]['name'])) {
        $targetDir = "../../assets/images/blogs/";
        $fileName = time() . "_" . basename($_FILES[$fileInputName]['name']);
        $targetFilePath = $targetDir . $fileName;
        
        if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath)) {
            return $fileName; 
        }
    }
    return null;
}

// Get form data
$title = $_POST['title'];
$category = $_POST['category'];
$author = $_POST['author'];
$publish_date = $_POST['publish_date'];
$short_description = $_POST['short_description'];
$blog_link = $_POST['blog_link'];
$featured = isset($_POST['featured']) ? 1 : 0;
$tags = $_POST['tags'];
$updated_at = date('Y-m-d H:i:s');

// Upload images
$image = uploadFile('image');
$author_image = uploadFile('author_image');

// Insert into database
$sql = "INSERT INTO blogs (title, category, image, author, author_image, publish_date, short_description, blog_link, featured, tags, updated_at) 
VALUES ('$title', '$category', '$image', '$author', '$author_image', '$publish_date', '$short_description', '$blog_link', '$featured', '$tags', '$updated_at')";

// if ($conn->query($sql) === TRUE) {
//     echo json_encode(["status" => "success", "message" => "Blog added successfully!"]);
// } else {
//     echo json_encode(["status" => "error", "message" => "Error: " . $conn->error]);
// }

if ($conn->query($sql)) {
    echo "Blog added Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
