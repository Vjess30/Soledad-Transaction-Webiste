<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title>Soledad</title>
	<link rel="stylesheet" href="Edit-C-Ann.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <nav>
        <ul> 
            <li><a href="C-Announcement.php">Back</a></li>
        </ul>
</nav>
<body>
        <table>
        <tr>
            <th>What</th>
            <th>When</th>
            <th>Where</th>
            <th>Who</th>
            <th>Delete</th>
</tr>

    <?php

    
    $conn=mysqli_connect("localhost","root","","web_soledad");
    if ($conn-> connect_error){
        die ("Connection failed".$conn-> connect_error);
    }

    $sql = "SELECT `id`, `What`, `When`, `Where`, `Who` FROM announcement";
    $result ="SELECT * FROM announcement";
    $result = $conn-> query($sql);
    
   
    
    if ($result-> num_rows >0){
            while ($row = $result-> fetch_assoc()){
                $ID =$row['id'];
                echo '<tr></td><td>'.$row["What"].'</td>
                <td>'.$row["When"].'</td><td>'.$row["Where"].'</td><td>'
                .$row["Who"].'</td>
                <td><button><a href="delete-C-app.php? deleteID='.$ID.'">Delete</a></button></td>
                </tr>';
            }
    }
    else{
        echo "0 result";
    }
    $conn->close();
?>
</body>
</html>