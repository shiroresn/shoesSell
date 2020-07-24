<html>
<head>
<title>Fashion.com</title>
<link rel = "stylesheet" type="text/css" href = "billing_style.css">

</head>
<body>
<h3>
<?php
$i = 0;
$j=1;
$username = $_POST['username'];
$check = $_POST['checklist'];
$numberofprod = 0;
$amt = 0;
echo "Username : $username <br /> ";
echo "Your Selections : ";
for($i=0;$i<sizeof($check);$i++)
{
echo "<br />";
echo "$j.";
echo $check[$i];
$j++;
if($check[$i] == "Woodland Shoes")
{
echo " Rs. 2500";
$qty = $_POST['qty1'];
$pr= 2500 * $qty;
$amt = $amt + $pr;
echo "<br />Quantity : $qty";
echo "<br />Total : $pr"; 
$numberofprod = $numberofprod + $qty;
}
if($check[$i] == "Nike Shoes")
{
echo " Rs. 2600";
$qty = $_POST['qty2'];
$pr= 2600 * $qty;
$amt = $amt + $pr;
echo "<br />Quantity : $qty";
echo "<br />Total : $pr";
$numberofprod = $numberofprod + $qty;
}
if($check[$i] == "Adidas Shoes")
{
echo " Rs. 2000";
$qty = $_POST['qty3'];
$pr= 2000 * $qty;
$amt = $amt + $pr;
echo "<br />Quantity : $qty";
echo "<br />Total : $pr";
$numberofprod = $numberofprod + $qty;
}
if($check[$i] == "Bata Shoes")
{
echo " Rs. 3000";
$qty = $_POST['qty4'];
$pr= 3000 * $qty;
$amt = $amt + $pr;
echo "<br />Quantity : $qty";
echo "<br />Total : $pr";
$numberofprod = $numberofprod + $qty;
}
if($check[$i] == "Fancy Shoes")
{
echo " Rs. 1500";
$qty = $_POST['qty5'];
$pr= 1500 * $qty;
$amt = $amt + $pr;
echo "<br />Quantity : $qty";
echo "<br />Total : $pr";
$numberofprod = $numberofprod + $qty;
}
if($check[$i] == "Chinies Shoes")
{
echo " Rs. 1000";
$qty = $_POST['qty6'];
$pr= 1000 * $qty;
$amt = $amt + $pr;
echo "<br /><h3>Quantity : $qty</h3>";
echo "<br /><h3>Total : $pr</h3>";
$numberofprod = $numberofprod + $qty;
}

}
echo "<br />";
echo "Total Amount : $amt";
$dis = 0;
if($amt >= 5000)
{
$dis = 5 * $amt / 100;
}
else if($amt >= 10000)
{
$dis = 10 * $amt / 100;
}
else if($amt >= 15000)
{
$dis = 20 * $amt / 100;
}
echo "<br />Discount : $dis";
$net = $amt - $dis;
echo "<br />Net Payable Amount : $net";

?>
<form action = "last.php" method = "POST">
<input type="hidden" name="username" value="<?php echo "$username" ?>">
<input type="hidden" name="net" value="<?php echo "$net" ?>">
<input type="submit" name="submit" value="Place Order">
</form>
</h3>
</body>
</html>