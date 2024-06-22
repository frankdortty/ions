<?php
include("conn.php");
session_start();

if (!isset($_SESSION['valid'])) {
    header("Location: login.php");
    exit();
}

$id = mysqli_real_escape_string($conn, $_SESSION['id']);

$sql = "SELECT * FROM emailList ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$messages = ""; 
    
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']);
    $delete_sql = "DELETE FROM email WHERE id = ?";
    $delete_stmt = $conn->prepare($delete_sql);
    $delete_stmt->bind_param("i", $delete_id);

    if ($delete_stmt->execute()) {
        $messages = "Message deleted successfully!";
        $result = mysqli_query($conn, $sql);
    } else {
        $messages = "Error: " . $delete_stmt->error;
    }

    $delete_stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Files</title>
    <link rel="stylesheet" href="style.css">
    <style>
       .sender {
           background-color: #D3D3D3;
           padding: 22px;
           margin: 10px 0;
           border-radius: 5px;
           cursor: pointer;
           display: flex;
           justify-content: space-between;
       }
       .sender div {
            font-size: 19px;
            text-transform: capitalize;
            font-weight: 700;
       }
       .mainm {
           font-size: 22px;
           text-transform: capitalize;
       }
       .mainm span {
           color: #000000;
           text-shadow: 0px 1px 1px transparent;
       }
       .messages {
           background-color: #ffffff;
           padding: 22px;
           display: none; /* Initially hide the messages */
           flex-direction: column;
           row-gap: 23px;
       }
       .dates {
            float: right;
       }
       .headerm {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
       .menas {
        background-color: #FAFAFA;
        padding: 12px;
       }
    </style>
</head>
<body>
    <div class="mainBody">
        <div class="left">
            <?php include_once('leftBar.php'); ?>
        </div>
        <div class="right">
            <div class="editDelete">
                <h2>Messages</h2>
                <?php if (!empty($messages)) echo "<p>$messages</p>"; ?>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='all'>";
                        echo "<div class='sender'> <div> <a href='mailto:" . htmlspecialchars($row["email"]) . "'>" . htmlspecialchars($row["email"]) . "</a></div> <div class='date'>" . htmlspecialchars($row["datesa"]) . "</div> </div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No Email found.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Close database connection
mysqli_close($conn);
?>
