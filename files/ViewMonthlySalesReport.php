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
<h1 style="text-align:center;">View Monthly Sales Report</h1>



	<div class= "main" id= "main">
		<form action="/action_page.php">
		  <label for="sdate">Start Date</label>
		  <input type="date" id="sdate" name="sdate">
		  <label for="edate"> &nbsp; &nbsp; End Date</label>
		  <input type="date" id="edate" name="edate"> <br>
		  <br>
			<button type="button">Download CSV</button>
		</form>
	</div>


</body>
</html>
