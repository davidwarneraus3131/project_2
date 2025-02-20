<?php
include(__DIR__ . '/../../database/db.php');

if (isset($_POST['property_id']) && isset($_POST['status'])) {
    $property_id = intval($_POST['property_id']);
    $new_status = ($_POST['status'] == 0) ? 1 : 0; // Toggle status

    $sql = "UPDATE properties SET property_status = $new_status WHERE id = $property_id";
    
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'new_status' => $new_status]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
}
?>
