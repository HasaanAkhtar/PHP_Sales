<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset= "utf-8">

	<title>Add Sales Record </title>
	<link href= "../styles/style.css" rel="stylesheet"/>
	<script src="../script/apply.js"></script>
</head>

<body>

<?php
	$page="AddaSalesRecord";
	include_once "mainheader.inc";
?> 
	
<form id = "salessubmit" method="post" action="addRecord.php" enctype= "multipart/form-data">
	
	
	<div class= "main" id= "main">
	
	<h1><strong>Add Sales Record</strong></h1>
	
		<fieldset class="addsalesfield" id = "addsales">
			
			
			<p><label for="Product_id">Product ID</label>&nbsp;&nbsp;<input type="text" name="Product_id" id="Product_id"  size="50" title="Product_id" required/></p>
		
			<p><label for="Product_name">Product Name</label> &nbsp;&nbsp; <input type="text" name="Product_name" id="Product_name"  size="50" title="Alphabets Only!" required/>

			<p><label for="Product_qty">Product quantity</label> &nbsp;&nbsp; <input type="text" name="Product_qty" id="Product_qty"  size="50" title="Alphabets Only!" required/>
				
			<p><label for="Customer_id">Customer ID</label> &nbsp;&nbsp; <input type="text" name="Customer_id" id="Customer_id"  size="50" title="Alphabets Only!" required/>
			<p>
			<label for="date"><b>Date: </b></label>
			<input type="date" name="date" id="date" required/>
			</p>

		
		
		 <p><input type="submit" value="Upload"/></p>
		
		</fieldset>
		
	</div>
       
</form>

</body>
</html>