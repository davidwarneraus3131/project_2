<?php
include(__DIR__ . '/../../database/db.php');

//  print_r($_POST['status']);exit;

if (isset($_POST['user_id']) && isset($_POST['status'])) {
    $user_id = intval($_POST['user_id']);
    $new_status = ($_POST['status'] == 0) ? 1 : 0; 
  
    $sql = "UPDATE users SET is_verified = $new_status WHERE id = $user_id";

    
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'new_status' => $new_status]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
}
?>
