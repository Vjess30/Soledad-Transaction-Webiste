<?php

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_soledad";

    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    
    $WHAT = $_POST['what'];
    $WHEN = $_POST['when'];
    $WHERE = $_POST['where'];
    $WHO = $_POST['who'];
    
    $sql = "INSERT INTO `announcement`(`What`, `When`, `Where`, `Who`) 
    VALUES ('$WHAT','$WHEN','$WHERE','$WHO')";
    mysqli_query( $conn, $sql);

    header("Location: C-Announcement.php?success=Your account has been created successfully");
  
    ?> 
