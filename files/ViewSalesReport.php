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
	$page="ViewSalesReport";
	include_once "header.inc";
?> 
<h1 style="text-align:center;">View Sales Report</h1>



	<div class= "main" id= "main">
		<form action="ViewSalesQueryForSearching.php" method="post">
		  <label for="sdate">Start Date</label>
		  <label for="sdate">Start Date</label>
		  <input type="date" id="sdate" name="sdate">
		  <label for="edate"> &nbsp; &nbsp; End Date </label>
		  <input type="date" id="edate" name="edate"> <br>
		  <br>
			<button type="submit">Show Data</button>
		</form>
	</div>


</body>
</html>
