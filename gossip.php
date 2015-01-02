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
	<h1>我要爆料</h1>
            <form method="post" action="gossip2.php">
                <p>
                    <label>產品名稱:
                        <input name="product_name" type="text" size="20">
                    </label>
                </p>
				
                <p>
					 <label>製造商:&nbsp;&nbsp;&nbsp;&nbsp;
                        <input name="company" type="text" size="20">
                    </label>
                </p>

                <p>
					<label>販賣公司:
                        <input name="industry" type="text" size="20">
                    </label>
                </p>
					<label>地址: 
                        <input name="address" type="text" size="40">
                    </label>
                <p>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Clear">
                </p>
            </form>
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

