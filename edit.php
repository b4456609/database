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
include("conn.php");

if($_SESSION['id'] != null){
$getid=$_GET['id'];

if($_GET['update']==0){
$gethazid=$_GET['gethazid'];
    //$getid=$_GET['id'];
	$sql = "SELECT * FROM company_product where id='$getid'";
	$result = $conn->query($sql);
	$row = $result->fetch();
	echo "<form name=\"form\" method=\"post\" action=\"edit2.php\">";
	echo"<input type ='hidden' name=\"ID\"value='$row[0]'/> <br>";
	echo"產品:<input type =\"text\"style =\"width:230\"name=\"product\"value=\"$row[1]\"/><br>";
	echo"包裝:<input type =\"text\"style =\"width:230\"name=\"package\"value=\"$row[2]\"/><br>";
	echo"廠商:<input type =\"text\"style =\"width:230\"name=\"industry\"value=\"$row[3]\"/><br>";
	$_SESSION['case']=0;
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
	}
	//
else if($_GET['update']==1){
	$gethazid=$_GET['gethazid'];
	$product_name =$_GET['product_name'];
	$sql = "SELECT * FROM hazard_industry where ID='$gethazid'and product_name='$product_name'";
	$result = $conn->query($sql);
	$row = $result->fetch();
	echo "<form name=\"form\" method=\"post\" action=\"edit2.php\">";
	echo "<input type =\"hidden\"style =\"width:250\"name=\"ID2\"value=\"$gethazid\"/> <br>";
	$_SESSION['ID2'] = $gethazid;
	$_SESSION['hazCompany'] = $row[2];
	echo"產品:<input type =\"text\"style =\"width:250\"name=\"product_name\"value=\"$row[1]\"/> <br>";
	echo"業者:<input type =\"text\"style =\"width:250\"name=\"company\"value=\"$row[2]\"/> <br>";
	echo"廠商:<input type =\"text\"style =\"width:250\"name=\"industry\"value=\"$row[3]\"/><br>";
	$_SESSION['case']=1;
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
	}
	//
else if($_GET['update']==2){
	$product_name2 =$_GET['product_name2'];
	$sql = "SELECT * FROM replacement where product_name='$product_name2'";
	$result = $conn->query($sql);
	$row = $result->fetch();
	$_SESSION['recompany'] = $row[1];
	echo "<form name=\"form\" method=\"post\" action=\"edit2.php\">";
	echo"產品:<input type =\"text\"style =\"width:230\"name=\"product_name2\"value=\"$product_name2\"/> <br>";
	echo"業者:<input type =\"text\"style =\"width:230\"name=\"company\"value=\"$row[1]\"/> <br>";
	echo"廠商:<input type =\"text\"style =\"width:230\"name=\"industry\"value=\"$row[2]\"/><br>";
	$_SESSION['case']=2;
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
	
	}
	//
else if($_GET['company2'] != null&&$_GET['update'] == 3){
    $company2=$_GET['company2'];
	$pro = $_GET['pro'];
	$sql = "SELECT product_name, company, industry , address ,ID FROM gossip_product natural join hazard_industry natural join company where company ='$company2'and product_name ='$pro' ";
	$result = $conn->query($sql);
	$row = $result->fetch();
	$_SESSION['goproductname'] = $row[0];
	$_SESSION['goscompany'] = $row[1];
	$_SESSION['goindustry'] = $row[2];
	$_SESSION['goaddress'] = $row[3];
	$_SESSION['goID'] = $row[4];
	echo "<form name=\"form\" method=\"post\" action=\"edit2.php\">";
	echo"產品:<input type =\"text\"style =\"width:230\"name=\"product_name3\"value=\"$row[0]\"/> <br>";
	echo"業者:<input type =\"text\"style =\"width:230\"name=\"company2\"value=\"$row[1]\"/> <br>";
	echo"廠商:<input type =\"text\"style =\"width:230\"name=\"industry2\"value=\"$row[2]\"/><br>";
	echo"地址:<input type =\"text\"style =\"width:230\"name=\"address\"value=\"$row[3]\"/><br>";
	$_SESSION['case']=3;
	echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
	
	}
	
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

?></div>
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
