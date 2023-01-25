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
            <li><a href="user-list.php">Users-Information</a></li>
            <li><a href="C-Announcement.php">Announcement</a></li>
            <li><a href="index.php">Log-out</a></li>
        </ul>
</nav>
<div class="wrapper">
		<div class="wrapper_inner">
			<div class="vertical_wrap">
			    <div class="vertical_bar">
                    <div class="sides">
                        <div class="card">
                            <div class="display-picture">
                                <img src="pictures/obet.jpg" alt="">
                            </div>
                            <div class="banner">
                        </div>
                        <div class="content">
                        <h1>Admin</h1>
                        <p>Robert Penino</p>
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

 <div class="add-table">
        <div class="content">
            <div class="cards">
                <div class="card1">
                    <div class="box">
                    <?php
                        require'db_conn.php';

                        $query = "SELECT id FROM appointment ORDER by id";
                        $query_run =mysqli_query($conn, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h1>' .$row.'</h1>';
                        ?>
                        <h3>Appointment</h3>
                    </div>
                    <div class="icon-case">
                        <img src="Icon/appoitnment.png" alt="logo">
                    </div>
                </div>
                <div class="card1">
                    <div class="box">
                    <?php
                        require'db_conn.php';

                        $query = "SELECT id FROM registration ORDER by id";
                        $query_run =mysqli_query($conn, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h1>' .$row.'</h1>';
                        ?>

                        <h3>Users</h3>
                    </div>
                    <div class="icon-case">
                        <img src="Icon/user.png" alt="logo">
                    </div>
                </div>
                <div class="card1">
                    <div class="box">
                    <?php
                        require'db_conn.php';

                        $query = "SELECT id FROM soledad ORDER by id";
                        $query_run =mysqli_query($conn, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h1>' .$row.'</h1>';
                        ?>
                       <h3>Admin</h3>
                    </div>
                    <div class="icon-case">
                        <img src="Icon/admin.png" alt="logo" height="90px">
                    </div>
                </div>
                
            </div>


        <table>
        <tr>
            <th>Fullname</th>
            <th>Zone_Street</th>
            <th>Name_Official</th>
            <th>Appointment_for</th>
            <th>Date_Appointment</th>
            <th>Time_Appointment</th> 
            <th>Delete</th> 
</tr>

    <?php

    
    $conn=mysqli_connect("localhost","root","","web_soledad");
    if ($conn-> connect_error){
        die ("Connection failed".$conn-> connect_error);
    }

    $sql = "SELECT id,Fullname, Zone_Street,Name_Official,Appointment_for,Date_Appointment,Time_Appointment from appointment";
    $result ="SELECT * FROM appointment";
    $result = $conn-> query($sql);
    
    $sql = "SELECT id,Fullname, Zone_Street,Name_Official,Appointment_for,Date_Appointment,Time_Appointment from appointment";
    $result = $conn-> query($sql);
    
    if ($result-> num_rows >0){
            while ($row = $result-> fetch_assoc()){
                $ID =$row['id'];
                echo '<tr></td><td>'.$row["Fullname"].'</td>
                <td>'.$row["Zone_Street"].'</td><td>'.$row["Name_Official"].'</td><td>'
                .$row["Appointment_for"].'</td><td>'.$row["Date_Appointment"].'</td>
                <td>'.$row["Time_Appointment"].'</td>
                <td><button><a href="delete.php? deleteID='.$ID.'">Delete</a></button></td>
                </tr>';
            }
    }
    else{
        echo "0 result";
    }
    $conn->close();
?>
        
</table> 

 

</div> 
</div>
</body>
</html>