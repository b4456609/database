<!DOCTYPE HTML>
<?php session_start();?>
<html>
<head>
    <title>company product</title>
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
		
		include("conn.php");
		
		$sql = 'SELECT * FROM company_product';				
		
		echo "<table border='1'>
		<tr>
		<th>產品名稱</th>
		<th>包裝種類</th>
		<th>製造商</th>
		</tr>";
		
		foreach ($conn->query($sql) as $row) {
					echo  "<tr>";
			echo  "<td>" . $row['product'] . "</td>";
			echo  "<td>" . $row['package'] . "</td>";
			echo  "<td>" . $row['industry'] . "</td>";
			echo "</tr>";	
		}
		
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