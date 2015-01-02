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
		$sql ="SELECT * FROM examine";
		//print_r(mysql_fetch_row($result));
		echo " 
		<table >
		<tr>
		<th>項目 </th>
		<th>檢測方法 </th>
		</tr>";
		
		foreach ($conn->query($sql) as $row)
		{
			echo "<tr>";
			echo "<td>".$row['item']."</td>";
			echo "<td>".$row['method']."</td>";	
			echo "</tr>";
			
			
		}
		echo " </table>";
		echo "</tr>";	
   ?>  
   <?php
		
	
		$sql = "SELECT * FROM laboratory natural join examine ";
		echo " 
		<table >
		<tr>
		<th>城市</th>
		<th>名稱 </th>
		<th>地址 </th>
		<th>電話 </th>
		<th>項目 </th>
		<th>檢測方法 </th>
		</tr>";
		
		foreach ($conn->query($sql) as $row)
		{
			echo "<tr>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['item']."</td>";
			echo "<td>".$row['method']."</td>";
				
			echo "</tr>";
			
		}
		echo " </table>";
		echo "</tr>";	
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



