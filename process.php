<?php
$username = $_POST['user'];
$password = $_POST['pass'];
$name = "name";


mysql_connect("localhost","root","");
mysql_select_db("billing");

$result = mysql_query("select username,password,name from user where username = '$username' and password = '$password'")
 or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);


if($row['username'] == $username && $row['password'] == $password)
{

$name = $row['name'];
$login = 1;
echo "";
}
else
{
$login = 0;
}

?>
<html>
<head>
<title>Fashion.com</title>
<link rel = "stylesheet" type="text/css" href = "style_process.css">
</head>
<body>
<p align = "right"><b><?php if($login == 1) echo "Login Sucessfull!!! <br /> Hi $name!"?></b></p>
<p align = "right"><b><?php if($login == 0) echo "Login Failed!!! <br /> Hi Guest"?></b></p>
<p align = "right">
<form action = "<?php if($login == 1) echo "my.php"; else echo "login.php";?>" method = "post">
<input type="hidden" name="username" value="<?php echo "$username" ?>">
</p>
<p align = "right"><input type = "submit" id = "btn" value = "<?php if($login == 1) echo "View Your Details"; else echo "Go Back";?>" name = "my"></a></p>
</form>

<form action = "Billing.php" method = "post">
<input type="hidden" name="username" value="<?php echo "$username" ?>">
<p><h1>Woodland Shoes</h1></p>
<p><img src="Woodland.jpeg" alt="Woodland Shoes" height = "300" width = "400"></p>
<p><h2><strike>Rs.5000</strike> <br />Rs.2500</h2><br><h4>Add to Cart <input type = "checkbox" name = "checklist[]" value = "Woodland Shoes">
Quantity :
<select name="qty1">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select></p></h4>
<p> <input type = "submit" value = "Cart" > </p>
<p><h1>Nike Shoes </h1></p>
<p><img src="Nike.jpg" alt="Nike Shoes" height = "300" width = "400"></p>
<p><h2><strike>Rs.5200</strike> <br />Rs.2600</h2> <br><h4>Add to Cart <input type = "checkbox" name = "checklist[]" value = "Nike Shoes">
Quantity :
<select name="qty2">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select></p>
<p> <input type = "submit" value = "Cart" > </p>
<p><h1>Adidas Shoes</h1> </p>
<p><img src="Adidas.jpg" alt="Adidas Shoes" height = "300" width = "400"></p>
<p><h2><strike>Rs.4000</strike> <br />Rs.2000</h2><br><h4>Add to Cart <input type = "checkbox" name = "checklist[]" value = "Adidas Shoes">Quantity :
<select name="qty3">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select></p></h4>
<p> <input type = "submit" value = "Cart" > </p>
<p><h1>Bata Shoes</h1> </p>
<p><img src="Bata.jpg" alt="Bata Shoes" height = "300" width = "400"></p>
<p><h2><strike>Rs.6000</strike> <br />Rs.3000</h2><br><h4>Add to Cart <input type = "checkbox" name = "checklist[]" value = "Bata Shoes">Quantity :
<select name="qty4">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select></p></h4>
<p> <input type = "submit" value = "Cart" > </p>
<p><h1>Fancy Shoes </h1></p>
<p><img src="Fancy.jpg" alt="Fancy Shoes" height = "300" width = "400"></p>
<p><h2><strike>Rs.3000</strike> <br />Rs.1500</h2><br><h4>Add to Cart <input type = "checkbox" name = "checklist[]" value = "Fancy Shoes">Quantity :
<select name="qty5">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select></p></h4>
<p> <input type = "submit" value = "Cart" > </p>
<p><h1>Chinies Local Shoes </h1></p>
<p><img src="Chinies.jpg" alt="Local Shoes" height = "300" width = "400"></p>
<p><h2><strike>Rs.2000</strike> <br />Rs.1000</h2><br><h4>Add to Cart <input type = "checkbox" name = "checklist[]" value = "Chinies Shoes">Quantity :
<select name="qty6">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select></p></h4>
<p> <input type = "submit" value = "Cart" > </p>
<p> <input type = "submit" value = "Proced to Bill" > <input type = "Reset" value = "Reset" >
</form>


</body>
</html>
