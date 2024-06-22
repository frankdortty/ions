<?php
include('admin/conn.php');
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $uploadDates = date("Y-m-d H:i:s");

    // Parameterized query
    $sql = "INSERT INTO emailList (email, datesa) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        echo "Error: " . $conn->error;
        exit;
    }

    // Bind the parameter
    $stmt->bind_param("ss", $email, $uploadDates);

    if ($stmt->execute()) {
        $message = "";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<footer>
    <div class="footer">
       <div class="up">
            <div class="logo">
                <a href=""><img src="media\logo1 (2).png" alt=""></a>
            </div>
            <div class="nav">
                <h2>Links</h2>
                <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="#">Our services</a></li>
                    <li><a href="choose.php">Why Choose Us</a></li>
                    <li><a href="industries.php">Industries</a></li>
                    <li><a href="tools.php">Tool & Tips</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
              
            </div>
            <div class="conAdd">
                <h2>Get In Touch With Us</h2>
                <div class="text">
                <div class="mail details">
                    <img src="media/email-2.png" alt="">
                    <a href="mailto: info@ionstech.com.ng" style="text-transform: lowercase;" >info@ionstech.com.ng</a>
                </div>
                <div class="call details">
                    <i aria-hidden="true" class="fas fa-phone"></i>
                    <a href="tel:+2349078936832">+234 907 893 6832</a>
                </div>
            </div>
                <div class="follow">
                    <h2>Follow Us</h2>
                    <div class="soc"></div>
                </div>
            </div>
            <div class="cotact">
                <h2>Subscribe To Our News Letter</h2>
                <form action="" method="post">
                    <p><?php echo $message; ?></p>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
       </div>
       <div class="under">
            © 2024 by ITG. Powered and secured by <a href="https://franklyn-okorie.netlify.app/" target="_blank" >Okorie</a>
       </div>
    </div>
</footer>
