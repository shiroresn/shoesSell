<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel = "stylesheet" type="text/css" href = "style.css">
</head>
<body>
<div id = "frm">
<h3>
<form action = "process.php" method = "POST">
<p>
<label>Username : </label>
<input type = "text" id = "user" name = "user" required>
</p>
<p>
<label>Password : </label>
<input type = "password" id = "pass" name = "pass" required>
</p>
<p>
<input type = "submit" id = "btn" value = "Login"> 
<a href = "signup.php"><input type = "button" id = "btn" value = "Signup"></a><br>
<a href = "guest.php"><input type = "button" id = "btn" value = "Guest"></a>

</p>
<p>
</h3>
</p>
</form>
<div>
<body>
</html>