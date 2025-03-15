
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
            $mail->addAddress('potterharry623017@gmail.com', 'Harry Potter'); 
        
            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = "
            
            <html>
        <head>
            <style>
                .email-container {
                    font-family: Arial, sans-serif;
                    background: #f9f9f9;
                    padding: 20px;
                    text-align: center;
                }
                .email-header {
                    background: #004080;
                    color: #ffffff;
                    padding: 20px;
                    font-size: 24px;
                    font-weight: bold;
                }
                .email-body {
                    background: #ffffff;
                    padding: 20px;
                    border-radius: 10px;
                    box-shadow: 0px 0px 10px #ddd;
                    text-align: left;
                }
                .email-footer {
                    text-align: center;
                    padding: 15px;
                    font-size: 14px;
                    color: #666;
                }
                .footer-icons img {
                    width: 24px;
                    margin: 0 5px;
                }
            </style>
        </head>
        <body>
            <div class='email-container'>
                <div class='email-header'>Shahith Real Estate</div>
                <div class='email-body'>
                    <p><strong>Name:</strong> $username</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Phone:</strong> $phone</p>
                    <p><strong>Subject:</strong> $subject</p>
                    <p><strong>Message:</strong><br>$message</p>
                    <img src='https://www.realestatelogo.com/example.jpg' alt='Real Estate' width='100%'>
                </div>
                <div class='email-footer'>
                    <p>Thank you for reaching out to Shahith Real Estate. Our team will contact you soon.</p>
                    <div class='footer-icons'>
                        <a href='https://facebook.com'><img src='https://img.icons8.com/color/48/000000/facebook-new.png'/></a>
                        <a href='https://instagram.com'><img src='https://img.icons8.com/color/48/000000/instagram-new.png'/></a>
                        <a href='https://linkedin.com'><img src='https://img.icons8.com/color/48/000000/linkedin.png'/></a>
                    </div>
                </div>
            </div>
        </body>
        </html>
            ";
        
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
