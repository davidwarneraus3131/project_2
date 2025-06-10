


<?php
session_start();
include("./database/db.php");
include("./includes/header.php");

// PHPMailer Setup
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prop_id = intval($_POST['property_id']);
$property_name = htmlspecialchars(trim($_POST['property_name']));
    $agent_id = intval($_POST['agent_id']);
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // 1. Insert Enquiry into DB
    $sql = "INSERT INTO enquiry (property_id, name, email, phone, message, agent_id) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issssi", $prop_id, $name, $email, $phone, $message, $agent_id);

    if ($stmt->execute()) {
        // 2. Fetch agent email from DB
        $agentQuery = "SELECT email, name FROM users WHERE id = ?";
        $agentStmt = $conn->prepare($agentQuery);
        $agentStmt->bind_param("i", $agent_id);
        $agentStmt->execute();
        $agentResult = $agentStmt->get_result();

        if ($agentResult->num_rows > 0) {
            $agent = $agentResult->fetch_assoc();
            $agent_email = $agent['email'];
            $agent_name = $agent['name'];

            // 3. Send Email using PHPMailer
            $subject = "New Property Enquiry from $name";
            $body = "
                <h3>You have a new enquiry</h3>
                <p><strong>Property ID:</strong> $prop_id</p>
                <p><strong>Property Name:</strong> $property_name</p>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Message:</strong><br>$message</p>
            ";

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'potterharry623017@gmail.com';
                $mail->Password = 'tdat jrtw ngkz rjvm'; // App password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                $mail->setFrom($email, $name); // From client
                $mail->addAddress($agent_email, $agent_name); // To agent

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $body;

                $mail->send();
                echo "<script>
                    alert('Enquiry submitted and email sent successfully!');
                    window.location.href = 'property-list.php';
                </script>";
            } catch (Exception $e) {
                echo "<script>alert('Enquiry saved but email failed: {$mail->ErrorInfo}');</script>";
            }

            $agentStmt->close();
        } else {
            echo "<script>alert('Agent not found.');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Failed to submit enquiry.');</script>";
    }

    $conn->close();
}
?>
