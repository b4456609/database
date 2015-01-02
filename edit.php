<?php session_start();?>
<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
<?php
include("conn.php");
if($_SESSION['id'] != null){
  if($_GET['id']>0){
    $getid=$_GET['id'];
	$sql = "SELECT * FROM company_product where id='$getid'";
	$result = $conn->query($sql);
	$row = $result->fetch();
	echo "<form name=\"form\" method=\"post\" action=\"edit2.php\">";
	echo"ID:<input type =\"\"style =\"width:230\"name=\"ID\"value=\"$getid\"/>(此項目無法修改) <br>";
	echo"產品:<input type =\"text\"style =\"width:230\"name=\"product\"value=\"$row[1]\"/><br>";
	echo"包裝:<input type =\"text\"style =\"width:230\"name=\"package\"value=\"$row[2]\"/><br>";
	echo"廠商:<input type =\"text\"style =\"width:230\"name=\"industry\"value=\"$row[3]\"/><br>";
	$_SESSION['case']=0;
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
	}
	//
else if($_GET['gethazid']!=null && $_GET['product_name']!= null){
	$gethazid=$_GET['gethazid'];$product_name =$_GET['product_name'];
	$sql = "SELECT * FROM hazard_industry where ID='$gethazid'and product_name='$product_name'";
	$result = $conn->query($sql);
	$row = $result->fetch();
	echo "<form name=\"form\" method=\"post\" action=\"edit2.php\">";
	echo"ID:	<input type =\"\"style =\"width:250\"name=\"ID2\"value=\"$gethazid\"/>(此項目無法修改) <br>";
	echo"產品:<input type =\"text\"style =\"width:250\"name=\"product_name\"value=\"$row[1]\"/>(此項目無法修改) <br>";
	echo"業者:<input type =\"text\"style =\"width:250\"name=\"company\"value=\"$row[2]\"/>(此項目無法修改) <br>";
	echo"廠商:<input type =\"text\"style =\"width:250\"name=\"industry\"value=\"$row[3]\"/><br>";
	$_SESSION['case']=1;
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
	}
	//
else if($_GET['product_name2'] != null){
	$product_name2 =$_GET['product_name2'];
	$sql = "SELECT * FROM replacement where product_name='$product_name2'";
	$result = $conn->query($sql);
	$row = $result->fetch();
	echo "<form name=\"form\" method=\"post\" action=\"edit2.php\">";
	echo"產品:<input type =\"text\"style =\"width:230\"name=\"product_name2\"value=\"$product_name2\"/>(此項目無法修改) <br>";
	echo"業者:<input type =\"text\"style =\"width:230\"name=\"company\"value=\"$row[1]\"/>(此項目無法修改) <br>";
	echo"廠商:<input type =\"text\"style =\"width:230\"name=\"industry\"value=\"$row[2]\"/><br>";
	$_SESSION['case']=2;
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
	
	}
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

?>