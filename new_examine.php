<?php
   
	include("conn.php");
	
	try {
		$full_query = "INSERT into examine values ('" .$_POST['item']. "','" . $_POST['method']. "')";
		$conn->query($full_query);		
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>