<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
	<title>Soledad</title>
	<link rel="stylesheet" href="C-Announcement.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
    function sayHello() 
    {alert("Created Successfully") } 
    </script>
    </head>
<body>
    <nav>
        <ul> 
            <li><a href="Edit-C-Ann.php">Edit</a></li>
            <li><a href="welcome-add.php">Back</a></li>
        </ul>
</nav>

<body>
<div class="furms">
			<div class="container">
				  <form action="C-Ann.php" method="post" class="Appointment">
				  	<div class="input-box">
            			<span class="details">WHAT</span>
            			<input type="text" name="what" placeholder="Please Enter" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">WHEN</span>
            			<input type="text" name="when" placeholder="Please Enter" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">WHERE</span>
            			<input type="text" name="where" placeholder="Please Enter" required>
					</div><BR/>
					<div class="input-box">
            			<span class="details">WHO</span>
            			<input type="text" name="who" placeholder="Please Enter" required>
					</div><BR/>
                    <div class="button">
          			<input type="submit" onclick="sayHello()" value="Submit">
        			</div>
				  </form>
                </div>
</div>
</body>
</html>