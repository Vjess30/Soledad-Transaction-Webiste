<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title>Soledad</title>
	<link rel="stylesheet" href="user-list.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <nav>
        <ul> 
            <li><a href="welcome-add.php">Back</a></li>
        </ul>
</nav>
<div class="add-table">
<table>
        <tr>
            <th>Id</th>
            <th>Fullname</th>
            <th>Username</th>
            <th>Password</th>
        </tr>


<?php

    
    $conn=mysqli_connect("localhost","root","","web_soledad");
    if ($conn-> connect_error){
        die ("Connection failed".$conn-> connect_error);
    }

    $sql = "SELECT id, Fullname, Username, Password FROM registration ";
    $result = $conn-> query($sql);
    
    if ($result-> num_rows >0){
        while ($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["Username"]."</td><td>".$row["Password"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }
    $conn->close();
?>
        
        
</table> 