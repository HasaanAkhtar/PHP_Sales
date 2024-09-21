<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<title>View Sales Report</title>
	<link href= "../styles/style.css" rel="stylesheet"/>
	<script src="../script/apply.js"></script>
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

    $sdate = $_POST["sdate"];
	$edate = $_POST["edate"];

    

  $issdate = false;
  $isedate = false;	


  
  if($sdate != Null)
  {
    $issdate = true;
  }
 if($edate != Null)
  {
    $isedate = true;
  }


$query = "SELECT * FROM 'sales' WHERE ";

if($issdate || $isedate)
{
	
$query = "SELECT * FROM sales WHERE date BETWEEN '$sdate' AND '$edate'";
	
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

	echo '		
	<html>
<head>
	<meta charset= "utf-8">
	<title>View Sales Report</title>
	<link href= "../styles/style.css" rel="stylesheet"/>
	<script src="../script/apply.js"></script>
</head>
	<body>
	<h2>Week Report From '.$sdate.' to '.$edate.'</h2>
	<div>
			<table id="datatable">
				<tr>
				  <th>Sales ID</th>
				  <th>Customer ID</th>
				  <th>Product ID</th>
				  <th>Product Qty</th>
				  <th>Date</th>

				</tr>
				';
	while ($row = mysqli_fetch_assoc($result))
	{
		echo '
		
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
	';}
	echo '		  </table>
		</div>
	</div>
	<div>
	<form action="DownloadWeeklyReport.php" method="post">
	<input type="hidden" id="sdate" name="sdate" value='.$sdate.'>
	 <input type="hidden" id="edate" name="edate" value='.$edate.'>
	<input type="submit" name="download" value="Download 
	CSV" />
	 
	</form>
	</div>
	</body>';
  
}
else{
	echo 'Data not founded try again.';
}
    mysqli_close ($conn);

}
	
?>

</html>
