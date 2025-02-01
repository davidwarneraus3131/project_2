<?php

// Define some constants for recipient details
define("RECIPIENT_NAME", "John Doe");
define("RECIPIENT_EMAIL", "youremail@mail.com");

// Include PHPMailer classes for sending emails (ensure PHPMailer is installed in your project)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

// Initialize success and error messages
$success = false;
$error_message = "";

// Sanitize input values (same as you did before)
$userName = isset($_POST['username']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['username']) : "";
$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$userPhone = isset($_POST['phone']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
$userSubject = isset($_POST['subject']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

// If all values exist, send the email
if ($userName && $senderEmail && $userPhone && $userSubject && $message) {
    try {
        // Initialize PHPMailer
        $mail = new PHPMailer();
        
        // Set mailer to use SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;
        $mail->Username = 'potterharry623017@gmail.com'; 
        $mail->Password = 'tdat jrtw ngkz rjvm'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Set the recipient details
        $mail->setFrom($senderEmail, $userName);
        $mail->addAddress(RECIPIENT_EMAIL, RECIPIENT_NAME);

        // Set email subject and body
        $mail->Subject = "Contact Form Submission: " . $userSubject;
        $mail->isHTML(true);
        $mail->Body = "<html><body>";
        $mail->Body .= "<h3>New Message from Contact Form</h3>";
        $mail->Body .= "<p><strong>Name:</strong> $userName</p>";
        $mail->Body .= "<p><strong>Email:</strong> $senderEmail</p>";
        $mail->Body .= "<p><strong>Phone:</strong> $userPhone</p>";
        $mail->Body .= "<p><strong>Subject:</strong> $userSubject</p>";
        $mail->Body .= "<p><strong>Message:</strong><br>$message</p>";
        $mail->Body .= "</body></html>";

        // Send email and check if successful
        if ($mail->send()) {
            $success = true;
            // Redirect after successful submission
            header('Location: contact.php?message=Success');
            exit();
        } else {
            throw new Exception("Failed to send email.");
        }
    } catch (Exception $e) {
        $error_message = "Mailer Error: " . $mail->ErrorInfo;
        header('Location: contact.php?message=Failed');
        exit();
    }
} else {
    // Redirect if form values are missing
    header('Location: contact.php?message=Failed');
    exit();
}

?>
