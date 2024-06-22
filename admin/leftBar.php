<?php
    if (!isset($_SESSION['valid'])) {
        header("Location: login.php");
        exit(); 
    }

    include("conn.php");

    $id = mysqli_real_escape_string($conn, $_SESSION['id']);
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
    $username = mysqli_real_escape_string($conn,  $_SESSION['valid']);
    
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $imagePath = "uploads/" . $row['image'];
    } else {
        $imagePath = "uploads/amara.png"; // Provide a default image path if no image is found
    }
?>

<div class="leftBar">
    <div class="logo">
       <button class="dropdown-button"><a href="edit.php"><?php echo( $username[2]);?></a></button>
    </div>
    <div class="list">
        <a href="register.php" id="addUser">Add User</a>
        <a href="edit.php">Edit profile</a>
        <a href="message.php">Messages</a>
        <a href="addfile.php">Email list</a>
        <!-- <a href="">Add To Gallery</a> -->
        <a href="send_emails.php">Edits File</a>
        <a href="logout.php">Log Out</a>    
    </div>
</div>
