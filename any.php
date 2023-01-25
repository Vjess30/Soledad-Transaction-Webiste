<?php

    
    $conn=mysqli_connect("localhost","root","","web_soledad");
    if ($conn-> connect_error){
        die ("Connection failed".$conn-> connect_error);
    }

    $sql = "SELECT * FROM  announcement";
    $result = $conn-> query($sql);
    
    if ($result-> num_rows >0){
            while ($row = $result-> fetch_assoc()){
                echo "<big>ANNOUCEMENT</big>".$row ['What'].
                "<b>where:</b>".$row ['When'].
                "<b>Date:</b>".$row ['Where'].
                "<b>Time:</b>".$row ['Who']."";
            }
    }
    else{
        echo "0 result";
    }
    $conn->close();
?>