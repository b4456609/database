<!DOCTYPE HTML>
<?php session_start();?>
<html>
<head>
    <title>gossip</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
    <div id="main">
        <?php include("header.php"); ?>
		
        <div id="site_content">
   <?php
   
   //not sure
	include("conn.php");
	
	echo "<table>
		<tr>
		<th>product_name</th>
		<th>company</th>
		<th>industry</th>
		<th>address</th>
		</tr>";
	
	try {
		$sql = "SELECT product_name, company, industry , address FROM gossip_product natural join hazard_industry natural join company";
		
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
 </div>
        <footer>
            <p>洪晟瑋 潘科維 范振原 林豐偉</p>
        </footer>
    </div>
    <!-- javascript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
    <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('ul.sf-menu').sooperfish();
        });
    </script>
</body>

</html>
