<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
   include("conn.php");
   $id = $_POST['id'];
   $pwd = $_POST['pwd'];
   $sql = "SELECT * FROM manager where id = '$id'";
   $stm=$conn->query($sql);
   $result = $stm->fetch();
   if($id != null && $pwd != null && $result[0] == $id && $result[1] == $pwd)
	{
        $_SESSION['id'] = $id;
        echo "登入成功!";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=mem.php>';
	}
	else
	{
        echo "登入失敗!";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	}
?>


