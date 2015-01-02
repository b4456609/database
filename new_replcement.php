<?php
   
	include("conn.php");
	
	try {
		$full_query = "INSERT into company(company) values ('" .$_POST['company']. "') ";
		$conn->query($full_query);
		$full_query = "INSERT into replacement values ('" .$_POST['product']. "','" . $_POST['company']. "','" . $_POST['industry']. "')";
		$conn->query($full_query);	
		echo '<meta http-equiv=REFRESH CONTENT=1;url=mem.php>';
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>