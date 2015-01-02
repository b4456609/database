<?php
   
	include("conn.php");
	
	try {
		$full_query = "INSERT into laboratory values ('" .$_POST['city']. "','" . $_POST['name']. "','" . $_POST['address']. "','" . $_POST['phone']. "','" . $_POST['item']. "')";
		$conn->query($full_query);		
		echo '<meta http-equiv=REFRESH CONTENT=1;url=mem.php>';
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
?>