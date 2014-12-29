<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("conn.php");
/*
$ID = $_POST['ID'];
$ID2 = $_POST['ID2'];
$product_name = $_POST['product_name'];
$product_name2 = $_POST['product_name2'];*/
if($_SESSION['case']== 0){
	try {
		//$full_query = "update company_product (product, package, industry) ('" .$_POST['product']. "','" . $_POST['package']. "','" . $_POST['industry']. "')";
		$sql = "update company_product set product = '" .$_POST['product']. "',package ='". $_POST['package']. "',industry='". $_POST['industry']. "' where ID = '".$_POST['ID']."'";
		$conn->query($sql);
	}
	catch(PDOException $e){
		echo "修改失敗!: " . $e->getMessage();
	}
}
	//

if($_SESSION['case'] == 1){
	$ID2 = $_POST['ID2'];
	$product_name = $_POST['product_name'];
	try {
		$sql = "update hazard_industry set company = '" .$_POST['company']. "',industry='". $_POST['industry']. "' where ID = '$ID2' and product_name='$product_name'";
		$conn->query($sql);
	}
	catch(PDOException $e){
		echo "修改失敗!: " . $e->getMessage();
	}
}
	//
if($_SESSION['case'] == 2){
	try {
		$sql = "update replacement set company = '" .$_POST['company']. "',industry='". $_POST['industry']. "' where product_name = '". $_POST['product_name2']. "'";
		$conn->query($sql);
	}
	catch(PDOException $e){
		echo "修改失敗!: " . $e->getMessage();
	}
}
	
	$conn = null;
	

//else
//{
        //echo '您無權限觀看此頁面!';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
//}
?>