<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("conn.php");
	$newid=$_POST['newid'];
	$_session['pwd']  =$_POST['pwd'];
	$_session['pwd2']  =$_POST['pwd2'];
	
	if('$newid' != null && '$pwd' != null && '$pwd2' != null && $_session['pwd'] == $_session['pwd2'])
	{

		$pwd = $_session['pwd'];
			try {
			$sql = "insert into manager(id, pwd) values ('$newid', '$pwd' )";
			 echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
			$conn->query($sql);
		}
			catch(PDOException $e){
			echo"$newid $pwd  $pwd2";
			echo "註冊失敗!: " . $e->getMessage();
		}
	  
	}
	else
	{	
			echo '註冊失敗!';
		   // echo '<meta http-equiv=REFRESH CONTENT=2;url=index2.php>';
	}
?>