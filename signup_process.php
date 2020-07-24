<?php
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$address= $_POST['address'];



mysql_connect("localhost","root","");
mysql_select_db("billing");

$result2 = mysql_query("select username from user where username = '$username' ");
$row = mysql_fetch_array($result2);
if($username == $row['username'])
{
echo "Username is not available";
}
else
{


$result = "insert into user (name,email,username,password,address) values ('$name','$email','$username','$password','$address')";


$x = mysql_query($result) or die("Failed to query database".mysql_error());
 
if($x == 1)
{
echo "<h3>Account Created</h3>";
}
else
{
echo "<h3>There is error in database</h3>";
}
}

?>
