<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 

include("admin/conn.php");
if (!$conn) {
    echo "connection failed";
    exit();
}


$messages = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $to = "info@ionstech.com.ng";

    $mail = new PHPMailer(true);
    try {
        // $mail->SMTPDebug = 2;  
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'okoriefranklyn16@gmail.com';
        $mail->Password   = 'rysyrbotathoykoc'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom($email);
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "<h2>Contact Form Submission</h2>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong><br>$message</p>";

        $mail->send();
        echo "<script>alert('Message sent successfully!');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Failed to send the message. Please try again later.');</script>";
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $Dto = "info@ionstech.com.ng";
    $uploadDates = date("Y-m-d H:i:s");

    // Correct SQL with placeholders
    $sql = "INSERT INTO messages (sender, email, message, sendto, datesa) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "Error: " . $conn->error;
        exit();
    }

    // Bind the parameters
    $stmt->bind_param("sssss", $name, $email, $message, $Dto, $uploadDates);

    if ($stmt->execute()) {
        // $messages = "Message saved successfully!";
    } else {
        $messages = "Error: " . $stmt->error;
    }

    $stmt->close();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ions-World</title>
    <link rel="stylesheet" href="constant/style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" href="media/logo1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="contact">
        <?php include_once("constant/header.php") ?>
    </header>
    <div class="firstsection chooselap">
        <div class="lapping">
            <h2>Why Wait? Get In Touch With Us</h2>
        </div>
    </div>
    <div class="dot">
        <div class="form">
            <div class="text">
                <h2>Get in touch with us & send us a message today!</h2>
                <div class="mail details">
                    <img src="media/email-2.png" alt="">
                    <a href="mailto: info@ionstech.com.ng" style="text-transform: lowercase;" >info@ionstech.com.ng</a>
                </div>
                <div class="location details">
                    <img src="media/location-pin-1.png" alt="no">
                    <!-- <a href="https://maps.app.goo.gl/dWhjWDnBLac88ynF9" target="_blank">
                        31 Olayiwola Owoiya Street, Oworonshoki, Lagos 
                    </a> -->
                </div>
                <div class="call details">
                    <i aria-hidden="true" class="fas fa-phone"></i>
                    <a href="tel:+2349078936832">(+234) 9078936832</a>
                </div>
            </div>
            <div class="formss">
                <form action="" method="POST">
                    <p> <?php echo $messages ?> </p>
                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <textarea name="message" id="message" cols="30" rows="10" minlength="20" placeholder="Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>  
    </div>
    <div class="chat">
        <?php include_once("constant/chat.php") ?>
    </div>
    <footer>
        <?php include_once("constant/footer.php") ?>
    </footer>
    <script src="script.js"></script>
    <script src="constant/script.js"></script>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>