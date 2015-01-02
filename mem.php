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
		<a href = "new.php">新增</a>
<?php
include("conn.php");

if($_SESSION['id']!=null){
	    $sql = "SELECT * FROM company_product";
        $stm= $conn->query($sql);
		echo"<table  >
		<tr>
		<th>ID </th>
		<th>product </th>
		<th>packagge </th>
		<th>industry </th>
		<th>修改 </th>
		<th>刪除 </th>
		</tr>";
		
        while($row = $stm->fetch()){ 
				echo"<tr>";
				echo"<td> $row[0]</td>";
				echo"<td> $row[1]</td>";
				echo"<td> $row[2]</td>";
				echo"<td> $row[3]</td>";
				
                 echo '<td><a href="edit.php?id=' . $row[0] . '&gethazid=0&product_name=null&product_name2=null &update=0">修改</a> </td>';
				 echo '<td><a href="delete.php?id=' . $row[0] . '&delete=0">刪除</a></td>';
				 echo"</tr>";
        }echo"</table>";
		//
		$sql = "SELECT id, product_name, company, industry FROM hazard_industry natural join company WHERE id not in(SELECT id from gossip_product)";
        $stm= $conn->query($sql);
		echo"<table  >
		<tr>
		<th>ID </th>
		<th>product_name </th>
		<th>company </th>
		<th>industry </th>
		<th>修改 </th>
		<th>刪除 </th>
		</tr>";
        while($row = $stm->fetch()){ 
				echo"<tr>";
				echo"<td> $row[0]</td>";
				echo"<td> $row[1]</td>";
				echo"<td> $row[2]</td>";
				echo"<td> $row[3]</td>";
                // echo "<td>ID:$row[0],product_name:$row[1],company=$row[2],industry=$row[3]</td>";
				
                echo '<td><a href="edit.php?gethazid=' . $row[0] . '&product_name=' . $row[1] . '&id=null&product_name2=null&update=1">修改</a> </td>';
				echo '<td><a href="delete.php?gethazid=' . $row[0] . '&product_name=' . $row[1] . '&delete=1">刪除</a></td>';
				echo"</tr>";
        }echo"</table>";
		//
		
		$sql = "SELECT product_name, company, industry , address FROM gossip_product natural join hazard_industry natural join company";
        $stm= $conn->query($sql);
		echo"<table>
		<tr>
		<th>product_name </th>
		<th>company </th>
		<th>industry </th>
		<th>address </th>
		<th>修改 </th>
		<th>刪除 </th>
		</tr>";
        foreach ($conn->query($sql) as $row) {
			echo "<tr>";
			echo "<td>" . $row['product_name'] . "</td>";
			echo "<td>" . $row['company'] . "</td>";
			echo "<td>" . $row['industry'] . "</td>";
			echo "<td>" . $row['address'] . "</td>";
			echo '<td><a href="edit.php?company2=' . $row['company'] . '&update=3&id=0&gethazid =0&pro=' . $row['product_name'] . '">修改</a></td>';
			echo '<td><a href="delete.php?company2=' . $row['company'] . '&delete=3">刪除</a></td>';
			echo "</tr>";
		}
		echo"</table>";
}

	else
	{
			echo '您無權限觀看此頁面!';
			//echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
	}
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