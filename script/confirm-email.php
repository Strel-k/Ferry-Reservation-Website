<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email address from POST data
    $email = $_POST['email'] ?? '';

    // Ensure email address is not empty
    if (empty($email)) {
        http_response_code(400); // Bad request
        echo 'Email address is empty.';
        exit;
    }

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'localhost'; // SMTP server
        $mail->Port       = 25; // Port for localhost SMTP server

        // Sender and recipient settings
        $mail->setFrom('Binangkas@Support.com');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'Booking Confirmation';
        $mail->Body    = "Dear Customer,\n\nYour booking has been confirmed. Thank you for choosing our service.";

        // Send email
        $mail->send();
        echo 'Email confirmation sent successfully';
    } catch (Exception $e) {
        http_response_code(500); // Internal server error
        echo 'Failed to send email confirmation. Error: ' . $mail->ErrorInfo;
    }
} else {
    http_response_code(405); // Method not allowed
    echo 'Method not allowed';
}
?>
