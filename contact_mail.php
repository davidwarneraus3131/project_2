
<?php
session_start();
include("./database/db.php"); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

if (isset($_POST['submit-form'])) {
    // Collect form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

      // Insert data into the database
      $sql = "INSERT INTO contact_messages (name, email, phone, subject, message) 
      VALUES ('$username', '$email', '$phone', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['status'] = 'success';
            $_SESSION['message'] = 'Your message has been sent successfully!';
        } else {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Failed to send your message. Error: ' . $conn->error;
        }

     // Create an instance of PHPMailer
     $mail = new PHPMailer(true);

         try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'potterharry623017@gmail.com';  
            $mail->Password = 'tdat jrtw ngkz rjvm'; 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
        
            // Recipients
            $mail->setFrom('potterharry623017@gmail.com', 'Shahith Real Estate');
            $mail->addAddress('potterharry623016@gmail.com', 'Harry Potter'); 
        
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "Name: $username<br>Email: $email<br>Phone: $phone<br>Message: $message";
        
            // Send the email
            if ($mail->send()) {
                $_SESSION['status'] = 'success';
                $_SESSION['message'] = 'Your message has been sent successfully!';
            } else {
                $_SESSION['status'] = 'error';
                $_SESSION['message'] = 'Failed to send your message. Mailer Error: ' . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            $_SESSION['status'] = 'error';
            $_SESSION['message'] = 'Mailer Error: ' . $mail->ErrorInfo;
        }
        




    // Redirect back to the contact page
    header('Location: contact.php');
    exit();
}
?>
