<html>
<head>

<link rel = "stylesheet" type="text/css" href = "billing_style.css">
</head>
</html>

<?php
$username = $_POST['username'];
$net = $_POST['net'];
if($username != "guest")
{
mysql_connect("localhost","root","");
mysql_select_db("billing");

$result = mysql_query("select username,name,address from user where username = '$username' ")
 or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);

if($row['username'] == $username)
{

$name = $row['name'];
$address = $row['address'];

$login = 1;
echo "";
}

if($net == "0")
{
echo "Order can not be Placed";
}
else
{
echo "<br /><b>Order Placed";
echo "<br />";  
echo "Net Amount : $net";
echo "<br /Name : $name"; 
echo "<br />Cash on Delivary"; 
echo "<br />Delivery Address : $address</b>"; 
}
$result1 = mysql_query("UPDATE user
SET orders = 'Shoes of Rs. $net'
WHERE username = '$username'")
 or die("Failed to query database".mysql_error());

$result2 = mysql_query("select total from user where username = '$username'")
 or die("Failed to query database".mysql_error());

$row2 = mysql_fetch_array($result2);

$total = $row2['total'];
$total = $total + 1;

$result3 = mysql_query("UPDATE user
SET total = '$total'
WHERE username = '$username'")
 or die("Failed to query database".mysql_error());

}
else
{
$login = 0;
}
?>
<html>
<body>
<form>
<a href= "<?php if($login == 0) echo "signup.php"; else echo "login.php"; ?>">
<input type = "button" name = "signup" value = "<?php if($login == 0)
{
echo "Signup";
}
else 
{
echo "Exit";
}
?>" >
</a>
</form>
</html>