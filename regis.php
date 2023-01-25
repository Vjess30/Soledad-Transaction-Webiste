<?php

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_soledad";

    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    
    $Fullname = $_POST['Fname'];
    $Username = $_POST['Uname'];
    $Password = $_POST['Pass'];
    
    $sql = "INSERT INTO `registration`(`Fullname`, `Username`, `Password`)
     VALUES ('$Fullname','$Username','$Password')";
    mysqli_query( $conn, $sql);

    header("Location: index.php?success=Your account has been created successfully");
  
    ?> 
