<?php
   
	include("conn.php");
	
	try {
			
		$full_query = "INSERT into company_product(product,package,industry) values ('" .$_POST['product']. "','" . $_POST['package']. "','" . $_POST['industry']. "')";
		$conn->query($full_query);		
		echo '<meta http-equiv=REFRESH CONTENT=1;url=mem.php>';
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>