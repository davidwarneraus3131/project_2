<?php
$conn = mysqli_connect("localhost", "root", "", "project_2");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    // echo "Connected successfully";
}
?>
