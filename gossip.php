<html>
   <head>
       <title>gossip</title>
	   <style>
			table, th, td {
				 border: 1px solid black;
			}
		</style>
   </head>
 <body>
   <?php
   
   //not sure
	include("db_conn.php");
	
	echo "<table>
		<tr>
		<th>product_name</th>
		<th>company</th>
		<th>industry</th>
		<th>address</th>
		</tr>";
	
	try {
		$sql = "SELECT product_name, company, industry , address FROM gossip_product natural join hazard_industry";
		foreach ($conn->query($sql) as $row) {
			echo "<tr>";
			echo "<td>" . $row['product_name'] . "</td>";
			echo "<td>" . $row['company'] . "</td>";
			echo "<td>" . $row['industry'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			echo "</tr>";
		}
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
	echo "</table>";
	?>
 </body>
</html>
