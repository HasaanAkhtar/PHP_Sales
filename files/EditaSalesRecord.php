<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset= "utf-8">

	<title>Edit Sales Record </title>
	<link href= "../styles/style.css" rel="stylesheet"/>
	<script src="../script/apply.js"></script>
</head>

<body>
<?php
	$page="EditaSalesRecord";
	include_once "mainheader.inc";
?> 
	
	<div class= "main" id= "main">
	
		<h1><strong>Edit Sales Record</strong></h1>
		
		<form class= "search" method="post" action = "EditSalesQueryForSearching.php" >
				<p><label for="Search_id">Search ID</label>&nbsp;&nbsp;<input type="text" name="Search_id" id = "Search_id"  size="50" title="Search_id" /></p>
				<p><input type="submit" value="Search" onclick="popUp()"/></p>
		</form>
			
		
		


</body>
</html>