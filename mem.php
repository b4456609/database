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

if($_SESSION['id']!=null){
	    $sql = "SELECT * FROM company_product";
        $stm= $conn->query($sql);
		echo"<table  border='1'>
		<tr>
		<th>ID </th>
		<th>product </th>
		<th>packagge </th>
		<th>industry </th>
		<th>新增 </th>
		<th>修改 </th>
		<th>刪除 </th>
		</tr>";
		
        while($row = $stm->fetch()){ 
				echo"<tr>";
				echo"<td> $row[0]</td>";
				echo"<td> $row[1]</td>";
				echo"<td> $row[2]</td>";
				echo"<td> $row[3]</td>";
				 echo '<td><a href="new.php">新增</a>    </td>';
                 echo '<td><a href="edit.php?id=' . $row[0] . '&gethazid=null&product_name=null&product_name2=null">修改</a> </td>';
				 echo '<td><a href="delete.php?id=' . $row[0] . '&delete=0">刪除</a></td>';
				 echo"</tr>";
        }echo"</table>";
		//
		$sql = "SELECT * FROM hazard_industry";
        $stm= $conn->query($sql);
		echo"<table  border='1'>
		<tr>
		<th>ID </th>
		<th>product_name </th>
		<th>company </th>
		<th>industry </th>
		<th>新增 </th>
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
				echo '<td><a href="new.php">新增</a>    </td>';
                echo '<td><a href="edit.php?gethazid=' . $row[0] . '&product_name=' . $row[1] . '&id=null&product_name2=null">修改</a> </td>';
				echo '<td><a href="delete.php?gethazid=' . $row[0] . '&product_name=' . $row[1] . '&delete=1">刪除</a></td>';
				echo"</tr>";
        }echo"</table>";
		//
		$sql = "SELECT * FROM replacement";
        $stm= $conn->query($sql);
		echo"<table  border='1'>
		<tr>
		<th>product_name </th>
		<th>company </th>
		<th>industry </th>
		<th>新增 </th>
		<th>修改 </th>
		<th>刪除 </th>
		</tr>";
        while($row = $stm->fetch()){ 
				echo"<tr>";
				echo"<td> $row[0]</td>";
				echo"<td> $row[1]</td>";
				echo"<td> $row[2]</td>";
                 //echo "<td>product_name:$row[0],company:$row[1],industry=$row[2]</td>";
				 echo '<td><a href="new.php">新增</a>    </td>';
                 echo '<td><a href="edit.php?product_name2=' . $row[0] . '&product_name&id=null&gethazid=null">修改</a></td>';
				 echo '<td><a href="delete.php?product_name2=' . $row[0] . '&delete=2">刪除</a></td>';
				 echo"</tr>";
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