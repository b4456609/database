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
	<!-- 新增新產品 -->
	<h1>下游業者之下架產品清單</h1>
	<form method = "post" action = "new_product.php">

         <p><label>產品名稱: 
               <input name = "product" type = "text" size = "25">
            </label></p>
			
		<p><label>業者名稱: 
               <input name = "company" type = "text" size = "25">
            </label></p>
			
		<p><label>業者地址: 
               <input name = "name" type = "text" size = "25">
            </label></p>
		
		<p>
            <label>劣油廠商: 

                <!-- the <select> tag presents a drop-down -->
                <!-- list with choices indicated by the -->
                <!-- <option> tags -->
               <select name = "industry">
                  <option value = "正義">正義</option>
                  <option value = "頂新">頂新</option>
                  <option value = "北海">北海</option>
               </select>
            </label>
         </p>
 
         <p>
            <input type = "submit" value = "Submit">
            <input type = "reset" value = "Clear">
         </p>   
      </form>
	  
	  
	  <h1>公司問題產品</h1>
	<form method = "post" action = "new_company_product.php">

         <p><label>產品名稱: 
               <input name = "product" type = "text" size = "25">
            </label></p>
			
		<p><label>包裝: 
               <input name = "package" type = "text" size = "25">
            </label></p>
		
		<p>
            <label>劣油廠商: 

                <!-- the <select> tag presents a drop-down -->
                <!-- list with choices indicated by the -->
                <!-- <option> tags -->
               <select name = "industry">
                  <option value = "正義">正義</option>
                  <option value = "頂新">頂新</option>
                  <option value = "北海">北海</option>
               </select>
            </label>
         </p>
 
         <p>
            <input type = "submit" value = "Submit">
            <input type = "reset" value = "Clear">
         </p>   
      </form>
	  
	  
		<h1>更換油品後上架清冊</h1>
	<form method = "post" action = "new_replcement.php">

         <p><label>產品名稱: 
               <input name = "product" type = "text" size = "25">
            </label></p>
			
		<p><label>業者名稱: 
               <input name = "industry" type = "text" size = "25">
            </label></p>
		
		<p><label>使用廠商: 
               <input name = "company" type = "text" size = "25">
            </label></p>
 
         <p>
            <input type = "submit" value = "Submit">
            <input type = "reset" value = "Clear">
         </p>   
      </form>
	  
	  <h1>合格實驗室</h1>
	  	<form method = "post" action = "new_lab.php">

         <p><label>city: 
               <input name = "city" type = "text" size = "25">
            </label></p>
			
		<p><label>name: 
               <input name = "name" type = "text" size = "25">
            </label></p>
		
		<p><label>address: 
               <input name = "address" type = "text" size = "25">
            </label></p>
			
		<p><label>phone: 
               <input name = "phone" type = "text" size = "25">
            </label></p>
			
		<p><label>item: 
               <input name = "item" type = "text" size = "25">
            </label></p>
		<!-- 應該要從資料庫拿出檢驗的項目給使用者勾-->
         <p>
            <input type = "submit" value = "Submit">
            <input type = "reset" value = "Clear">
         </p>   
      </form>
	  
	  <h1>檢驗項目</h1>
	  	<form method = "post" action = "new_examine.php">

         <p><label>item: 
               <input name = "item" type = "text" size = "25">
            </label></p>
			
		<p><label>method: 
               <textarea  name = "method" type = "text" size = "25"></textarea>
            </label></p>
         <p>
            <input type = "submit" value = "Submit">
            <input type = "reset" value = "Clear">
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

