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
	$ID2 = $_SESSION['ID2'];
	$hazcompany = $_SESSION['hazCompany'];
	$product_name = $_POST['product_name'];
	try {
	   
		$sql = "update company set company = '" .$_POST['company']. "'where company = '$hazcompany'";
		$conn->query($sql);
		$sql = "update hazard_industry set product_name ='$product_name',company = '" .$_POST['company']. "',industry='". $_POST['industry']. "' where ID = '$ID2' ";
		$conn->query($sql);
	}
	catch(PDOException $e){
		echo "修改失敗!: " . $e->getMessage();
	}
}
	//
if($_SESSION['case'] == 2){
    $recompany = $_SESSION['recompany'];
	try {
	  
		$sql = "update company set company = '" .$_POST['company']. "'where company = '$recompany'";
		$conn->query($sql);
		$sql = "update replacement set company = '" .$_POST['company']. "',industry = '". $_POST['industry']. "' where product_name = '". $_POST['product_name2']. "'";
		$conn->query($sql);
	}
	catch(PDOException $e){
		echo "修改失敗!: " . $e->getMessage();
	}
}
//
if($_SESSION['case'] == 3){
    $product_name = $_SESSION['goproductname'] ;
	$company=$_SESSION['goscompany'] ;
	$industry=$_SESSION['goindustry'];
	$address=$_SESSION['goaddress'];
	$gID = $_SESSION['goID'];
	try {
	  
		$full_query = "update  company set company = '" .$_POST['company2']. "',address = '" . $_POST['address']. "'where company = '$company'";
		$conn->query($full_query);
		
		$full_query = "update  hazard_industry set product_name = '" . $_POST['product_name3'] . "', company = '" . $_POST['company2']. "', industry = '" . $_POST['industry2']. "'where ID = '$gID'";
		$conn->query($full_query);
		
		//$full_query = "SELECT ID from hazard_industry where product_name = '" . $_POST['product_name'] . "'";
		//$receive = $conn->query($full_query);
		//$result = $receive->fetch();
	}
	catch(PDOException $e){
		echo "修改失敗!: " . $e->getMessage();
	}
}

	
	$conn = null;
	echo '<meta http-equiv=REFRESH CONTENT=1;url=mem.php>';

//else
//{
        //echo '您無權限觀看此頁面!';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
//}
?>