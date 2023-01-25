<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title>Soledad</title>
	<link rel="stylesheet" href="website.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
    function say() 
    {alert("Appointment Sent") } 
    </script>
    </head>
<body>
    <nav>
        <ul>
            <li><a href="#Certificate">Certificate</a></li>
            <li><a href="#Scholarships">Scholarships</a></li>
            <li><a href="announcement.php">Announcement</a></li>
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
                            <img src="pictures/kap.jpg" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>Kapitan</h1>
                            <p>Rocky Lupo</p>
                            <p></p>
                        </div>
                    </div><br/>
                
                    <div class="card">
                        <div class="display-picture">
                            <img src="pictures/Kgwd.Zyron.jpg" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>kagawad</h1>
                            <p>Zyron Israel</p>
                            <p> </p>
                        </div>
                    </div><br/>

					<div class="card">
                        <div class="display-picture">
                            <img src="pictures/Kgwd.Ceasar.jpg" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>kagawad</h1>
                            <p>Ceasar Plaza</p>
                            <p></p>
                        </div>
                    </div><br/>
					
					<div class="card">
                        <div class="display-picture">
                            <img src="pictures/Kgwd.pacammara.jpg" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>kagawad</h1>
                            <p>Cris Pacammara</p>
                            <p> </p>
                        </div>
                    </div><br/>

                    <div class="card">
                        <div class="display-picture">
                            <img src="pictures/Logo-S.png" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>kagawad</h1>
                            <p>Arnold Valencia</p>
                            <p> </p>
                        </div>
                    </div><br/>
                
                    <div class="card">
                        <div class="display-picture">
                            <img src="pictures/Kgwd.pacammara.jpg" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>kagawad</h1>
                            <p>Candia</p>
                            <p> </p>
                        </div>
                    </div><br/>

                    <div class="card">
                        <div class="display-picture">
                            <img src="pictures/Logo-S.png" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>kagawad</h1>
                            <p>Puri</p>
                            <p></p>
                        </div>
                    </div><br/>
                    <div class="card">
                        <div class="display-picture">
                            <img src="pictures/Sk.jpg" alt="">
                        </div>
                        <div class="banner">
                        </div>
                
                        <div class="content">
                            <h1>Sk Chairman</h1>
                            <p>Michael James Clavano</p>
                            <p></p>
                        </div>
                    </div>
                </div>
			</div>
		</div>

        <div class="main_container" Id="Appointment">
            
            <div class="furms">
			<div class="container">
				  <form action="appointment.php" method="post" class="Appointment">
				  	<div class="input-box">
            			<span class="details">Full Name</span>
            			<input type="text" name="Full" placeholder="Please Enter your Full Name" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">Zone & Street</span>
            			<input type="text" name="ZS" placeholder="Please Enter your Zone & Street" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">Name of Brgy.Official</span>
            			<input type="text" name="B-Off" placeholder="Please Enter the name" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">Appointment for</span>
            			<input type="text" name="Afor" placeholder="Please Enter" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">Date of Appointment</span>
            			<input type="Date" name="Date" placeholder="Please Enter Date" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">Time of Appointment</span>
            			<input type="Time" name="Time"placeholder="Please Enter Date" required>
					</div>
                    <div class="button">
          			<input type="submit" onclick="say()" value="Submit">
        			</div>
				  </form>
                </div>
			</div>
            
            <div class="Certificate" id="Certificate"></br>
                <h1>Certificates</h1>
                <div class="container1">
                  <div class="box">
                    <h1>Clearance</h1><img src="pictures/CLEARANCE.jpg" width="250" height="230">
                  </div>
                  <div class="box">
                  <h1>Indigency</h1><img src="pictures/indigency.jpg" width="250" height="230">
                  </div>
                  <div class="box">
                  <h1>Business</h1><img src="pictures/b.jpg" width="250" height="230">
                  </div>
    
                </div>

                <!-- sa  scholarship na part-->
                <h1>Scholarships</h1>
                <div class="scholarship" id="Scholarships">
                <img src="pictures/soledad-scholarship banner.png" width="70%">
                </div>
                
          
              </div>
		    </div>
            <div class="Announcement">
            </div>
	</div>

	
</body>
</html>