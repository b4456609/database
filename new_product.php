<html>
   <head>
       <title>gossip</title>
	   <meta charset='utf-8' />
	   <style>
			table, th, td {
				 border: 1px solid black;
			}
		</style>
   </head>
 <body><?php
   
   //not sure
	include("conn.php");
	
	try {
	$full_query = "insert into company values ('" .$_POST['company']. "','" . $_POST['name']. "')";
		echo $full_query;
		$conn->query($full_query);
		
		$full_query = "insert into hazard_industry(product_name, company, industry) values ('" . $_POST['product'] . "','" . $_POST['company']. "','" . $_POST['industry']. "')";
		echo $full_query;
		$conn->query($full_query);
		

	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
	?>
	 </body>
</html>