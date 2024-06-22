<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php'; 
require '../PHPMailer/src/PHPMailer.php'; 
require '../PHPMailer/src/SMTP.php'; 

include("conn.php");
session_start();

if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

// Fetch email subject and body from session
$email_subject = isset($_SESSION['email_subject']) ? $_SESSION['email_subject'] : '';
$email_body = isset($_SESSION['email_body']) ? $_SESSION['email_body'] : '';

$sql = "SELECT email FROM emailList ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$messages = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // For Gmail
        $mail->SMTPAuth = true;
        $mail->Username   = 'okoriefranklyn16@gmail.com';
        $mail->Password   = 'rysyrbotathoykoc'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender info
        $mail->setFrom('info@ionstech.com.ng', 'Franklyn');

        // Email subject and body
        $mail->Subject = $email_subject;
        $mail->Body    = $email_body;

        // Add recipients from the database
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $mail->addAddress($row['email']);
            }
        } else {
            $messages = "No Email found.";
        }

        // Send email
        if ($mail->send()) {
            $messages = "Emails sent successfully!";
        } else {
            $messages = "Failed to send emails.";
        }
    } catch (Exception $e) {
        $messages = "Mailer Error: " . $mail->ErrorInfo;
    }

    // Clear session variables
    unset($_SESSION['email_subject']);
    unset($_SESSION['email_body']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sending Status</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mainBody">
        <div class="left">
            <?php include_once('leftBar.php'); ?>
        </div>
        <div class="right">
            <div class="editDelete">
                <h2>Email Sending Status</h2>
                <?php if (!empty($messages)) echo "<p>$messages</p>"; ?>
                <a href="send_emails.php">Go back</a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Close database connection
mysqli_close($conn);
?>
