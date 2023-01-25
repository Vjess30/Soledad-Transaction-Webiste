<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Soledad</title>
	<link rel="stylesheet" href="admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="add">
    <Div class="logo">
      <img src="pictures/Logo-S.png">
      <h1>ADMIN</h1>
    </Div>

    <div class="form-inner">
          <form action="log-admin.php" method="post" class="login">
            <div class="field">
              <input type="text" name="Uname"placeholder="Username" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div> 
          </form>
    </div>
</div>
</body>
</html>