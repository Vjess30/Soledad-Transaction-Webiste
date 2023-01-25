<?php

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_soledad";

    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    
    $Fullname = $_POST['Full'];
    $Zne_S = $_POST['ZS'];
    $Brgy_Off = $_POST['B-Off'];
    $App_for = $_POST['Afor'];
    $D = $_POST['Date'];
    $T = $_POST['Time'];
    
    $sql = "INSERT INTO `appointment`(`Fullname`, `Zone_Street`, `Name_Official`, `Appointment_for`, `Date_Appointment`, `Time_Appointment`)
     VALUES ('$Fullname','$Zne_S ','$Brgy_Off',' $App_for','$D','$T ')";
    mysqli_query( $conn, $sql);

    header("Location: Welcome.php?success=Your account has been created successfully");
  
    ?> 