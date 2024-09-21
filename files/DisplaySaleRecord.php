<!DOCTYPE html>
<html>
<head>
	<meta charset= "utf-8">
	<title>View Sales Report</title>
	<link href= "../styles/style.css" rel="stylesheet"/>
	<script src="../script/apply.js"></script>
</head>
<body>
<?php
	$page="DisplaySaleRecord";
	include_once "header.inc";
?> 
	
	<div class= "main" id= "main">
		<form action="DisplaySalesQueryForSearching.php" method="post">
		
		 <div class="containerss">
			<input type="text" placeholder="Product ID" name="proID" id="proID" required>

			<input type="text" placeholder="Customer ID" name="custID" id="custID" required>

			<button type="submit" onclick="test()">Search</button>
			
		  </div>	
			
		
			
		</form>
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

				</tr>
			  </table>
		</div>
	</div>

	</body>			
</html>