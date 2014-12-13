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
	include("conn.php");
	
	echo "<table>
		<tr>
		<th>product</th>
		<th>package</th>
		<th>industry</th>
		</tr>";
	
	try {
		$sql = "SELECT product, package, industry FROM company_product";
		foreach ($conn->query($sql) as $row) {
			echo "<tr>";
			echo "<td>" . $row['product'] . "</td>";
			echo "<td>" . $row['package'] . "</td>";
			echo "<td>" . $row['industry'] . "</td>";
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
