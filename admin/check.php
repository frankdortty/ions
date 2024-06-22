<?php
include("conn.php");
session_start();

if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

$messages = ""; 
    
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_email'])) {
    // Redirect to the email sending script
    header("Location: process_send_emails.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Emails</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mainBody">
        <div class="left">
            <?php include_once('leftBar.php'); ?>
        </div>
        <div class="right">
            <div class="editDelete">
                <h2>Send Emails to All Subscribers</h2>
                <?php if (!empty($messages)) echo "<p>$messages</p>"; ?>
                <form method="post">
                    <button type="submit" name="send_email">Send Email to All</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

