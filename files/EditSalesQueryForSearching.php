<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit sales</title>
	<link href= "../styles/style.css" rel="stylesheet"/>
	<script src="../script/apply.js"></script>
</head>
<body>
	
<?php
	$page="EditSalesQueryForSearching";
	include_once "mainheader.inc";
	
	require_once "settings.php";	// Load MySQL log in credentials
	$conn = @mysqli_connect ($host,$user,$pwd,$sql_db);	// Log in and use database
 if (!$conn) 
{
      echo " <p>Connection Failed</p> ".mysqli_connect_error();
}
else 
{

    $title = $_POST["Search_id"];
//    $sdate = $_POST["sdate"];
//	$edate = $_POST["edate"];
    

  $istitle = false;


  
  if($title != Null)
  {
    $istitle = true;
  }



$query = "SELECT * FROM 'sales' WHERE ";

if($istitle)
{
	
$query = "SELECT * FROM sales WHERE sale_id = '$title'";
	
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
	echo '<form  class = "form-container" method="post" action="EditSalesQueryForUpdating.php" enctype= "multipart/form-data">	
	<fieldset class="editsalesfield" id = "editsales">
	<p><label for="sale_id">Sale Id</label>&nbsp;&nbsp;<input type="readonly" name="sale_id" id="sale_id"  size="50" title="sale_id"  readonly value="'.$row['sale_id'].'"/> </p>
	<p><label for="product_id">Product Id</label> &nbsp;&nbsp; <input type="text" name="product_id" id="product_id"  size="50" title="Alphabets Only!" value="'.$row['product_id'].'" />
	<p><label for="Product_qty">Product quantity</label> &nbsp;&nbsp; <input type="text" name="Product_qty" id="Product_qty"  size="50" title="Alphabets Only!" value="'.$row['qty'].'"/>
	<p><label for="Customer_id">Customer ID</label> &nbsp;&nbsp; <input type="text" name="Customer_id" id="Customer_id"  size="50" title="Alphabets Only!" value="'.$row['cust_id'].'" />
	<p>
	<label for="date"><b>Date: </b></label>
	<input type="date" name="date" id="date" value="'.$row['date'].'" />
	</p>
	<p><input type="submit" value="Update"/></p>
			
				</fieldset>
			</form>	';
  
}
else{
	echo 'Data not founded try again.';
}
    mysqli_close ($conn);

}
	
?>
		
   
</body>
</html>