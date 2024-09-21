<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP - updaterecord</title>
</head>

<body>
<?php
	require_once "settings.php";
	/*$conn = @mysqli_connect($host,$user,$pwd,$sql_db); 
	if($conn)
	{
		$product_id = $_POST["Product_id"];
		#$name = $_POST["Product_name"];
		$qty = $_POST["Product_qty"];
		$cust_id = $_POST["Customer_id"];
		$id = 1;
		
		
		$query = "UPDATE sales SET product_id = '$product_id', cust_id= '$cust_id', quantity = '$qty' WHERE sale_id = $id";
		
		$result = mysqli_query($conn,$query);
		if($result)
		{
			echo "<p>Success</p>";
		}
	}*/
	$conn = new mysqli($host,$user,$pwd,$sql_db);

	if($conn)
	{
		$sale_id = $_POST["sale_id"];
		$product_id = $_POST["product_id"];
		#$name = $_POST["Product_name"];
		$qty = $_POST["Product_qty"];
		$cust_id = $_POST["Customer_id"];
		$sale_date = $_POST["date"];
		
		echo "$sale_date";
		$query = $conn->prepare("UPDATE sales SET product_id = ?, cust_id= ?, qty = ?,date=? WHERE sale_id = ?");
		
		$query->bind_param("iiisi",$product_id,$cust_id,$qty,$sale_date,$sale_id);
		
		$result = $query->execute();
		if($result)
		{
			echo "success";
		}
		
	}
	$query->close();
	$conn->close();
?>
	
</body>
</html>