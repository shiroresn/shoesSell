<?php
$username = $_POST['username'];

mysql_connect("localhost","root","");
mysql_select_db("billing");

$result = mysql_query("select username,name,address,total,orders from user where username = '$username' ")
 or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);

$name = $row['name'];
$address = $row['address'];
$username = $row['username'];
$total = $row['total'];
$orders = $row['orders'];

?>

<html>
<head>
<link rel = "stylesheet" type="text/css" href = "style_process.css">
</head>
<body>
<p><h2>Your Details : </h2></p>
<p><h3>Name : </h3><?php echo $name ?> </p>
<p><h3>Address : </h3><?php echo $address ?> </p>
<p><h3>Username : </h3><?php echo $username ?> </p>
<p><h3>Total Orders : </h3><?php echo $total ?> </p>
<p><h3>Your Last Order : </h3><?php echo $orders ?> </p>
</body>
</html>