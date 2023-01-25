<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title>Soledad</title>
	<link rel="stylesheet" href="Announcement.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <nav>
        <ul> 
            <li><a href="welcome.php">Back</a></li>
        </ul>
</nav>
    
<div class="container">
        <h1>Announcement</h1>
</div>
        <table>
        <tr>
            <th>WHAT</th>
            <th>WHEN</th>
            <th>WHERE</th>
            <th>WHO</th>
        </tr>


    <?php

    
    $conn=mysqli_connect("localhost","root","","web_soledad");
    if ($conn-> connect_error){
        die ("Connection failed".$conn-> connect_error);
    }

    
    $sql = "SELECT * FROM  announcement";
    $result = $conn-> query($sql);
    
    if ($result-> num_rows >0){
        while ($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["What"]."</td><td>".$row["When"]."</td><td>".$row["Where"]."</td><td>".$row["Who"]."</td></tr>";
        }
}
else{
    echo "0 result";
}
$conn->close();
?>  
</div>




</body>
</html>