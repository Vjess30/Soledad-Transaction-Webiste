<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title>Soledad</title>
	<link rel="stylesheet" href="welcome-add.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="##">Appointment</a></li>
            <li><a href="#Certificate">Certificate</a></li>
            <li><a href="#Scholarships">Scholarships</a></li>
            <li><a href="admin.php">Log-out</a></li>
        </ul>
</nav>
<div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			    <div class="vertical_bar">
                    <div class="sides">
                        <div class="card">
                            <div class="display-picture">
                                <img src="pictures/Logo-S.png" alt="">
                            </div>
                            <div class="banner">
                        </div>
                        <div class="content">
                        <h1>Admin</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis neque dolorem labore velit commodi 
                        ipsam explicabo debitis corporis libero</p>
                    </div>
                    </div>
                </div><br/><br/>

            	<div class="info">
					<h1>Data Privacy Act 2012</h1>
                    <p>
                        Data Privacy Act 2012, comprehensive and strict privacy legislation “to protect the fundamental human right of privacy, 
                        of communication while ensuring free flow of information to promote innovation and growth.”
                    <p/>  
                </div>
			</div>
		</div> 
        
        <table>
        <tr>
            <th name="1">Fullname</th>
            <th>Zone_Street</th>
            <th>Name_Official</th>
            <th>Appointment_for</th>
            <th>Date_Appointment</th>
            <th>Time_Appointment</th>
        </tr>

<?php

    
    $conn=mysqli_connect("localhost","root","","web_soledad");
    if ($conn-> connect_error){
        die ("Connection failed".$conn-> connect_error);
    }

    $sql = "SELECT Fullname, Zone_Street,Name_Official,Appointment_for,Date_Appointment,Time_Appointment from appointment";
    $result = $conn-> query($sql);
    
    if ($result-> num_rows >0){
        while ($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["Fullname"]."</td><td>".$row["Zone_Street"]."</td><td>".$row["Name_Official"]."</td><td>"
            .$row["Appointment_for"]."</td><td>".$row["Date_Appointment"]."</td><td>".$row["Time_Appointment"]."</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo "0 result";
    }
    $conn->close();
?>
        
        
</table>
        

    
	
</body>
</html>