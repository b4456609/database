<?php
   
	include("conn.php");
	
	try {
		$full_query = "INSERT into replacement values ('" .$_POST['product']. "','" . $_POST['package']. "','" . $_POST['industry']. "')";
		$conn->query($full_query);		
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>