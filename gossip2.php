<?php
   
	include("conn.php");
	
	try {
	
		$full_query = "INSERT into company values ('" .$_POST['company']. "','" . $_POST['address']. "')";
		$conn->query($full_query);
		
		$full_query = "INSERT into hazard_industry(product_name, company, industry) values ('" . $_POST['product_name'] . "','" . $_POST['company']. "','" . $_POST['industry']. "')";
		$conn->query($full_query);
		
		$full_query = "SELECT ID from hazard_industry where product_name = '" . $_POST['product_name'] . "'";
		$receive = $conn->query($full_query);
		$result = $receive->fetch();
		
		
		$full_query = "INSERT into gossip_product  values ('$result[0]')";
		$conn->query($full_query);
		echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>