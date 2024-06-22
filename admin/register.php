<?php
include("conn.php");

// Start session
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

if (!$conn) {
    echo("Connection failed ! ");
}

$message = ''; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Handle image upload
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["uploader_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["uploader_image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $message = "Error: File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["uploader_image"]["size"] > 500000) {
        $message = "Error: Image file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $message = "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $message = "Error: Your image was not uploaded.";
    } else {
        // if everything is ok, try to upload file
        if (move_uploaded_file($_FILES["uploader_image"]["tmp_name"], $targetFile)) {
            $message = "The file ". htmlspecialchars( basename( $_FILES["uploader_image"]["name"])). " has been uploaded.";
        } else {
            $message = "Error: There was an error uploading your image.";
        }
    }

    // Encrypt password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into database
    $sql = "INSERT INTO users (username, password, email, image) VALUES ('$username', '$password    ', '$email', '$targetFile')";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo "Error: " . $conn->error;
        exit;
    }
    if ($stmt->execute()) {
        $message = "Registration successful!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .message {
            color: green;
            text-align: center;
            font-size: 18px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="mainBody">
       <div class="left">
            <?php
                include_once('leftBar.php');
            ?>
       </div>
       <div class="right">
            <div class="register">
                <h2>Register</h2>
                <?php if (!empty($message)): ?>
                    <div class="message"><?php echo $message; ?></div>
                <?php endif; ?>
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <input type="text" id="username" name="username" required placeholder="Username" autocomplete="false">
                    
                    <input type="password" id="password" name="password" required placeholder="Password">
                    
                    <input type="email" id="email" name="email" required placeholder="Email" autocomplete="false">
                    
                    <input type="file" name="uploader_image" id="uploader_image" required accept="image/*">
                    
                    <button type="submit"> Register </button>
                </form> 
            </div>
       </div>
   </div>
</body>
</html>
