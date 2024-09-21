<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	
	require_once "settings.php";	// Load MySQL log in credentials
	$conn = @mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
 if (!$conn) 
{
      echo " <p>Connection Failed</p> ".mysqli_connect_error();
}
else 
{

    $proId = $_POST["proID"];
	$custId = $_POST["custID"];

    

  $isproId = false;


  
  if($proId != Null)
  {
    $isproId = true;
  }



$query = "SELECT * FROM 'sales' WHERE ";

if($isproId)
{
	
$query = "SELECT * FROM sales WHERE sale_id = '$proId' AND cust_id = '$custId'";
	
}
	$result = mysqli_query($conn,$query);
	
if (!$result) 
{         
	echo "<p> Something is wrong with query</p>";
	echo $query;
}
else if(mysqli_num_rows($result)!=0) 
{
	// printing the form after making sure that it contains data
  $row = mysqli_fetch_assoc($result);  
	echo '		
	<html>
<head>
	<meta charset= "utf-8">
	<title>View Sales Report</title>
	<link href= "../styles/style.css" rel="stylesheet"/>
	<script src="../script/apply.js"></script>
</head>
	<body>
	<div>
			<table id="datatable">
				<tr>
				  <th>Sales ID</th>
				  <th>Customer ID</th>
				  <th>Product ID</th>
				  <th>Product Qty</th>
				  <th>Date</th>

				</tr>
				<tr>
					<td>
					'.$row['sale_id'].'
					</td>
					<td>
					'.$row['cust_id'].'
					</td>
					<td>
					'.$row['product_id'].'
					</td>
					<td>
					'.$row['qty'].'
					</td>
					<td>
					'.$row['date'].'
					</td>

				</tr>
			  </table>
		</div>
	</div>
	</body>';
  
}
else{
	echo 'Data not founded try again.';
}
    mysqli_close ($conn);

}
	
?>
<body>
</body>
</html>