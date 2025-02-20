<?php
include(__DIR__ . '/../../database/db.php'); 

// Get form data
$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$author = $_POST['author'];
$publish_date = $_POST['publish_date'];
$short_description = $_POST['short_description'];
$blog_link = $_POST['blog_link'];
$featured = $_POST['featured'];
$tags = $_POST['tags'];

// Function to handle file uploads
function uploadFile($fileInputName) {
    if (!empty($_FILES[$fileInputName]['name'])) {
        $targetDir = "../../assets/images/blogs/"; 
        $fileName = time() . "_" . basename($_FILES[$fileInputName]['name']);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $targetFilePath);
        return $fileName;
    }
    return null;
}

// Upload new images if provided
$image = uploadFile('image');
$author_image = uploadFile('author_image');

// Update query
$sql = "UPDATE blogs SET 
            title = '$title', 
            category = '$category', 
            author = '$author', 
            publish_date = '$publish_date', 
            short_description = '$short_description', 
            blog_link = '$blog_link', 
            featured = '$featured', 
            tags = '$tags'";

// Append image updates only if new files are uploaded
if ($image) $sql .= ", image = '$image'";
if ($author_image) $sql .= ", author_image = '$author_image'";

$sql .= " WHERE id = '$id'";

// if ($conn->query($sql) === TRUE) {
//     echo json_encode(["status" => "success", "message" => "Blog updated successfully!"]);
// } else {
//     echo json_encode(["status" => "error", "message" => "Error updating blog: " . $conn->error]);
// }
if ($conn->query($sql)) {
    echo "Blog updated Successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
