<?php
    
    $Sname = 'localhost';
    $UserName = 'root';
    $Password = "";

    $db_name = "ions";
    $conn = mysqli_connect( $Sname,$UserName, $Password, $db_name );

    if(!$conn){
        echo "Connection Failed";
    }
