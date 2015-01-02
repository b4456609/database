<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("conn.php");
if($_GET['delete'] == 0){
	try {
		echo "正在刪除! 完成後自動返回上一頁";
		$sql = "delete from company_product where id='".$_GET['id']."'";
		$conn->query($sql);
		echo '<meta http-equiv=REFRESH CONTENT=2;url=mem.php>';
	}
	catch(PDOException $e){
		echo "刪除失敗!: " . $e->getMessage();
		
	}
}

else if($_GET['delete'] == 1){
	try {
		echo "正在刪除! 完成後自動返回上一頁";
		$sql = "delete from hazard_industry where ID='".$_GET['gethazid']."' and product_name = '".$_GET['product_name']."'";
		$conn->query($sql);
		echo '<meta http-equiv=REFRESH CONTENT=2;url=mem.php>';
	}
	catch(PDOException $e){
		echo "刪除失敗!: " . $e->getMessage();
		
	}
}

else if($_GET['delete'] == 2){
//$sql = "delete from replacement where product_name = '$product_name2'";
	//$result = $conn->query($sql);
	try {
		echo "正在刪除! 完成後自動返回上一頁";
		$sql = "delete from replacement where product_name = '".$_GET['product_name2']."'";
		$conn->query($sql);
		echo '<meta http-equiv=REFRESH CONTENT=2;url=mem.php>';
	}
	catch(PDOException $e){
		echo "刪除失敗!: " . $e->getMessage();
		
	}
}
?>