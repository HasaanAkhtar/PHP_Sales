<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP - addingrecord</title>
</head>

<body>
<?php
	require_once "settings.php";
	$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
if ($conn)
{
	$id = $_POST["Product_id"];
	$name = $_POST["Product_name"];
	$qty = $_POST["Product_qty"];
	$cust_id = $_POST["Customer_id"];
	$date = $_POST["date"];
	$last_row_query = "SELECT * FROM sales ORDER BY sale_id DESC LIMIT 1";
	$result = mysqli_query($conn,$last_row_query);

	$last_row = mysqli_fetch_row($result);
	$sale_id = $last_row[0] +1;
	
	$insert_query = "INSERT INTO `sales` (`sale_id`, `product_id`, `cust_id`, `qty`, `date`) VALUES ('$sale_id', '$id', '$cust_id', '$qty','$date');";
	
	$ans = mysqli_query($conn,$insert_query);
	if ($ans)
	{
		echo "<p>success</p>";
	}
	else
	{
		echo "failure";
	}
}
?>
</body>
</html>